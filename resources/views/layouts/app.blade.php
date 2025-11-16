<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lumospace - Modern Furniture & Lighting')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .search-slide-form {
            width: 0;
            overflow: hidden;
            transition: 0.3s ease-in-out;
        }

        .search-slide-form.active {
            width: 180px;
        }

        .search-input {
            border-radius: 20px;
            padding: 4px 10px;
        }
    </style>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-4">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                Lumospace
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav me-3">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Contact</a></li>
                </ul>
                <div class="d-flex align-items-center nav-icons">
                    <!-- Search Toggle Button -->
                    <a href="#" id="searchToggle" class="text-white me-3">
                        <i class="bi bi-search"></i>
                    </a>

                    <!-- Sliding Search Form -->
                    <form id="searchForm" action="{{ route('products.search') }}" method="GET"
                        class="d-flex align-items-center search-slide-form">
                        <input type="text" id="liveSearch" name="q" class="form-control form-control-sm search-input"
    placeholder="Search..." />

                    </form>


                    <a href="#" class="text-white me-3"><i class="bi bi-person"></i></a>
                    <a href="{{ route('service') }}" class="btn btn-warning fw-bold">Buy Now</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer bg-dark text-white mt-5 py-4">
        <div class="container text-center">
            <h5 class="fw-bold mb-2">Lumospace</h5>
            <p class="mb-1">Modern furniture & lighting crafted for your lifestyle.</p>
            <div class="mb-3">
                <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white"><i class="bi bi-envelope"></i></a>
            </div>
            <p class="small mb-0">&copy; {{ date('Y') }} Lumospace. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('searchToggle').addEventListener('click', function(e) {
            e.preventDefault();
            const box = document.getElementById('searchBox');
            box.style.display = (box.style.display === "none") ? "block" : "none";
        });
    </script>

    <script>
        document.getElementById("searchToggle").addEventListener("click", function(e) {
            e.preventDefault();

            // Jika bukan di halaman shop → redirect dan beri query search=open
            if (window.location.pathname !== "{{ route('products') }}") {
                window.location.href = "{{ route('products') }}?search=open";
                return;
            }

            // Jika sudah di halaman shop → slide open/close
            const form = document.getElementById("searchForm");
            form.classList.toggle("active");

            if (form.classList.contains("active")) {
                setTimeout(() => {
                    form.querySelector(".search-input").focus();
                }, 200);
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);

            // Jika datang dari klik ikon search
            if (urlParams.get('search') === 'open') {
                const form = document.getElementById("searchForm");

                // Buka slide
                form.classList.add("active");

                // Fokus input
                setTimeout(() => {
                    form.querySelector(".search-input").focus();
                }, 200);
            }
        });
    </script>




</body>

</html>
