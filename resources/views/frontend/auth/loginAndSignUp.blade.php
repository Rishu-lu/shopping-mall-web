@extends('layouts.app')

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/loginAndSignUp.css') }}">
@endpush

@section('content')
<div class="mesh-background">
    <!-- Animated Orbs -->
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    <div class="glass-card-wrapper">
        <div class="glass-card">
            
            <div class="glass-header">
                <div class="brand-logo">
                    <div class="logo-icon">M</div> MyAccount
                </div>
                <p class="glass-subtitle">Enter your details to proceed.</p>
            </div>

            <!-- Sleek Tab Switcher -->
            <div class="glass-tabs">
                <button class="tab-btn active" id="tabLogin" onclick="switchGlassMode('login')">Log In</button>
                <button class="tab-btn" id="tabSignup" onclick="switchGlassMode('signup')">Sign Up</button>
                <div class="tab-indicator" id="tabIndicator"></div>
            </div>

            <div class="forms-wrapper">
                
                <!-- LOGIN FORM -->
                <div class="glass-form active" id="glassLoginForm">
                    <form action="#" method="POST">
                        <div class="glass-input-group">
                            <label>Email Address</label>
                            <div class="glass-input-wrapper">
                                <i class="fa-regular fa-envelope glass-icon"></i>
                                <input type="email" placeholder="name@example.com" required>
                            </div>
                        </div>
                        
                        <div class="glass-input-group">
                            <label>Password</label>
                            <div class="glass-input-wrapper">
                                <i class="fa-solid fa-lock glass-icon"></i>
                                <input type="password" placeholder="••••••••" required>
                                <i class="fa-regular fa-eye toggle-password"></i>
                            </div>
                        </div>

                        <div class="glass-options">
                            <label class="glass-checkbox">
                                <input type="checkbox">
                                <span class="glass-checkmark"></span>
                                <span class="check-text">Remember me</span>
                            </label>
                            <a href="#" class="glass-link">Forgot Password?</a>
                        </div>
                        
                        <button type="submit" class="glass-btn primary">
                            Sign In
                        </button>
                        
                        <div class="glass-divider">
                            <span>or continue with</span>
                        </div>
                        
                        <div class="glass-social">
                            <button type="button" class="social-glass-btn">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="Google">
                            </button>
                            <button type="button" class="social-glass-btn">
                                <i class="fa-brands fa-facebook" style="color: #1877F2; font-size: 20px;"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- SIGNUP FORM -->
                <div class="glass-form" id="glassSignupForm">
                    <form action="#" method="POST">
                        <div class="glass-input-group">
                            <label>Full Name</label>
                            <div class="glass-input-wrapper">
                                <i class="fa-regular fa-user glass-icon"></i>
                                <input type="text" name="name" placeholder="John Doe" required>
                            </div>
                        </div>

                        <div class="glass-input-group">
                            <label>Email Address</label>
                            <div class="glass-input-wrapper">
                                <i class="fa-regular fa-envelope glass-icon"></i>
                                <input type="email" name="email" placeholder="name@example.com" required>
                            </div>
                        </div>
                        
                        <div class="glass-row">
                            <div class="glass-input-group flex-35">
                                <label>Code</label>
                                <div class="glass-input-wrapper">
                                    <select name="countryCode" class="glass-select" required>
                                        <option value="+91" style="color: #000;">+91</option>
                                        <option value="+1" style="color: #000;">+1</option>
                                        <option value="+44" style="color: #000;">+44</option>
                                    </select>
                                </div>
                            </div>
                            <div class="glass-input-group flex-65">
                                <label>Phone Number</label>
                                <div class="glass-input-wrapper">
                                    <i class="fa-solid fa-phone glass-icon"></i>
                                    <input type="number" name="phoneNumber" placeholder="9876543210" required>
                                </div>
                            </div>
                        </div>

                        <div class="glass-input-group">
                            <label>Gender</label>
                            <div class="glass-gender-options">
                                <label class="glass-radio">
                                    <input type="radio" name="gender" value="1" required checked>
                                    <span class="radio-custom"></span> Male
                                </label>
                                <label class="glass-radio">
                                    <input type="radio" name="gender" value="2">
                                    <span class="radio-custom"></span> Female
                                </label>
                                <label class="glass-radio">
                                    <input type="radio" name="gender" value="3">
                                    <span class="radio-custom"></span> Other
                                </label>
                            </div>
                        </div>
                        
                        <div class="glass-row">
                            <div class="glass-input-group flex-50">
                                <label>Password</label>
                                <div class="glass-input-wrapper">
                                    <i class="fa-solid fa-lock glass-icon"></i>
                                    <input type="password" name="password" placeholder="••••••••" required>
                                </div>
                            </div>
                            <div class="glass-input-group flex-50">
                                <label>Confirm Password</label>
                                <div class="glass-input-wrapper">
                                    <i class="fa-solid fa-lock glass-icon"></i>
                                    <input type="password" name="password_confirmation" placeholder="••••••••" required>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="glass-btn primary" style="margin-top: 15px;">
                            Create Account
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    function switchGlassMode(mode) {
        const loginForm = document.getElementById('glassLoginForm');
        const signupForm = document.getElementById('glassSignupForm');
        const tabLogin = document.getElementById('tabLogin');
        const tabSignup = document.getElementById('tabSignup');
        const indicator = document.getElementById('tabIndicator');

        if (mode === 'login') {
            loginForm.classList.add('active');
            signupForm.classList.remove('active');
            tabLogin.classList.add('active');
            tabSignup.classList.remove('active');
            indicator.style.transform = 'translateX(0)';
        } else {
            signupForm.classList.add('active');
            loginForm.classList.remove('active');
            tabSignup.classList.add('active');
            tabLogin.classList.remove('active');
            indicator.style.transform = 'translateX(100%)';
        }
    }

    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(function(icon) {
        icon.addEventListener('click', function() {
            let input = this.previousElementSibling;
            if (input.type === 'password') {
                input.type = 'text';
                this.classList.remove('fa-eye');
                this.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                this.classList.remove('fa-eye-slash');
                this.classList.add('fa-eye');
            }
        });
    });
</script>
@endpush
