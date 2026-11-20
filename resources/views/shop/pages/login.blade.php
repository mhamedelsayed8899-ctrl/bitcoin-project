
<x-navbar/>



  <div class="mobile-nav">
    <a href="index.html">Home</a>
    <a href="products.html">Products</a>
    <a href="contact.html">Contact</a>
    <a href="login.html">Login</a>
    <a href="register.html">Register</a>
  </div>

  <!-- Login Page -->
  <div class="auth-page">
    <div class="auth-bg">
      <div class="hero-glow hero-glow-1"></div>
      <div class="hero-glow hero-glow-2"></div>
    </div>

    <div class="auth-card">
      <div class="auth-header">
        <a href="index.html" class="logo">
          <div class="logo-icon"><i class="bi bi-lightning-charge-fill"></i></div>
          <span class="logo-text">Null <span>Shop</span></span>
        </a>
        <h2>Welcome Back</h2>
        <p>Sign in to your account to continue shopping</p>
      </div>

      <form id="login-form1" action="{{route("user.login.check")}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="login-email">Email Address</label>
          <input type="email" class="form-control-custom" id="login-email" name="email" placeholder="you@example.com" required>
        </div>
        <div class="form-group">
          <label for="login-password">Password</label>
          <div class="password-wrapper">
            <input type="password" class="form-control-custom" id="login-password" name="password" placeholder="Enter your password" required>
            <button type="button" class="password-toggle" aria-label="Toggle password visibility"><i class="bi bi-eye"></i></button>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check-custom" style="margin:0">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <a href="#" style="font-size:0.85rem;color:var(--primary-bright)">Forgot password?</a>
        </div>
        <button type="submit" class="btn-primary-custom w-100">Sign In</button>
      </form>

      <div class="auth-divider">or continue with</div>

      <div class="social-login">
        <button type="button" class="social-btn" aria-label="Sign in with Google"><i class="bi bi-google"></i></button>
        <button type="button" class="social-btn" aria-label="Sign in with Apple"><i class="bi bi-apple"></i></button>
        <button type="button" class="social-btn" aria-label="Sign in with Facebook"><i class="bi bi-facebook"></i></button>
      </div>

      <div class="auth-footer">
        Don't have an account? <a href="register.html">Create one</a>
      </div>
    </div>
  </div>









<x-footer/>

