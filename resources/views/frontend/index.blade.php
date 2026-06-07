@extends('layouts.app')

@push('styles')
<style>
/* Ultra-Attractive 7-Image Masonry Wall */
.gallery-section {
    padding: 100px 0;
    background: #fff;
}

.gallery-header {
    text-align: center;
    margin-bottom: 60px;
}

.gallery-header h2 {
    font-family: 'Outfit', sans-serif;
    font-size: 32px;
    font-weight: 800;
    color: #111;
    letter-spacing: -0.5px;
    text-transform: uppercase;
}

.gallery-header p {
    font-size: 16px;
    color: #888;
    margin-top: 12px;
    font-weight: 300;
}

.masonry-gallery {
    column-count: 3;
    column-gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.masonry-item {
    break-inside: avoid;
    margin-bottom: 20px;
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    cursor: pointer;
    box-shadow: 0 15px 35px rgba(0,0,0,0.06);
}

.masonry-item img {
    width: 100%;
    display: block;
    transition: transform 0.6s ease;
}

.masonry-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(234, 54, 113, 0.7) 0%, rgba(0,0,0,0.1) 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: all 0.4s ease;
}

.masonry-item:hover img {
    transform: scale(1.05);
}

.masonry-item:hover .masonry-overlay {
    opacity: 1;
}



/* Responsive */
@media (max-width: 992px) {
    .masonry-gallery { column-count: 2; }
}

@media (max-width: 576px) {
    .masonry-gallery { column-count: 1; }
}
</style>
@endpush
@section('content')
    <section class="hero-section">
        <!-- Background Image Container -->
        <div class="hero-bg-image">
            <img src="{{ asset('assets/images/hero-banner.png') }}" alt="Nail Polish Presentation">
        </div>
        <div class="hero-bg-image">
            <img src="{{ asset('assets/images/hero-banner2.png') }}" alt="Nail Polish Presentation">
        </div>
        <div class="hero-bg-image">
            <img src="{{ asset('assets/images/hero-banner3.png') }}" alt="Nail Polish Presentation">
        </div>
        <div class="hero-bg-image">
            <img src="{{ asset('assets/images/hero-banner4.png') }}" alt="Nail Polish Presentation">
        </div>

        <!-- Left Arrow -->
        <button class="carousel-arrow left-arrow">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </button>
        <!-- Right Arrow -->
        <button class="carousel-arrow right-arrow">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>

        <!-- Carousel Dots -->
        <div class="carousel-dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <div class="container">
            <div class="hero-content">
                <span class="subtitle">PREMIUM NAIL COLLECTION</span>
                <h1 class="main-title">
                    <span class="text-black">Brilliant Nails</span><br>
                    <span class="text-pink">Limitless You</span>
                </h1>
                <p class="description">
                    High-quality nail products for every style<br>and every occasion.
                </p>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">SHOP NOW &rarr;</a>
                    <a href="#" class="btn btn-outline">EXPLORE COLLECTION</a>
                </div>

                <div class="features">
                    <div class="feature-item">
                        <div class="icon">
                            <!-- Lotus/Flower Icon -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ea3671" stroke-width="1.5">
                                <path d="M12 22c-4-4-8-9-8-14a8 8 0 1116 0c0 5-4 10-8 14z" />
                            </svg>
                        </div>
                        <div class="feature-text">
                            <strong>Salon Quality</strong>
                            <span>At Home</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <!-- Shield Icon -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ea3671" stroke-width="1.5">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <div class="feature-text">
                            <strong>Long Lasting</strong>
                            <span>Chip Resistant</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <!-- Leaf Icon -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ea3671" stroke-width="1.5">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM12 22c-5.52 0-10-4.48-10-10S6.48 2 12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10z" />
                                <path d="M12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" />
                            </svg>
                        </div>
                        <div class="feature-text">
                            <strong>Vegan & Cruelty Free</strong>
                            <span>Safe for You</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <!-- Sparkle/Sun Icon -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ea3671" stroke-width="1.5">
                                <circle cx="12" cy="12" r="4" />
                                <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41" />
                            </svg>
                        </div>
                        <div class="feature-text">
                            <strong>Wide Range</strong>
                            <span>Trendy Shades</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Info Banner Section inside Hero -->
        <div class="info-banner-wrapper" style="position: absolute; bottom: -50px; left: 0; width: 100%; z-index: 30;">
            <div class="container">
                <div class="info-banner">
                    <div class="info-item">
                        <div class="info-icon">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#ea3671" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="1" y="3" width="15" height="13"></rect>
                                <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                <path d="M4 14h11"></path>
                            </svg>
                        </div>
                        <div class="info-text">
                            <strong>Free Shipping</strong>
                            <span>On orders above $59</span>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#ea3671" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                        </div>
                        <div class="info-text">
                            <strong>Easy Returns</strong>
                            <span>30 days return policy</span>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#ea3671" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                <path d="M9 12l2 2 4-4"></path>
                            </svg>
                        </div>
                        <div class="info-text">
                            <strong>Secure Payments</strong>
                            <span>100% secure checkout</span>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#ea3671" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                            </svg>
                        </div>
                        <div class="info-text">
                            <strong>24/7 Customer Support</strong>
                            <span>We're here to help</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop By Category Section -->
    <section class="category-section">
        <div class="container">
            <div class="section-header">
                <h2>SHOP BY CATEGORY</h2>
                <div class="header-divider">
                    <!-- Lotus icon matching the design -->
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="#ea3671">
                        <path d="M12 22c-4-4-8-9-8-14a8 8 0 1116 0c0 5-4 10-8 14z" />
                    </svg>
                </div>
            </div>
            
            <div class="category-grid">
                <a href="#" class="category-card">
                    <div class="category-img-wrapper">
                        <img src="{{ asset('assets/images/category/nail_polish.png') }}" alt="Nail Polish">
                    </div>
                    <div class="category-info">
                        <h3>Nail Polish</h3>
                        <span>(120+ Products)</span>
                    </div>
                </a>
                
                <a href="#" class="category-card">
                    <div class="category-img-wrapper">
                        <img src="{{ asset('assets/images/category/gel_polish.png') }}" alt="Gel Polish">
                    </div>
                    <div class="category-info">
                        <h3>Gel Polish</h3>
                        <span>(95+ Products)</span>
                    </div>
                </a>
                
                <a href="#" class="category-card">
                    <div class="category-img-wrapper">
                        <img src="{{ asset('assets/images/category/nail_art.png') }}" alt="Nail Art">
                    </div>
                    <div class="category-info">
                        <h3>Nail Art</h3>
                        <span>(200+ Products)</span>
                    </div>
                </a>
                
                <a href="#" class="category-card">
                    <div class="category-img-wrapper">
                        <img src="{{ asset('assets/images/category/nail_care.png') }}" alt="Nail Care">
                    </div>
                    <div class="category-info">
                        <h3>Nail Care</h3>
                        <span>(80+ Products)</span>
                    </div>
                </a>
                
                <a href="#" class="category-card">
                    <div class="category-img-wrapper">
                        <img src="{{ asset('assets/images/category/nail_tools.png') }}" alt="Accessories">
                    </div>
                    <div class="category-info">
                        <h3>Accessories</h3>
                        <span>(150+ Products)</span>
                    </div>
                </a>
                
                <a href="#" class="category-card">
                    <div class="category-img-wrapper">
                        <img src="{{ asset('assets/images/category/nail_kits.png') }}" alt="Sets & Kits">
                    </div>
                    <div class="category-info">
                        <h3>Sets & Kits</h3>
                        <span>(60+ Products)</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Best Selling Products Section -->
    <section class="products-section">
        <div class="container">
            <div class="products-header">
                <h2>BEST SELLING PRODUCTS</h2>
                <div class="products-divider"></div>
                <a href="#" class="view-all">VIEW ALL &rarr;</a>
            </div>
            
            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-badge">BEST SELLER</div>
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_polish_pink.png') }}" alt="Nailuxe Gel Polish">
                    </div>
                    <div class="product-info">
                        <h3>Nailuxe Gel Polish</h3>
                        <span class="product-variant">Rosy Pink</span>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(125)</span>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$12.99</span>
                                <span class="old-price">$15.99</span>
                            </div>
                            <button class="add-to-cart">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_polish_red.png') }}" alt="Nailuxe Gel Polish">
                    </div>
                    <div class="product-info">
                        <h3>Nailuxe Gel Polish</h3>
                        <span class="product-variant">Cherry Red</span>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(95)</span>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$12.99</span>
                                <span class="old-price">$16.99</span>
                            </div>
                            <button class="add-to-cart">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_polish_glitter.png') }}" alt="Glitter Top Coat">
                    </div>
                    <div class="product-info">
                        <h3>Glitter Top Coat</h3>
                        <span class="product-variant">Shine Effect</span>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(110)</span>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$11.99</span>
                                <span class="old-price">$14.99</span>
                            </div>
                            <button class="add-to-cart">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_brushes.png') }}" alt="Nail Art Brushes Set">
                    </div>
                    <div class="product-info">
                        <h3>Nail Art Brushes Set</h3>
                        <span class="product-variant">7 PCS Premium</span>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(80)</span>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$15.99</span>
                                <span class="old-price">$22.99</span>
                            </div>
                            <button class="add-to-cart">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/cuticle_oil.png') }}" alt="Cuticle Oil Pen">
                    </div>
                    <div class="product-info">
                        <h3>Cuticle Oil Pen</h3>
                        <span class="product-variant">Nourishing</span>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(54)</span>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$7.99</span>
                                <span class="old-price">$11.99</span>
                            </div>
                            <button class="add-to-cart">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_care_kit.png') }}" alt="Nailuxe Nail Care Kit">
                    </div>
                    <div class="product-info">
                        <h3>Nailuxe Nail Care Kit</h3>
                        <span class="product-variant">Complete Care</span>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(72)</span>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$24.99</span>
                                <span class="old-price">$34.99</span>
                            </div>
                            <button class="add-to-cart">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="product-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_polish_blue.png') }}" alt="Nailuxe Gel Polish">
                    </div>
                    <div class="product-info">
                        <h3>Nailuxe Gel Polish</h3>
                        <span class="product-variant">Ocean Blue</span>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(68)</span>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$12.99</span>
                                <span class="old-price">$16.99</span>
                            </div>
                            <button class="add-to-cart">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_file_set.png') }}" alt="Professional Nail Files">
                    </div>
                    <div class="product-info">
                        <h3>Professional Nail Files</h3>
                        <span class="product-variant">Double-Sided Set</span>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(145)</span>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$8.99</span>
                                <span class="old-price">$12.99</span>
                            </div>
                            <button class="add-to-cart">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="product-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/uv_led_lamp.png') }}" alt="UV/LED Nail Lamp">
                    </div>
                    <div class="product-info">
                        <h3>UV/LED Nail Lamp</h3>
                        <span class="product-variant">Fast Curing</span>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(230)</span>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$39.99</span>
                                <span class="old-price">$59.99</span>
                            </div>
                            <button class="add-to-cart">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 10 -->
                <div class="product-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/acrylic_powder.png') }}" alt="Acrylic Nail Powder">
                    </div>
                    <div class="product-info">
                        <h3>Acrylic Nail Powder</h3>
                        <span class="product-variant">Soft Pink</span>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                            <span class="reviews">(185)</span>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$14.99</span>
                                <span class="old-price">$19.99</span>
                            </div>
                            <button class="add-to-cart">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Banner Section -->
    <section class="trust-banner-section">
        <div class="container">
            <div class="trust-banner">
                <div class="trust-stats">
                    <div class="trust-item">
                        <div class="trust-icon">
                            <!-- User icon -->
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ea3671" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <div class="trust-text">
                            <strong>50K+</strong>
                            <span>Happy Customers</span>
                        </div>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <div class="trust-icon">
                            <!-- Star icon -->
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ea3671" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                        <div class="trust-text">
                            <strong>4.8/5</strong>
                            <span>Average Rating</span>
                        </div>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <div class="trust-icon">
                            <!-- Bag icon -->
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ea3671" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                        </div>
                        <div class="trust-text">
                            <strong>100%</strong>
                            <span>Authentic Products</span>
                        </div>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <div class="trust-icon">
                            <!-- Return box icon -->
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ea3671" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </div>
                        <div class="trust-text">
                            <strong>30 Days</strong>
                            <span>Hassle Free Returns</span>
                        </div>
                    </div>
                </div>
                
                <div class="trust-logos-wrapper">
                    <span class="seen-on-text">AS SEEN ON</span>
                    <div class="trust-logos">
                        <span class="logo-text vogue">VOGUE</span>
                        <span class="logo-text allure">allure</span>
                        <span class="logo-text glamour">GLAMOUR</span>
                        <span class="logo-text instyle">InStyle</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Banner Section -->
    <section class="promo-banner-section">
        <div class="container">
            <div class="promo-banner">
                <div class="promo-content">
                    <span class="promo-subtitle">SPECIAL LIMITED OFFER</span>
                    <h2 class="promo-title">UP TO 30% OFF</h2>
                    <p class="promo-text">ON SELECTED ITEMS</p>
                    <a href="#" class="btn btn-primary promo-btn">SHOP THE DEAL &rarr;</a>
                </div>
                <div class="promo-badge">
                    <span class="badge-text-top">SAVE</span>
                    <strong class="badge-text-mid">30%</strong>
                    <span class="badge-text-bottom">OFF</span>
                </div>
            </div>
        </div>
    </section>

    <!-- New Arrivals Section -->
    <section class="new-arrivals-section">
        <div class="container">
            <div class="products-header">
                <h2>NEW ARRIVALS</h2>
                <div class="products-divider"></div>
                <a href="#" class="view-all">VIEW ALL &rarr;</a>
            </div>
            
            <div class="new-arrivals-grid">
                <!-- Arrival 1 -->
                <div class="arrival-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_polish_pink.png') }}" alt="Pastel Pink">
                    </div>
                    <div class="product-info">
                        <h3>Pastel Pink</h3>
                        <span class="product-variant">Gel Polish</span>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$12.99</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arrival 2 -->
                <div class="arrival-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_brushes.png') }}" alt="Nail Art">
                    </div>
                    <div class="product-info">
                        <h3>Nail Art</h3>
                        <span class="product-variant">Brush Set</span>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$9.99</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arrival 3 -->
                <div class="arrival-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_polish_red.png') }}" alt="Nude Love">
                    </div>
                    <div class="product-info">
                        <h3>Nude Love</h3>
                        <span class="product-variant">Gel Polish</span>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$12.99</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arrival 4 -->
                <div class="arrival-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_polish_glitter.png') }}" alt="Rose Gold">
                    </div>
                    <div class="product-info">
                        <h3>Rose Gold</h3>
                        <span class="product-variant">Glitter Polish</span>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$11.99</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arrival 5 -->
                <div class="arrival-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_care_kit.png') }}" alt="Nail Care">
                    </div>
                    <div class="product-info">
                        <h3>Nail Care</h3>
                        <span class="product-variant">Essentials Kit</span>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$18.99</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arrival 6 -->
                <div class="arrival-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/acrylic_powder.png') }}" alt="Builder Gel">
                    </div>
                    <div class="product-info">
                        <h3>Builder Gel</h3>
                        <span class="product-variant">Clear</span>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$14.99</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arrival 7 -->
                <div class="arrival-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_polish_blue.png') }}" alt="Top Coat">
                    </div>
                    <div class="product-info">
                        <h3>Top Coat</h3>
                        <span class="product-variant">Matte Finish</span>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$9.99</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arrival 8 -->
                <div class="arrival-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/cuticle_oil.png') }}" alt="Mini Kit">
                    </div>
                    <div class="product-info">
                        <h3>Mini Kit</h3>
                        <span class="product-variant">Travel Set</span>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$16.99</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arrival 9 -->
                <div class="arrival-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_polish_red.png') }}" alt="Classic Red">
                    </div>
                    <div class="product-info">
                        <h3>Classic Red</h3>
                        <span class="product-variant">Gel Polish</span>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$11.99</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arrival 10 -->
                <div class="arrival-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/uv_led_lamp.png') }}" alt="Pro LED Lamp">
                    </div>
                    <div class="product-info">
                        <h3>Pro LED Lamp</h3>
                        <span class="product-variant">Salon Quality</span>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$45.99</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arrival 11 -->
                <div class="arrival-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/nail_file_set.png') }}" alt="Buffer Set">
                    </div>
                    <div class="product-info">
                        <h3>Buffer Set</h3>
                        <span class="product-variant">Pro Tools</span>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$6.99</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arrival 12 -->
                <div class="arrival-card">
                    <button class="wishlist-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <div class="product-image">
                        <img src="{{ asset('assets/images/products/acrylic_powder.png') }}" alt="White Powder">
                    </div>
                    <div class="product-info">
                        <h3>White Powder</h3>
                        <span class="product-variant">Acrylic Base</span>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="current-price">$13.99</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tips & Trends Section -->
    <section class="tips-section">
        <div class="container">
            <div class="tips-header">
                <h2>NAIL TIPS & TRENDS</h2>
                <a href="#" class="view-all">VIEW ALL &rarr;</a>
            </div>
            
            <div class="tips-grid">
                <!-- Tip 1 -->
                <a href="#" class="tip-card">
                    <img src="{{ asset('assets/images/tips/nail_care.png') }}" alt="Nail Care" class="tip-image">
                    <div class="tip-overlay"></div>
                    <div class="tip-content">
                        <span class="tip-category">NAIL CARE</span>
                        <h3>10 Tips for Strong<br>and Healthy Nails</h3>
                        <span class="read-more">Read More &rarr;</span>
                    </div>
                </a>
                
                <!-- Tip 2 -->
                <a href="#" class="tip-card">
                    <img src="{{ asset('assets/images/tips/nail_art.png') }}" alt="Nail Art" class="tip-image">
                    <div class="tip-overlay"></div>
                    <div class="tip-content">
                        <span class="tip-category">NAIL ART</span>
                        <h3>Trending Nail Art<br>Designs of 2024</h3>
                        <span class="read-more">Read More &rarr;</span>
                    </div>
                </a>
                
                <!-- Tip 3 -->
                <a href="#" class="tip-card">
                    <img src="{{ asset('assets/images/tips/nail_trends.png') }}" alt="Trends" class="tip-image">
                    <div class="tip-overlay"></div>
                    <div class="tip-content">
                        <span class="tip-category">TRENDS</span>
                        <h3>Best Spring Nail<br>Colors to Try</h3>
                        <span class="read-more">Read More &rarr;</span>
                    </div>
                </a>
                
                <!-- Tip 4 -->
                <a href="#" class="tip-card">
                    <img src="{{ asset('assets/images/tips/nail_guide.png') }}" alt="Guide" class="tip-image">
                    <div class="tip-overlay"></div>
                    <div class="tip-content">
                        <span class="tip-category">GUIDE</span>
                        <h3>How to Make Your<br>Nail Polish Last Longer</h3>
                        <span class="read-more">Read More &rarr;</span>
                    </div>
                </a>
            </div>
        </div>
    <!-- Ultra-Attractive 7-Image Masonry Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="gallery-header">
                <h2>#MyAccountStyle</h2>
                <p>Discover the latest trends curated by our community.</p>
            </div>
            
            <div class="masonry-gallery">
                <!-- Image 1 -->
                <div class="masonry-item">
                    <img src="{{ asset('assets/images/gallery/gal-1.jpg') }}" alt="Fashionable shopping bags - Style 1" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=800&auto=format&fit=crop'">
                    <div class="masonry-overlay"></div>
                </div>
                <!-- Image 2 -->
                <div class="masonry-item">
                    <img src="{{ asset('assets/images/gallery/gal-2.jpg') }}" alt="Beauty nail polish - Style 2" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1512496015851-a1dc8a47814b?q=80&w=800&auto=format&fit=crop'">
                    <div class="masonry-overlay"></div>
                </div>
                <!-- Image 3 -->
                <div class="masonry-item">
                    <img src="{{ asset('assets/images/gallery/gal-3.jpg') }}" alt="Woman with shopping bags - Style 3" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1515377905703-c4788e51af15?q=80&w=800&auto=format&fit=crop'">
                    <div class="masonry-overlay"></div>
                </div>
                <!-- Image 4 -->
                <div class="masonry-item">
                    <img src="{{ asset('assets/images/gallery/gal-4.jpg') }}" alt="Clothes rack fashion - Style 4" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=80&w=800&auto=format&fit=crop'">
                    <div class="masonry-overlay"></div>
                </div>
                <!-- Image 5 -->
                <div class="masonry-item">
                    <img src="{{ asset('assets/images/gallery/gal-5.jpg') }}" alt="Luxurious aesthetic style - Style 5" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?q=80&w=800&auto=format&fit=crop'">
                    <div class="masonry-overlay"></div>
                </div>
                <!-- Image 6 -->
                <div class="masonry-item">
                    <img src="{{ asset('assets/images/gallery/gal-6.jpg') }}" alt="Trendy apparel - Style 6" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1445205170230-053b83016050?q=80&w=800&auto=format&fit=crop'">
                    <div class="masonry-overlay"></div>
                </div>
                <!-- Image 7 -->
                <div class="masonry-item">
                    <img src="{{ asset('assets/images/gallery/gal-7.jpg') }}" alt="Chic fashion outfit - Style 7" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=800&auto=format&fit=crop'">
                    <div class="masonry-overlay"></div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.hero-bg-image');
        const leftArrow = document.querySelector('.left-arrow');
        const rightArrow = document.querySelector('.right-arrow');
        const dotsContainer = document.querySelector('.carousel-dots');
        let currentSlide = 0;
        let dots = [];

        // Generate dots dynamically
        if(slides.length > 0 && dotsContainer) {
            dotsContainer.innerHTML = ''; // Clear hardcoded dots
            slides.forEach((_, index) => {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                if(index === 0) dot.classList.add('active');
                
                dot.addEventListener('click', () => {
                    currentSlide = index;
                    showSlide(currentSlide);
                });
                
                dotsContainer.appendChild(dot);
                dots.push(dot);
            });
            
            slides[0].classList.add('active'); // Make first slide active initially
        }

        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            slides[index].classList.add('active');
            if(dots[index]) dots[index].classList.add('active');
        }

        if(leftArrow && rightArrow) {
            rightArrow.addEventListener('click', () => {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            });

            leftArrow.addEventListener('click', () => {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            });
        }
        
        // Auto slide every 5 seconds
        setInterval(() => {
            if(slides.length > 0) {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }
        }, 5000);
    });
</script>
@endpush
