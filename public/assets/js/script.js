document.addEventListener("DOMContentLoaded", function () {
    // Toggle Sidebar
    const sidebar = document.getElementById("sidebar");
    const toggleSidebar = document.getElementById("toggleSidebar");
    const sidebarOverlay = document.getElementById("sidebarOverlay");

    toggleSidebar.addEventListener("click", function () {
        sidebar.classList.toggle("active");
        sidebarOverlay.classList.toggle("active");
        document.body.classList.toggle("no-scroll");

        if (window.innerWidth > 768) {
            sidebar.classList.toggle("collapsed");
        }
    });

    // Tutup sidebar saat overlay diklik (mobile)
    sidebarOverlay.addEventListener("click", function () {
        sidebar.classList.remove("active");
        sidebarOverlay.classList.remove("active");
        document.body.classList.remove("no-scroll");
    });

    // Dark Mode Toggle
    const darkModeToggle = document.querySelector(".dark-mode-toggle");
    darkModeToggle.addEventListener("click", function () {
        this.classList.toggle("active");
        document.body.classList.toggle("dark-mode");
    });

    // Handle window resize
    function handleResize() {
        if (window.innerWidth > 768) {
            sidebar.classList.remove("active");
            sidebarOverlay.classList.remove("active");
            document.body.classList.remove("no-scroll");
        } else {
            if (!sidebar.classList.contains("active")) {
                sidebar.classList.remove("collapsed");
            }
        }
    }

    window.addEventListener("resize", handleResize);
    handleResize(); // Jalankan sekali saat load
});

function updatePerPage(value) {
    const url = new URL(window.location.href);
    url.searchParams.set('per_page', value);
    window.location.href = url.toString();
}

function updateCategoryFilter(value) {
    const url = new URL(window.location.href);
    url.searchParams.set('category', value);
    window.location.href = url.toString();
}

function updateStatusFilter(value){
    const url = new URL(window.location.href);
    url.searchParams.set('status', value);
    window.location.href = url.toString();
}

// Handle sorting when column headers are clicked
document.querySelectorAll('#productTable th[data-sort]').forEach(header => {
    header.addEventListener('click', function() {
        const sortColumn = this.getAttribute('data-sort');
        const url = new URL(window.location.href);

        // Toggle direction if same column is clicked
        if (url.searchParams.get('sort') === sortColumn) {
            const currentDirection = url.searchParams.get('direction');
            url.searchParams.set('direction', currentDirection === 'asc' ? 'desc' : 'asc');
        } else {
            url.searchParams.set('sort', sortColumn);
            url.searchParams.set('direction', 'asc');
        }

        window.location.href = url.toString();
    });
});

// Make table headers clickable (cursor pointer)
document.querySelectorAll('#productTable th[data-sort]').forEach(header => {
    header.style.cursor = 'pointer';
});
