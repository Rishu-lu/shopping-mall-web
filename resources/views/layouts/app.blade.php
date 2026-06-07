<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nailuxe - Brilliant Nails')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    @stack('styles')
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" class="scroll-to-top" aria-label="Scroll to top">
        <!-- Kinetic Rotating Sunburst Ring -->
        <svg class="sunburst-ring" width="50" height="50">
            <circle class="sunburst-circle" id="kineticCircle" cx="25" cy="25" r="22" stroke-width="2" stroke-linecap="round" fill="none" stroke-dasharray="6 8" />
        </svg>
        <div class="btn-core">
            <svg class="chevron-svg" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="18 15 12 9 6 15"></polyline>
            </svg>
        </div>
    </button>

    <script>
        const scrollToTopBtn = document.getElementById("scrollToTopBtn");
        const kineticCircle = document.getElementById("kineticCircle");
        
        window.addEventListener("scroll", () => {
            const scrollTop = window.scrollY;
            
            // Show/hide button after scrolling down 300px
            if (scrollTop > 300) {
                scrollToTopBtn.classList.add("show");
            } else {
                scrollToTopBtn.classList.remove("show");
            }
            
            // Rotate the kinetic sunburst ring based on scroll position
            if (kineticCircle) {
                kineticCircle.style.transform = `rotate(${scrollTop * 0.15}deg)`;
            }
        });
        
        scrollToTopBtn.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    </script>
</body>
</html>
