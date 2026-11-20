 <!-- Main Content -->
  <div class="main-content" id="mainContent">

    <!-- Top Navbar -->
    <header class="top-navbar" id="topNavbar">
      <div class="navbar-left">
        <button class="sidebar-toggle" id="sidebarToggle" aria-label="Toggle sidebar">
          <i class="bi bi-list"></i>
        </button>
        <div class="search-bar d-none d-md-block">
          <i class="bi bi-search"></i>
          <input type="text" placeholder="Search anything...">
        </div>
      </div>

      <div class="navbar-right">
        <button class="navbar-icon-btn" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          <span class="badge-dot"></span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><h6 class="dropdown-header">Notifications</h6></li>
          <li><a class="dropdown-item" href="#"><i class="bi bi-cart-check"></i> New order #ORD-1042</a></li>
          <li><a class="dropdown-item" href="#"><i class="bi bi-person-plus"></i> New user registered</a></li>
          <li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-triangle"></i> Low stock: Wireless Earbuds</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item text-center" href="#">View all</a></li>
        </ul>

        <div class="dropdown">
          <button class="navbar-user" data-bs-toggle="dropdown">
            <div class="avatar-placeholder" >
                <img src="{{asset('storage/'. Auth::guard('dash')->user()->img )}}" alt="">
            </div>
            <div class="navbar-user-info">
              <div class="navbar-user-name">{{Auth::guard('dash')->user()->name}}</div>
              <div class="navbar-user-role">{{Auth::guard('dash')->user()->role}}</div>
            </div>
            <i class="bi bi-chevron-down text-muted" style="font-size:0.75rem;"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="profile.html"><i class="bi bi-person"></i> My Profile</a></li>
            <li><a class="dropdown-item" href="settings.html"><i class="bi bi-gear"></i> Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="login.html"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
          </ul>
        </div>
      </div>
    </header>
