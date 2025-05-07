 // Change main image when thumbnail is clicked
 function changeMainImage(element, newImageSrc) {
    // Remove active class from all thumbnails
    document.querySelectorAll('.thumbnail').forEach(thumb => {
        thumb.classList.remove('active');
    });
    
    // Add active class to clicked thumbnail
    element.classList.add('active');
    
    // Change main image with fade effect
    const mainImage = document.getElementById('mainImage');
    mainImage.style.opacity = 0;
    
    setTimeout(() => {
        mainImage.src = newImageSrc;
        mainImage.style.opacity = 1;
    }, 200);
}

// Tab functionality
function openTab(evt, tabName) {
    // Hide all tab content
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Remove active class from all tab buttons
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Show current tab and mark button as active
    document.getElementById(tabName).classList.add('active');
    evt.currentTarget.classList.add('active');
}

// Quantity control
function increaseQuantity() {
    const input = document.getElementById('quantityInput');
    input.value = parseInt(input.value) + 1;
}

function decreaseQuantity() {
    const input = document.getElementById('quantityInput');
    if (parseInt(input.value) > 1) {
        input.value = parseInt(input.value) - 1;
    }
}

// Variant selection
document.querySelectorAll('.variant-option').forEach(option => {
    option.addEventListener('click', function() {
        // Remove active class from siblings
        this.parentNode.querySelectorAll('.variant-option').forEach(sibling => {
            sibling.classList.remove('active');
        });
        
        // Add active class to clicked option
        this.classList.add('active');
    });
});

   // Toggle favorite button
   document.querySelectorAll('.btn-favorite').forEach(button => {
    button.addEventListener('click', function() {
        this.classList.toggle('active');
        if (this.classList.contains('active')) {
            this.innerHTML = '<i class="fas fa-heart"></i>';
        } else {
            this.innerHTML = '<i class="far fa-heart"></i>';
        }
    });
});

// Filter functionality would go here
// This is just a placeholder for actual implementation
document.querySelector('.btn-primary').addEventListener('click', function() {
    // In a real implementation, this would filter the products
    console.log('Applying filters...');
});