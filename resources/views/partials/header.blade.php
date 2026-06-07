    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-container">
            <div class="top-bar-left">
                <span class="top-promo">
                    <!-- Delivery Truck Icon -->
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 6px; vertical-align: middle;">
                        <rect x="1" y="3" width="15" height="13"></rect>
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                        <circle cx="5.5" cy="18.5" r="2.5"></circle>
                        <circle cx="18.5" cy="18.5" r="2.5"></circle>
                    </svg>
                    FREE SHIPPING on orders above $999 | Use Code: NAIL10
                </span>
                <span class="top-promo">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                    </svg>
                    Get 10% OFF on Your First Order - Use Code: NAIL10
                </span>
            </div>
            <div class="top-bar-right">
                <div class="top-dropdown">
                    English <svg class="caret-small" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z" /></svg>
                    <div class="top-dropdown-menu">
                        <a href="#"><span>English</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        <a href="#"><span>French</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        <a href="#"><span>Spanish</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        <a href="#"><span>German</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    </div>
                </div>
                <div class="top-dropdown">
                    USD $ <svg class="caret-small" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z" /></svg>
                    <div class="top-dropdown-menu">
                        <a href="#"><span>INR ₹</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        <a href="#"><span>EUR €</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        <a href="#"><span>GBP £</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        <a href="#"><span>CAD $</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-header-wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <div class="header-container">
                <!-- Mobile Hamburger Toggle Button -->
                <button type="button" class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- Logo -->
                <a href="#" class="logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Nailuxe Logo" style="height: 50px; width: auto; object-fit: contain; display: block; ">
                    <div class="logo-text">
                        <span class="logo-title">Nailuxe</span>
                        <span class="logo-subtitle">BEAUTY AT YOUR FINGERTIPS</span>
                    </div>
                </a>

                <!-- Search Bar Form -->
                <form action="#" method="GET" class="search-bar">
                    <input type="text" name="search" placeholder="Search for products...">
                    <input type="hidden" name="category" id="searchCategoryInput" value="all">
                    
                    <div class="search-category" id="searchCategoryBtn">
                        <span id="selectedCategory">All Categories</span>
                        <svg class="caret-small" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5z" />
                        </svg>
                        
                        <ul class="category-dropdown-menu">
                            <li data-value="all">All Categories</li>
                            <li data-value="gel-polish">Gel Polish</li>
                            <li data-value="regular-polish">Regular Polish</li>
                            <li data-value="nail-care">Nail Care</li>
                            <li data-value="nail-art">Nail Art</li>
                            <li data-value="accessories">Accessories</li>
                            <li data-value="sets-kits">Sets & Kits</li>
                        </ul>
                    </div>
                    
                    <button type="submit" class="search-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </form>

                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const categoryBtn = document.getElementById('searchCategoryBtn');
                        const categoryInput = document.getElementById('searchCategoryInput');
                        const selectedCategoryLabel = document.getElementById('selectedCategory');
                        
                        if (categoryBtn) {
                            const dropdownItems = categoryBtn.querySelectorAll('.category-dropdown-menu li');
                            dropdownItems.forEach(item => {
                                item.addEventListener('click', (e) => {
                                    e.stopPropagation(); // prevent dropdown closing triggers
                                    const value = item.getAttribute('data-value');
                                    const text = item.textContent;
                                    
                                    // Update visual text and input value
                                    if (categoryInput) categoryInput.value = value;
                                    if (selectedCategoryLabel) selectedCategoryLabel.textContent = text;
                                });
                            });
                        }
                    });
                </script>

                <!-- Header Actions -->
                <div class="header-actions">
                    <!-- Mobile Search Toggle -->
                    <button type="button" class="action-item mobile-search-toggle" id="mobileSearchToggle" aria-label="Toggle search">
                        <div class="action-icon-wrapper">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </div>
                    </button>

                    <!-- Account -->
                    <a href="{{ route('login.signup') }}" class="action-item action-account">
                        <div class="action-icon-wrapper">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="action-text">
                            <strong>Account</strong>
                            <span>Login / Signup</span>
                        </div>
                    </a>

                    <!-- Wishlist -->
                    <a href="#" class="action-item action-wishlist">
                        <div class="action-icon-wrapper icon-badge-container">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <span class="icon-badge">0</span>
                        </div>
                        <div class="action-text">
                            <strong>Wishlist</strong>
                        </div>
                    </a>

                    <!-- Cart -->
                    <a href="#" class="action-item action-cart">
                        <div class="action-icon-wrapper icon-badge-container">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                            <span class="icon-badge">0</span>
                        </div>
                        <div class="action-text">
                            <strong>Cart</strong>
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <!-- Navbar -->
        <nav class="main-navbar">
            <div class="nav-container">
                <ul class="nav-menu">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">SHOP <svg class="caret" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5z" />
                            </svg></a>
                        <div class="main-dropdown-menu">
                            <a href="#"><span>All Products</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            <a href="#"><span>New Arrivals</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            <a href="#"><span>Best Sellers</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        </div>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">NAIL POLISH <svg class="caret" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5z" />
                            </svg></a>
                        <div class="main-dropdown-menu">
                            <a href="#"><span>Gel Polish</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            <a href="#"><span>Regular Polish</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            <a href="#"><span>Top & Base Coats</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        </div>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">NAIL CARE <svg class="caret" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5z" />
                            </svg></a>
                        <div class="main-dropdown-menu">
                            <a href="#"><span>Cuticle Oils</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            <a href="#"><span>Strengtheners</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            <a href="#"><span>Hand Creams</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        </div>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">NAIL ART <svg class="caret" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5z" />
                            </svg></a>
                        <div class="main-dropdown-menu">
                            <a href="#"><span>Stickers & Decals</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            <a href="#"><span>Rhinestones</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            <a href="#"><span>Brushes & Tools</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        </div>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">ACCESSORIES <svg class="caret" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5z" />
                            </svg></a>
                        <div class="main-dropdown-menu">
                            <a href="#"><span>UV/LED Lamps</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            <a href="#"><span>Files & Buffers</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            <a href="#"><span>Storage & Cases</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        </div>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">SETS & KITS <svg class="caret" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5z" />
                            </svg></a>
                        <div class="main-dropdown-menu">
                            <a href="#"><span>Starter Kits</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            <a href="#"><span>Professional Kits</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                            <a href="#"><span>Gift Sets</span> <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">NEW ARRIVALS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">OFFERS <span class="badge-hot">HOT</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div class="mobile-drawer" id="mobileDrawer">
        <div class="mobile-drawer-header">
            <div class="logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Nailuxe Logo" style="height: 38px; width: auto; object-fit: contain;">
                <div class="logo-text">
                    <span class="logo-title" style="font-size: 1.4rem; font-family: 'Playfair Display', serif;">Nailuxe</span>
                </div>
            </div>
            <button class="mobile-drawer-close" id="mobileDrawerClose" aria-label="Close menu">&times;</button>
        </div>
        <div class="mobile-drawer-body">
            <ul class="mobile-nav-menu">
                <li><a href="#">HOME</a></li>
                <li class="has-mobile-submenu">
                    <a href="#" class="mobile-submenu-toggle">SHOP <svg class="caret-small" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z" /></svg></a>
                    <ul class="mobile-submenu">
                        <li><a href="#">All Products</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                    </ul>
                </li>
                <li class="has-mobile-submenu">
                    <a href="#" class="mobile-submenu-toggle">NAIL POLISH <svg class="caret-small" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z" /></svg></a>
                    <ul class="mobile-submenu">
                        <li><a href="#">Gel Polish</a></li>
                        <li><a href="#">Regular Polish</a></li>
                        <li><a href="#">Top & Base Coats</a></li>
                    </ul>
                </li>
                <li class="has-mobile-submenu">
                    <a href="#" class="mobile-submenu-toggle">NAIL CARE <svg class="caret-small" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z" /></svg></a>
                    <ul class="mobile-submenu">
                        <li><a href="#">Cuticle Oils</a></li>
                        <li><a href="#">Strengtheners</a></li>
                        <li><a href="#">Hand Creams</a></li>
                    </ul>
                </li>
                <li class="has-mobile-submenu">
                    <a href="#" class="mobile-submenu-toggle">NAIL ART <svg class="caret-small" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z" /></svg></a>
                    <ul class="mobile-submenu">
                        <li><a href="#">Stickers & Decals</a></li>
                        <li><a href="#">Rhinestones</a></li>
                        <li><a href="#">Brushes & Tools</a></li>
                    </ul>
                </li>
                <li><a href="#">ACCESSORIES</a></li>
                <li><a href="#">SETS & KITS</a></li>
                <li><a href="#">NEW ARRIVALS</a></li>
                <li><a href="#">OFFERS</a></li>
            </ul>
            
            <div class="mobile-drawer-footer">
                <a href="#" class="mobile-account-link">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span>My Account / Login</span>
                </a>
            </div>
        </div>
    </div>
    <div class="mobile-drawer-overlay" id="mobileDrawerOverlay"></div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Mobile Drawer Toggle
            const mobileNavToggle = document.getElementById('mobileNavToggle');
            const mobileDrawerClose = document.getElementById('mobileDrawerClose');
            const mobileDrawer = document.getElementById('mobileDrawer');
            const mobileDrawerOverlay = document.getElementById('mobileDrawerOverlay');
            
            if (mobileNavToggle && mobileDrawer && mobileDrawerOverlay) {
                const openMenu = () => {
                    mobileDrawer.classList.add('active');
                    mobileDrawerOverlay.classList.add('active');
                    document.body.style.overflow = 'hidden';
                };
                const closeMenu = () => {
                    mobileDrawer.classList.remove('active');
                    mobileDrawerOverlay.classList.remove('active');
                    document.body.style.overflow = '';
                };
                
                mobileNavToggle.addEventListener('click', openMenu);
                mobileDrawerClose.addEventListener('click', closeMenu);
                mobileDrawerOverlay.addEventListener('click', closeMenu);
            }
            
            // Submenu dropdown toggles inside mobile side menu drawer
            const submenuToggles = document.querySelectorAll('.mobile-submenu-toggle');
            submenuToggles.forEach(toggle => {
                toggle.addEventListener('click', (e) => {
                    e.preventDefault();
                    const parent = toggle.parentElement;
                    parent.classList.toggle('active');
                });
            });



            // Mobile Search Toggle
            const mobileSearchToggle = document.getElementById('mobileSearchToggle');
            const searchBar = document.querySelector('.search-bar');
            if (mobileSearchToggle && searchBar) {
                mobileSearchToggle.addEventListener('click', (e) => {
                    e.preventDefault();
                    searchBar.classList.toggle('active');
                    if (searchBar.classList.contains('active')) {
                        const input = searchBar.querySelector('input[type="text"]');
                        if (input) input.focus();
                    }
                });
            }

            // Category Selector Toggle on Mobile Tap/Click
            const categoryBtn = document.getElementById('searchCategoryBtn');
            if (categoryBtn) {
                categoryBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    categoryBtn.classList.toggle('active');
                });
                
                document.addEventListener('click', () => {
                    categoryBtn.classList.remove('active');
                });
            }
        });
    </script>
