<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Category Controller
     */
    public function category_index(Request $request)
    {
        $search = $request->get('search', '');
        $categories = ProductCategory::where('name', 'like', "%$search%")->orderBy('created_at', 'asc')->get();
        return view('admin.category.index', compact('categories', 'search'));
    }

    public function category_create()
    {
        return view('admin.category.create');
    }

    public function category_store(Request $request)
    {
        $messages = [
            'name.required' => 'Silakan isi nama kategori.',
            'name.unique' => 'Nama kategori tersebut sudah digunakan.',
            'status.required' => 'Silakan pilih status kategori.',
            'status.in' => 'Status harus berupa aktif (1) atau nonaktif (0).',
        ];

        $validatedData = $request->validate([
            'name' => 'required|unique:product_categories,name',
            'status'  => 'required|in:1,0',
        ], $messages);

        DB::beginTransaction();
        try {
            $category = new ProductCategory();
            $category->name = $validatedData['name'];
            $category->is_active = $validatedData['status'];
            $category->save();

            DB::commit();
            return redirect()->route('admin.category.index')->with('success', 'Kategori berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function category_edit($id)
    {
        $category = ProductCategory::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function category_update(Request $request, $id)
    {
        // Messages if validation failed
        $messages = [
            'name.required' => 'Silakan isi nama kategori.',
            'name.unique' => 'Nama kategori tersebut sudah digunakan.',
            'status.required' => 'Silakan pilih status kategori.',
            'status.in' => 'Status harus berupa aktif (1) atau nonaktif (0).',
        ];

        $validatedData = $request->validate([
            'name' => 'required|unique:product_categories,name,' . $id,
            'status'  => 'required|integer|in:1,0'
        ], $messages);

        DB::beginTransaction();
        try {
            $category = ProductCategory::find($id);
            $category->name = $validatedData['name'];
            $category->is_active = $validatedData['status'];
            $category->save();
            DB::commit();
            return redirect()->route('admin.category.index')->with('success', 'Kategori berhasil diubah');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function category_delete($id)
    {
        DB::beginTransaction();
        try {
            $category = ProductCategory::find($id);
            $category->delete();
            DB::commit();
            return redirect()->route('admin.category.index')->with('success', 'Kategori berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->withErrors('error', $e->getMessage());
        }
    }
    /**
     * End Category Controller
     */

    /**
     * Product Controller
     */

     public function product_index(Request $request)
     {
         $per_page = $request->get('per_page', 10);
         $search = $request->get('search', '');
         $category = $request->get('category', '');
         $sort_column = $request->get('sort', 'created_at');
         $sort_direction = $request->get('direction', 'asc');

         $products = Product::with('category')
             ->when($search, function($query) use ($search) {
                 $query->where('name', 'like', "%$search%")
                       ->orWhere('code', 'like', "%$search%");
             })
             ->when($category, function($query) use ($category) {
                 $query->where('category_id', $category);
             })
             ->when($request->has('status'), function($query) use ($request) {
                if($request->get('status') == 'all') {
                    return;
                }elseif($request->get('status') == '1') {
                    $query->where('status', 1);
                }else{
                    $query->where('status', 0);
                }
                 $query->where('status', $request->get('status'));
             })
             ->orderBy($sort_column, $sort_direction)
             ->paginate($per_page);

         $categories = ProductCategory::orderBy('name', 'asc')->get();

         return view('admin.product.index', compact('products', 'search', 'categories', 'sort_column', 'sort_direction'));
     }

    public function product_show($id)
    {
        $product = Product::with(['category', 'photos'])->find($id);
        return view('admin.product.show', compact('product'));
    }

    public function product_create()
    {
        $categories = ProductCategory::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store base64 image to storage
     */
    private function storeBase64Image($base64, $directory)
    {
        // Extract the base64 string (remove data:image/... prefix)
        $image = explode('base64,', $base64);
        $image = end($image);
        $image = str_replace(' ', '+', $image);

        // Generate unique filename
        $filename = Str::random(20) . '.png';
        $path = $directory . '/' . $filename;

        // Store the image
        Storage::disk('public')->put($path, base64_decode($image));

        return $path;
    }

    public function product_store(Request $request)
    {
        $messages = [
            'name.required' => 'Silakan isi nama produk.',
            'code.required' => 'Silakan isi kode produk.',
            'code.unique' => 'Kode produk tersebut sudah digunakan.',
            'category_id.required' => 'Silakan pilih kategori produk.',
            'category_id.exists' => 'Kategori produk tersebut tidak ditemukan.',
            'price.required' => 'Silakan isi harga produk.',
            'price.numeric' => 'Harga harus berupa angka.',
            'price.min' => 'Harga harus lebih besar dari 0.',
            'stock.required' => 'Silakan isi stok produk.',
            'stock.integer' => 'Stok harus berupa angka.',
            'stock.min' => 'Stok harus lebih besar dari 0.',
            'thumbnail.required' => 'Silakan pilih thumbnail produk.',
            'additional_images.string' => 'Gambar tambahan harus berupa array.',
            'status.boolean' => 'Status harus berupa true (1) atau false (0).',
            'is_popular.boolean' => 'Popular harus berupa true (1) atau false (0).',
            'is_best_seller.boolean' => 'Best Seller harus berupa true (1) atau false (0).',
        ];

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:products',
            'category_id' => 'required|exists:product_categories,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'size' => 'nullable|string|max:100',
            'stock' => 'required|integer|min:0',
            'status' => 'boolean',
            'is_popular' => 'boolean',
            'is_best_seller' => 'boolean',
            'thumbnail' => 'required|string', // base64 image
            'additional_images' => 'nullable|string' // JSON array of base64 images
        ], $messages);

        try {
            // Start transaction
            DB::beginTransaction();

            // Process thumbnail
            $thumbnailPath = $this->storeBase64Image($request->thumbnail, 'products/thumbnails');

            // Create the product
            $product = Product::create([
                'code' => $validated['code'],
                'category_id' => $validated['category_id'],
                'name' => $validated['name'],
                'description' => $validated['description'],
                'price' => $validated['price'],
                'size' => $validated['size'],
                'stock' => $validated['stock'],
                'status' => $validated['status'] ?? 0,
                'thumbnail' => $thumbnailPath,
                'is_popular' => $request->is_popular ?? 0,
                'is_best_seller' => $request->is_best_seller ?? 0,
            ]);

            // Process additional images if any
            if ($request->additional_images) {
                $additionalImages = json_decode($request->additional_images, true);

                foreach ($additionalImages as $imageData) {
                    $imagePath = $this->storeBase64Image($imageData, 'products/additional');

                    ProductPhoto::create([
                        'product_id' => $product->id,
                        'photo_path' => $imagePath
                    ]);
                }
            }

            // Commit transaction
            DB::commit();

            return redirect()->route('admin.product.index')
                ->with('success', 'Product created successfully!');
        } catch (\Exception $e) {
            // Rollback transaction on error
            DB::rollBack();

            // Delete any uploaded files if error occurs
            if (isset($thumbnailPath)) {
                Storage::delete($thumbnailPath);
            }

            return back()->withInput()
                ->with('error', 'Error creating product: ' . $e->getMessage());
        }
    }

    public function product_edit($id)
    {
        $product = Product::with('photos')->findOrFail($id);
        $categories = ProductCategory::all();
        return view('admin.product.edit', compact('product', 'categories'));
    }

    public function product_update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:products,code,' . $product->id,
            'category_id' => 'required|exists:product_categories,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'size' => 'nullable|string|max:100',
            'stock' => 'required|integer|min:0',
            'status' => 'boolean',
            'is_popular' => 'boolean',
            'is_best_seller' => 'boolean',
            'thumbnail' => 'sometimes|string', // base64 image
            'additional_images' => 'nullable|string', // JSON array of base64 images
            'existing_images' => 'nullable|array',
            'deleted_images' => 'nullable|string'
        ]);

        try {
            DB::beginTransaction();

            // Update thumbnail hanya jika dikirim dalam format base64 baru
            if ($request->filled('thumbnail') && Str::startsWith($request->thumbnail, 'data:image')) {
                // Hapus thumbnail lama
                if ($product->thumbnail) {
                    Storage::delete('public/' . $product->thumbnail);
                }

                $thumbnailPath = $this->storeBase64Image($request->thumbnail, 'products/thumbnails');
                $validated['thumbnail'] = $thumbnailPath;
            } else {
                // Gunakan thumbnail lama jika tidak diganti
                $validated['thumbnail'] = $product->thumbnail;
            }

            // Update product data
            $product->update([
                'code' => $validated['code'],
                'category_id' => $validated['category_id'],
                'name' => $validated['name'],
                'description' => $validated['description'],
                'price' => $validated['price'],
                'size' => $validated['size'],
                'stock' => $validated['stock'],
                'status' => $validated['status'] ?? 0,
                'thumbnail' => $validated['thumbnail'] ?? $product->thumbnail,
                'is_popular' => $request->is_popular ?? 0,
                'is_best_seller' => $request->is_best_seller ?? 0,
            ]);

            // Hapus gambar yang dipilih untuk dihapus
            if ($request->deleted_images) {
                $deletedImages = json_decode($request->deleted_images, true);
                foreach ($deletedImages as $imageId) {
                    $photo = ProductPhoto::find($imageId);
                    if ($photo) {
                        Storage::delete('public/' . $photo->photo_path);
                        $photo->delete();
                    }
                }
            }

            // Tambahkan gambar baru
            if ($request->additional_images) {
                $additionalImages = json_decode($request->additional_images, true);

                foreach ($additionalImages as $imageData) {
                    $imagePath = $this->storeBase64Image($imageData, 'products/additional');

                    ProductPhoto::create([
                        'product_id' => $product->id,
                        'photo_path' => $imagePath
                    ]);
                }
            }

            DB::commit();

            return redirect()->route('admin.product.index')
                ->with('success', 'Produk berhasil diperbarui!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()
                ->with('error', 'Gagal memperbarui produk: ' . $e->getMessage());
        }
    }
    public function product_delete($id)
    {
        DB::beginTransaction();
        try {
            $product = Product::with('photos')->findOrFail($id); // Tambahkan with('photos') biar gak lazy loading

            // Hapus thumbnail
            if ($product->thumbnail) {
                Storage::delete('public/' . $product->thumbnail);
            }

            // Hapus semua additional photos
            foreach ($product->photos as $photo) {
                Storage::delete('public/' . $photo->photo_path);
                $photo->delete();
            }

            // Hapus data produk
            $product->delete();

            DB::commit();
            return redirect()->route('admin.product.index')->with('success', 'Produk berhasil dihapus!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->with('error', 'Gagal menghapus produk: ' . $e->getMessage());
        }
    }

    /**
     * End Product Controller
     */
}
