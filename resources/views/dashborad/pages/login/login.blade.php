<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - ShopAdmin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="{{ asset('null-assets')}}/css/style.css" rel="stylesheet">
  <link href="{{ asset('null-assets')}}/css/responsive.css" rel="stylesheet">
</head>
<body class="auth-body">

  <div class="auth-card">
    <!-- Logo -->
    <div class="auth-logo">
      <div class="brand-icon"><i class="bi bi-shop"></i></div>
      <span>ShopAdmin</span>
    </div>

    <h2>Welcome Back</h2>
    <p class="auth-subtitle">Sign in to your admin account</p>

    <!-- Login Form -->
    <form  action="{{route('login.check')}}" method="POST">
        @csrf
      <div class="mb-3">
        <label class="form-label" for="email">Email Address</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
          <input type="email" class="form-control" id="email" name="email" placeholder="admin@shopadmin.com" value="admin@shopadmin.com" required>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label" for="password">Password</label>
        <div class="password-field">
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" value="password123" required>
          <button type="button" class="password-toggle"><i class="bi bi-eye"></i></button>
        </div>
      </div>

      <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="remember" checked>
          <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <a href="forgot-password.html" class="text-primary-custom" style="font-size: 0.875rem;">Forgot password?</a>
      </div>

      <button type="submit" class="btn btn-primary w-100 py-2">
        <i class="bi bi-box-arrow-in-right"></i> Sign In
      </button>
    </form>

    <div class="auth-footer">
      <p class="mb-0">&copy; 2026 ShopAdmin. All rights reserved.</p>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('null-assets')}}/js/main.js"></script>
</body>
</html>
