
@extends('dashborad.layout.min')



@section('body')



 <!-- Page Content -->
    <div class="page-content">

      <!-- Page Header -->
      <div class="page-header">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
        <h1>Dashboard</h1>
        <p>Welcome back, Sarah! Here's what's happening with your store today.</p>
      </div>

      <!-- Statistics Cards -->
      <div class="row g-3 mb-4">
        <div class="col-xl-3 col-md-6">
          <div class="card stat-card">
            <span class="stat-change up"><i class="bi bi-arrow-up"></i> 12%</span>
            <div class="stat-icon primary"><i class="bi bi-box-seam"></i></div>
            <div class="stat-value">1,284</div>
            <div class="stat-label">Total Products</div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card stat-card">
            <span class="stat-change up"><i class="bi bi-arrow-up"></i> 5%</span>
            <div class="stat-icon info"><i class="bi bi-tags"></i></div>
            <div class="stat-value">48</div>
            <div class="stat-label">Total Categories</div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card stat-card">
            <span class="stat-change up"><i class="bi bi-arrow-up"></i> 18%</span>
            <div class="stat-icon success"><i class="bi bi-people"></i></div>
            <div class="stat-value">8,432</div>
            <div class="stat-label">Total Users</div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card stat-card">
            <div class="stat-icon warning"><i class="bi bi-shield-lock"></i></div>
            <div class="stat-value">12</div>
            <div class="stat-label">Total Admins</div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card stat-card">
            <span class="stat-change up"><i class="bi bi-arrow-up"></i> 24%</span>
            <div class="stat-icon primary"><i class="bi bi-cart-check"></i></div>
            <div class="stat-value">3,567</div>
            <div class="stat-label">Total Orders</div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card stat-card">
            <div class="stat-icon warning"><i class="bi bi-clock-history"></i></div>
            <div class="stat-value">142</div>
            <div class="stat-label">Pending Orders</div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card stat-card">
            <span class="stat-change up"><i class="bi bi-arrow-up"></i> 8%</span>
            <div class="stat-icon success"><i class="bi bi-check-circle"></i></div>
            <div class="stat-value">3,312</div>
            <div class="stat-label">Completed Orders</div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card stat-card">
            <span class="stat-change up"><i class="bi bi-arrow-up"></i> 32%</span>
            <div class="stat-icon success"><i class="bi bi-currency-dollar"></i></div>
            <div class="stat-value">$284,590</div>
            <div class="stat-label">Total Revenue</div>
          </div>
        </div>
      </div>

      <!-- Chart + Quick Actions Row -->
      <div class="row g-3 mb-4">
        <!-- Sales Chart -->
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              <h5><i class="bi bi-bar-chart-line me-2"></i>Sales Overview</h5>
              <select class="form-select form-select-sm" style="width: auto; font-size: 0.8125rem;">
                <option>Last 12 Months</option>
                <option>Last 6 Months</option>
                <option>Last 30 Days</option>
              </select>
            </div>
            <div class="card-body">
              <div class="sales-chart">
                <div class="chart-bar-wrapper"><div class="chart-bar" data-height="45"></div><span class="chart-label">Jan</span></div>
                <div class="chart-bar-wrapper"><div class="chart-bar" data-height="62"></div><span class="chart-label">Feb</span></div>
                <div class="chart-bar-wrapper"><div class="chart-bar" data-height="55"></div><span class="chart-label">Mar</span></div>
                <div class="chart-bar-wrapper"><div class="chart-bar" data-height="78"></div><span class="chart-label">Apr</span></div>
                <div class="chart-bar-wrapper"><div class="chart-bar" data-height="68"></div><span class="chart-label">May</span></div>
                <div class="chart-bar-wrapper"><div class="chart-bar" data-height="85"></div><span class="chart-label">Jun</span></div>
                <div class="chart-bar-wrapper"><div class="chart-bar" data-height="72"></div><span class="chart-label">Jul</span></div>
                <div class="chart-bar-wrapper"><div class="chart-bar" data-height="90"></div><span class="chart-label">Aug</span></div>
                <div class="chart-bar-wrapper"><div class="chart-bar" data-height="82"></div><span class="chart-label">Sep</span></div>
                <div class="chart-bar-wrapper"><div class="chart-bar" data-height="95"></div><span class="chart-label">Oct</span></div>
                <div class="chart-bar-wrapper"><div class="chart-bar" data-height="88"></div><span class="chart-label">Nov</span></div>
                <div class="chart-bar-wrapper"><div class="chart-bar" data-height="100"></div><span class="chart-label">Dec</span></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-lg-4">
          <div class="card h-100">
            <div class="card-header">
              <h5><i class="bi bi-lightning me-2"></i>Quick Actions</h5>
            </div>
            <div class="card-body">
              <div class="row g-2">
                <div class="col-6"><a href="product-create.html" class="quick-action-btn"><i class="bi bi-plus-circle"></i><span>Add Product</span></a></div>
                <div class="col-6"><a href="order-details.html" class="quick-action-btn"><i class="bi bi-receipt"></i><span>View Orders</span></a></div>
                <div class="col-6"><a href="user-create.html" class="quick-action-btn"><i class="bi bi-person-plus"></i><span>Add User</span></a></div>
                <div class="col-6"><a href="category-create.html" class="quick-action-btn"><i class="bi bi-tag"></i><span>Add Category</span></a></div>
                <div class="col-6"><a href="messages.html" class="quick-action-btn"><i class="bi bi-envelope"></i><span>Messages</span></a></div>
                <div class="col-6"><a href="settings.html" class="quick-action-btn"><i class="bi bi-gear"></i><span>Settings</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Recent Orders + Notifications -->
      <div class="row g-3 mb-4">
        <!-- Recent Orders -->
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              <h5><i class="bi bi-clock-history me-2"></i>Recent Orders</h5>
              <a href="orders.html" class="btn btn-sm btn-outline-primary">View All</a>
            </div>
            <div class="card-body p-0">
              <div class="table-wrapper">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Customer</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-label="Order ID"><a href="order-details.html" class="text-primary-custom fw-semibold">#ORD-1042</a></td>
                      <td data-label="Customer">
                        <div class="table-user">
                          <div class="avatar-placeholder" style="background:#3fb950;">JD</div>
                          <div class="table-user-info"><div class="name">John Doe</div></div>
                        </div>
                      </td>
                      <td data-label="Date">Aug 3, 2026</td>
                      <td data-label="Status"><span class="badge badge-status-pending">Pending</span></td>
                      <td data-label="Total" class="fw-semibold">$249.99</td>
                    </tr>
                    <tr>
                      <td data-label="Order ID"><a href="order-details.html" class="text-primary-custom fw-semibold">#ORD-1041</a></td>
                      <td data-label="Customer">
                        <div class="table-user">
                          <div class="avatar-placeholder" style="background:#58a6ff;">EM</div>
                          <div class="table-user-info"><div class="name">Emma Miller</div></div>
                        </div>
                      </td>
                      <td data-label="Date">Aug 3, 2026</td>
                      <td data-label="Status"><span class="badge badge-status-completed">Completed</span></td>
                      <td data-label="Total" class="fw-semibold">$89.50</td>
                    </tr>
                    <tr>
                      <td data-label="Order ID"><a href="order-details.html" class="text-primary-custom fw-semibold">#ORD-1040</a></td>
                      <td data-label="Customer">
                        <div class="table-user">
                          <div class="avatar-placeholder" style="background:#d29922;">MK</div>
                          <div class="table-user-info"><div class="name">Michael Kim</div></div>
                        </div>
                      </td>
                      <td data-label="Date">Aug 2, 2026</td>
                      <td data-label="Status"><span class="badge badge-status-processing">Processing</span></td>
                      <td data-label="Total" class="fw-semibold">$1,299.00</td>
                    </tr>
                    <tr>
                      <td data-label="Order ID"><a href="order-details.html" class="text-primary-custom fw-semibold">#ORD-1039</a></td>
                      <td data-label="Customer">
                        <div class="table-user">
                          <div class="avatar-placeholder" style="background:#f85149;">LS</div>
                          <div class="table-user-info"><div class="name">Lisa Santos</div></div>
                        </div>
                      </td>
                      <td data-label="Date">Aug 2, 2026</td>
                      <td data-label="Status"><span class="badge badge-status-completed">Completed</span></td>
                      <td data-label="Total" class="fw-semibold">$45.00</td>
                    </tr>
                    <tr>
                      <td data-label="Order ID"><a href="order-details.html" class="text-primary-custom fw-semibold">#ORD-1038</a></td>
                      <td data-label="Customer">
                        <div class="table-user">
                          <div class="avatar-placeholder" style="background:#a371f7;">RW</div>
                          <div class="table-user-info"><div class="name">Robert Wilson</div></div>
                        </div>
                      </td>
                      <td data-label="Date">Aug 1, 2026</td>
                      <td data-label="Status"><span class="badge badge-status-cancelled">Cancelled</span></td>
                      <td data-label="Total" class="fw-semibold">$175.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Notifications -->
        <div class="col-lg-4">
          <div class="card h-100">
            <div class="card-header">
              <h5><i class="bi bi-bell me-2"></i>Notifications</h5>
              <span class="badge bg-danger">4</span>
            </div>
            <div class="card-body">
              <div class="notification-item">
                <div class="notification-icon" style="background:rgba(63,185,80,0.15);color:#3fb950;"><i class="bi bi-cart-check"></i></div>
                <div class="notification-content">
                  <p>New order <strong>#ORD-1042</strong> received</p>
                  <span>5 minutes ago</span>
                </div>
              </div>
              <div class="notification-item">
                <div class="notification-icon" style="background:rgba(88,166,255,0.15);color:#58a6ff;"><i class="bi bi-person-plus"></i></div>
                <div class="notification-content">
                  <p><strong>Emma Miller</strong> registered an account</p>
                  <span>32 minutes ago</span>
                </div>
              </div>
              <div class="notification-item">
                <div class="notification-icon" style="background:rgba(210,153,34,0.15);color:#d29922;"><i class="bi bi-exclamation-triangle"></i></div>
                <div class="notification-content">
                  <p>Low stock alert: <strong>Wireless Earbuds</strong></p>
                  <span>1 hour ago</span>
                </div>
              </div>
              <div class="notification-item">
                <div class="notification-icon" style="background:rgba(13,110,253,0.15);color:#0d6efd;"><i class="bi bi-star"></i></div>
                <div class="notification-content">
                  <p>New 5-star review on <strong>Smart Watch Pro</strong></p>
                  <span>3 hours ago</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Latest Users + Top Products -->
      <div class="row g-3">
        <!-- Latest Users -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h5><i class="bi bi-people me-2"></i>Latest Users</h5>
              <a href="users.html" class="btn btn-sm btn-outline-primary">View All</a>
            </div>
            <div class="card-body p-0">
              <div class="table-wrapper">
                <table class="table">
                  <thead>
                    <tr>
                      <th>User</th>
                      <th>Joined</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-label="User">
                        <div class="table-user">
                          <div class="avatar-placeholder" style="background:#3fb950;">AW</div>
                          <div class="table-user-info">
                            <div class="name">Alice Wong</div>
                            <div class="email">alice.wong@email.com</div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Joined">Aug 3, 2026</td>
                      <td data-label="Status"><span class="badge badge-status-active">Active</span></td>
                    </tr>
                    <tr>
                      <td data-label="User">
                        <div class="table-user">
                          <div class="avatar-placeholder" style="background:#58a6ff;">DP</div>
                          <div class="table-user-info">
                            <div class="name">David Park</div>
                            <div class="email">david.park@email.com</div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Joined">Aug 2, 2026</td>
                      <td data-label="Status"><span class="badge badge-status-active">Active</span></td>
                    </tr>
                    <tr>
                      <td data-label="User">
                        <div class="table-user">
                          <div class="avatar-placeholder" style="background:#d29922;">NB</div>
                          <div class="table-user-info">
                            <div class="name">Nina Brown</div>
                            <div class="email">nina.brown@email.com</div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Joined">Aug 1, 2026</td>
                      <td data-label="Status"><span class="badge badge-status-inactive">Inactive</span></td>
                    </tr>
                    <tr>
                      <td data-label="User">
                        <div class="table-user">
                          <div class="avatar-placeholder" style="background:#f85149;">TC</div>
                          <div class="table-user-info">
                            <div class="name">Tom Chen</div>
                            <div class="email">tom.chen@email.com</div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Joined">Jul 31, 2026</td>
                      <td data-label="Status"><span class="badge badge-status-active">Active</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Top Selling Products -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h5><i class="bi bi-trophy me-2"></i>Top Selling Products</h5>
              <a href="products.html" class="btn btn-sm btn-outline-primary">View All</a>
            </div>
            <div class="card-body">
              <div class="top-product-item">
                <div class="top-product-rank gold">1</div>
                <div class="product-thumb bg-blue"><i class="bi bi-smartwatch"></i></div>
                <div class="top-product-info">
                  <div class="name">Smart Watch Pro</div>
                  <div class="sales">842 sold</div>
                </div>
                <div class="top-product-price">$299.99</div>
              </div>
              <div class="top-product-item">
                <div class="top-product-rank silver">2</div>
                <div class="product-thumb bg-green"><i class="bi bi-headphones"></i></div>
                <div class="top-product-info">
                  <div class="name">Wireless Earbuds X1</div>
                  <div class="sales">756 sold</div>
                </div>
                <div class="top-product-price">$79.99</div>
              </div>
              <div class="top-product-item">
                <div class="top-product-rank bronze">3</div>
                <div class="product-thumb bg-purple"><i class="bi bi-laptop"></i></div>
                <div class="top-product-info">
                  <div class="name">UltraBook Laptop 15"</div>
                  <div class="sales">623 sold</div>
                </div>
                <div class="top-product-price">$1,299.00</div>
              </div>
              <div class="top-product-item">
                <div class="top-product-rank">4</div>
                <div class="product-thumb bg-orange"><i class="bi bi-phone"></i></div>
                <div class="top-product-info">
                  <div class="name">Phone Case Premium</div>
                  <div class="sales">512 sold</div>
                </div>
                <div class="top-product-price">$24.99</div>
              </div>
              <div class="top-product-item">
                <div class="top-product-rank">5</div>
                <div class="product-thumb bg-red"><i class="bi bi-camera"></i></div>
                <div class="top-product-info">
                  <div class="name">Action Camera 4K</div>
                  <div class="sales">489 sold</div>
                </div>
                <div class="top-product-price">$199.99</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.page-content -->
  </div><!-- /.main-content -->





@endsection


