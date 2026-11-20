
<x-navbar/>







  <div class="mobile-nav">
    <a href="index.html">Home</a>
    <a href="products.html">Products</a>
    <a href="contact.html">Contact</a>
    <a href="login.html">Login</a>
    <a href="register.html">Register</a>
    <a href="checkout.html">Cart</a>
  </div>

  <!-- Page Header -->
  <div class="page-header">
    <div class="container-custom">
      <nav class="breadcrumb-custom">
        <a href="index.html">Home</a>
        <span class="separator">/</span>
        <span>Products</span>
      </nav>
      <h1>All Products</h1>
      <p class="section-subtitle" style="margin:0">Discover our complete collection of premium technology products.</p>
    </div>
  </div>

  <!-- Products Layout -->
  <div class="container-custom">
    <div class="filter-overlay"></div>
    <div class="products-layout">
      <!-- Sidebar Filters -->
      <aside class="filters-sidebar">
        <div class="d-flex justify-content-between align-items-center mb-3 d-lg-none">
          <h5 style="margin:0">Filters</h5>
          <button class="btn-icon filter-close"><i class="bi bi-x-lg"></i></button>
        </div>

        <div class="filter-group">
          <h6>Categories</h6>
          <label class="filter-option"><input type="checkbox" name="category" value="smartphones"> Smartphones <span class="filter-count">48</span></label>
          <label class="filter-option"><input type="checkbox" name="category" value="laptops"> Laptops <span class="filter-count">36</span></label>
          <label class="filter-option"><input type="checkbox" name="category" value="headphones"> Headphones <span class="filter-count">52</span></label>
          <label class="filter-option"><input type="checkbox" name="category" value="smart-watches"> Smart Watches <span class="filter-count">28</span></label>
          <label class="filter-option"><input type="checkbox" name="category" value="gaming"> Gaming <span class="filter-count">64</span></label>
          <label class="filter-option"><input type="checkbox" name="category" value="accessories"> Accessories <span class="filter-count">89</span></label>
        </div>

        <div class="filter-group">
          <h6>Price Range</h6>
          <div class="price-range-inputs">
            <input type="number" id="price-min" placeholder="Min" min="0">
            <span style="color:var(--text-muted)">—</span>
            <input type="number" id="price-max" placeholder="Max" min="0">
          </div>
        </div>

        <div class="filter-group">
          <h6>Rating</h6>
          <label class="filter-option"><input type="radio" name="rating" value="4"> 4★ & above</label>
          <label class="filter-option"><input type="radio" name="rating" value="4.5"> 4.5★ & above</label>
          <label class="filter-option"><input type="radio" name="rating" value="0" checked> All Ratings</label>
        </div>

        <div class="filter-group">
          <h6>Availability</h6>
          <label class="filter-option"><input type="checkbox" id="in-stock"> In Stock Only</label>
        </div>

        <div class="filter-group">
          <h6>Brands</h6>
          <label class="filter-option"><input type="checkbox" name="brand" value="Null Tech"> Null Tech</label>
          <label class="filter-option"><input type="checkbox" name="brand" value="Nova"> Nova</label>
          <label class="filter-option"><input type="checkbox" name="brand" value="UltraCore"> UltraCore</label>
          <label class="filter-option"><input type="checkbox" name="brand" value="SoundWave"> SoundWave</label>
          <label class="filter-option"><input type="checkbox" name="brand" value="Chronos"> Chronos</label>
          <label class="filter-option"><input type="checkbox" name="brand" value="GameForce"> GameForce</label>
          <label class="filter-option"><input type="checkbox" name="brand" value="PixelTab"> PixelTab</label>
          <label class="filter-option"><input type="checkbox" name="brand" value="StreamCam"> StreamCam</label>
        </div>
      </aside>

      <!-- Products Main -->
      <div class="products-main">
        <div class="products-toolbar">
          <div class="d-flex align-items-center gap-3 flex-wrap">
            <button class="mobile-filter-toggle"><i class="bi bi-funnel"></i> Filters</button>

            <form  class="search-box d-flex gap-2" method="POST" action="{{route('shop.products')}}">
                @csrf
              <i class="bi bi-search"></i>
              <input type="text" name="search" id="product-search" placeholder="Search products...">
              <button class="btn btn-primary">Search</button>
            </form>
          </div>
          <div class="d-flex align-items-center gap-3">
            <span class="products-count">Showing <strong id="products-count-num">16</strong> products</span>
            <select class="sort-select" id="sort-select">
              <option value="featured">Featured</option>
              <option value="price-low">Price: Low to High</option>
              <option value="price-high">Price: High to Low</option>
              <option value="rating">Rating</option>
              <option value="newest">Newest</option>
            </select>
          </div>
        </div>
        <div class="products-grid" id="products-grid">

@foreach ($products as $product )


    <div class="product-card fade-in-up" data-id="1" data-category="smartphones" data-brand="Nova" data-price="899" data-rating="4.8" data-name="Nova X Pro" data-reviews="124" data-image="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800&h=800&fit=crop&q=80" data-short-description="Flagship smartphone with 6.7&quot; OLED display, 50MP camera, and all-day battery." data-in-stock="true" data-is-new="false" data-category-name="Smartphones">
      <div class="product-card-image">
        <span class="product-badge ">Best Seller</span>
        <a href="product-details.html?id=1">
          <img src="{{asset('storage/' . $product->image[0]->imgName)}}" alt="Nova X Pro" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="1" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="1" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">{{$product->cat->name}}</div>
        <h5><a href="{{route('shop.details' , $product->id)}}">{{$product->name}}</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(124)</span>
        </div>
        <div class="product-price">
          <span class="current">${{$product->price - ($product->price * $product->sale /100 )}}</span>
          <span class="old">${{$product->price}}</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="1" data-name="Nova X Pro"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
@endforeach


        </div>
        <div class="no-products" id="no-products" style="display:none"><i class="bi bi-search d-block"></i><h5>No products found</h5><p>Try adjusting your filters or search terms.</p></div>
      </div>
    </div>
  </div>











<x-footer/>
