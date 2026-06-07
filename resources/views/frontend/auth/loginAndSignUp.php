<?php $cssPath = function_exists('asset') ? asset('assets/css/loginAndSignUp.css') : '/assets/css/loginAndSignUp.css'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up | Shopping Mall</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $cssPath ?>">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="toggle-container">
                <div class="toggle-btn active" onclick="showLogin()">Login</div>
                <div class="toggle-btn" onclick="showSignup()">Sign Up</div>
                <div class="toggle-indicator"></div>
            </div>

            <!-- Login Form -->
            <form id="login-form" class="form active" action="#" method="POST">
                <h2>Welcome Back</h2>
                <p class="subtitle">Please enter your details to sign in</p>
                <div class="input-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="form-actions">
                    <label class="remember-me">
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
                <button type="submit" class="submit-btn">Sign In</button>
            </form>

            <!-- Signup Form -->
            <form id="signup-form" class="form" action="#" method="POST">
                <h2>Create Account</h2>
                <p class="subtitle">Join us for the best shopping experience</p>
                <div class="input-group">
                    <label for="signup-name">Full Name</label>
                    <input type="text" id="signup-name" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="input-group">
                    <label for="signup-email">Email</label>
                    <input type="email" id="signup-email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="signup-password">Password</label>
                    <input type="password" id="signup-password" name="password" placeholder="Create a password" required>
                </div>
                <button type="submit" class="submit-btn">Create Account</button>
            </form>
        </div>
    </div>

    <script>
        function showLogin() {
            document.getElementById('login-form').classList.add('active');
            document.getElementById('signup-form').classList.remove('active');
            
            const btns = document.querySelectorAll('.toggle-btn');
            btns[0].classList.add('active');
            btns[1].classList.remove('active');
            
            document.querySelector('.toggle-indicator').style.left = '0';
        }

        function showSignup() {
            document.getElementById('signup-form').classList.add('active');
            document.getElementById('login-form').classList.remove('active');
            
            const btns = document.querySelectorAll('.toggle-btn');
            btns[0].classList.remove('active');
            btns[1].classList.add('active');
            
            document.querySelector('.toggle-indicator').style.left = '50%';
        }
    </script>
</body>
</html>
