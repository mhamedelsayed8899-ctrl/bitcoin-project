<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - ShopAdmin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="{{asset('null-assets')}}/css/style.css" rel="stylesheet">
  <link href="{{asset('null-assets')}}/css/responsive.css" rel="stylesheet">
</head>
<body class="admin-body">

  <!-- Loader -->
  <div class="loader-overlay" id="loaderOverlay">
    <div class="loader-spinner"></div>
  </div>

  <!-- Sidebar Overlay (Mobile) -->
  <div class="sidebar-overlay" id="sidebarOverlay"></div>

  <!-- Sidebar -->
  <aside class="sidebar" id="sidebar">
    <div class="sidebar-brand">
      <div class="brand-icon"><i class="bi bi-shop"></i></div>
      <span class="brand-text">ShopAdmin</span>
    </div>

    <nav class="sidebar-nav">
      <p class="nav-section-title">Main Menu</p>
      <ul class="nav flex-column">
        <li class="nav-item"><a href="dashboard.html" class="nav-link active"><i class="bi bi-grid-1x2-fill"></i><span class="nav-label">Dashboard</span></a></li>
        <li class="nav-item"><a href="{{route("admin.index")}}" class="nav-link"><i class="bi bi-shield-lock"></i><span class="nav-label">Admins</span></a></li>
        <li class="nav-item"><a href="{{route("user.index")}}" class="nav-link"><i class="bi bi-people"></i><span class="nav-label">Users</span></a></li>
        <li class="nav-item"><a href="{{route('product.index')}}" class="nav-link"><i class="bi bi-box-seam"></i><span class="nav-label">Products</span></a></li>
        <li class="nav-item"><a href="{{route('categorie.index')}}" class="nav-link"><i class="bi bi-tags"></i><span class="nav-label">Categories</span></a></li>
        <li class="nav-item"><a href="orders.html" class="nav-link"><i class="bi bi-cart-check"></i><span class="nav-label">Orders</span></a></li>
        <li class="nav-item"><a href="{{route("dashboard.messages")}}" class="nav-link"><i class="bi bi-envelope"></i><span class="nav-label">Messages</span><span class="nav-badge">5</span></a></li>
      </ul>

      <p class="nav-section-title">System</p>
      <ul class="nav flex-column">
        <li class="nav-item"><a href="settings.html" class="nav-link"><i class="bi bi-gear"></i><span class="nav-label">Settings</span></a></li>
        <li class="nav-item"><a href="profile.html" class="nav-link"><i class="bi bi-person-circle"></i><span class="nav-label">Profile</span></a></li>
      </ul>
    </nav>

    <div class="sidebar-footer">
      <a href="{{route('admin.logout')}}" class="nav-link"><i class="bi bi-box-arrow-left"></i><span class="nav-label">Logout</span></a>
    </div>
  </aside>
