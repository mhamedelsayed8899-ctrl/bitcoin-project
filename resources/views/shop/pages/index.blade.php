
<x-navbar/>



 <!-- Mobile Nav -->
  <div class="mobile-nav">
    <a href="index.html">Home</a>
    <a href="products.html">Products</a>
    <a href="contact.html">Contact</a>
    <a href="login.html">Login</a>
    <a href="register.html">Register</a>
    <a href="checkout.html">Cart</a>
  </div>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-bg">
      <div class="hero-glow hero-glow-1"></div>
      <div class="hero-glow hero-glow-2"></div>
      <div class="hero-grid"></div>
    </div>
    <div class="hero-content">
      <div class="hero-text-content">
        <div class="hero-badge"><span class="pulse"></span> THE FUTURE OF SHOPPING</div>
        <h1>Technology.<br><span class="text-gradient">Designed Better.</span></h1>
        <p class="hero-text">Discover premium technology crafted for those who demand excellence. From cutting-edge smartphones to professional-grade accessories.</p>
        <div class="hero-actions">
          <a href="products.html" class="btn-primary-custom">Shop Now <i class="bi bi-arrow-right"></i></a>
          <a href="products.html" class="btn-outline-custom">Explore Products</a>
        </div>
        <div class="hero-stats">
          <div class="hero-stat">
            <h4>500+</h4>
            <p>Premium Products</p>
          </div>
          <div class="hero-stat">
            <h4>25K+</h4>
            <p>Happy Customers</p>
          </div>
          <div class="hero-stat">
            <h4>4.9★</h4>
            <p>Average Rating</p>
          </div>
        </div>
      </div>
      <div class="hero-visual">
        <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800&h=800&fit=crop&q=80" alt="Nova X Pro Smartphone" class="hero-product-img">
        <div class="hero-float-card card-1">
          <div class="icon"><i class="bi bi-shield-check"></i></div>
          <h6>2-Year Warranty</h6>
          <p>On all products</p>
        </div>
        <div class="hero-float-card card-2">
          <div class="icon"><i class="bi bi-truck"></i></div>
          <h6>Free Shipping</h6>
          <p>Orders over $100</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Categories -->
  <section id="categories">
    <div class="container-custom">
      <div class="section-header">
        <h2 class="section-title">Shop by Category</h2>
        <p class="section-subtitle">Explore our curated collection of premium technology across every category.</p>
      </div>
      <div class="categories-grid" id="categories-grid"></div>
    </div>
  </section>

  <!-- Featured Products -->
  <section id="featured" style="background:var(--bg-secondary)">
    <div class="container-custom">
      <div class="section-header">
        <h2 class="section-title">Featured Products</h2>
        <p class="section-subtitle">Handpicked selections from our premium technology catalog.</p>
      </div>
      <div class="products-grid" id="featured-products">


        @foreach ($products as $product )

    <div class="product-card fade-in-up" data-id="1" data-category="smartphones" data-brand="{{$product->name}}" data-price="899" data-rating="4.8" data-name="{{$product->name}}" data-reviews="124" data-image="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800&h=800&fit=crop&q=80" data-short-description="Flagship smartphone with 6.7&quot; OLED display, 50MP camera, and all-day battery." data-in-stock="true" data-is-new="false" data-category-name="Smartphones">
      <div class="product-card-image">
        <span class="product-badge ">Best Seller</span>
        <a href="{{route('shop.details' , $product->id)}}">
          <img src="{{ asset('storage/' . $product->image[0]->imgName)}}" alt="Nova X Pro" loading="lazy">
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
          <span class="current">{{$product->price - ($product->price * $product->sale / 100)}}</span>
          <span class="old">{{$product->price}}</span>
        </div>
        <div class="product-card-footer">
            @if (Auth::guard('web')->check())
          <button id_attr = "{{$product->id}}" class="btn-add-cart add_cart" data-id="1" data-name="{{$product->name}}"><i class="bi bi-cart-plus"></i> Add to Cart</button>


            @else
          <a href="{{route('user.login.form')}}" class="btn-add-cart add_cart" data-id="1" data-name="{{$product->name}}"><i class="bi bi-cart-plus"></i> Add to Cart</a>


            @endif
        </div>
      </div>
    </div>

        @endforeach




      </div>
      {{$products->links()}}
      <div class="text-center mt-4">
        <a href="products.html" class="btn-outline-custom">View All Products <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- Promotional Banner -->
  <section>
    <div class="container-custom">
      <div class="promo-banner fade-in-up">
        <div class="promo-content">
          <h2>Upgrade Your Setup</h2>
          <p>Save up to 40% on selected technology. Limited time offers on laptops, monitors, and gaming gear.</p>
          <a href="products.html" class="btn-primary-custom">Explore Deals <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="promo-visual">
          <img src="https://images.unsplash.com/photo-1593305841991-05c297ba4575?w=640&h=480&fit=crop&q=80" alt="Gaming Setup">
          <div class="promo-discount">
            <span>40%</span>
            <span>OFF</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Best Sellers -->
  <section id="best-sellers">
    <div class="container-custom">
      <div class="section-header">
        <h2 class="section-title">Best Sellers</h2>
        <p class="section-subtitle">Our most popular products loved by thousands of customers.</p>
      </div>
      <div class="products-grid" id="best-sellers">
    <div class="product-card fade-in-up" data-id="1" data-category="smartphones" data-brand="Nova" data-price="899" data-rating="4.8" data-name="Nova X Pro" data-reviews="124" data-image="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800&h=800&fit=crop&q=80" data-short-description="Flagship smartphone with 6.7&quot; OLED display, 50MP camera, and all-day battery." data-in-stock="true" data-is-new="false" data-category-name="Smartphones">
      <div class="product-card-image">
        <span class="product-badge ">Best Seller</span>
        <a href="product-details.html?id=1">
          <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800&h=800&fit=crop&q=80" alt="Nova X Pro" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="1" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="1" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Smartphones</div>
        <h5><a href="product-details.html?id=1">Nova X Pro</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(124)</span>
        </div>
        <div class="product-price">
          <span class="current">$899</span>
          <span class="old">$999</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="1" data-name="Nova X Pro"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="2" data-category="laptops" data-brand="UltraCore" data-price="1499" data-rating="4.9" data-name="UltraBook Pro 16" data-reviews="89" data-image="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=800&h=800&fit=crop&q=80" data-short-description="Professional laptop with 16&quot; display, M3 Ultra chip, and 18-hour battery." data-in-stock="true" data-is-new="false" data-category-name="Laptops">
      <div class="product-card-image">
        <span class="product-badge discount">Editor's Choice</span>
        <a href="product-details.html?id=2">
          <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=800&h=800&fit=crop&q=80" alt="UltraBook Pro 16" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="2" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="2" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Laptops</div>
        <h5><a href="product-details.html?id=2">UltraBook Pro 16</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(89)</span>
        </div>
        <div class="product-price">
          <span class="current">$1,499</span>
          <span class="old">$1,799</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="2" data-name="UltraBook Pro 16"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="3" data-category="headphones" data-brand="SoundWave" data-price="349" data-rating="4.7" data-name="SoundWave Elite" data-reviews="256" data-image="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=800&h=800&fit=crop&q=80" data-short-description="Premium wireless headphones with ANC and 40-hour battery life." data-in-stock="true" data-is-new="false" data-category-name="Headphones">
      <div class="product-card-image">
        <span class="product-badge discount">-22%</span>
        <a href="product-details.html?id=3">
          <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=800&h=800&fit=crop&q=80" alt="SoundWave Elite" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="3" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="3" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Headphones</div>
        <h5><a href="product-details.html?id=3">SoundWave Elite</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(256)</span>
        </div>
        <div class="product-price">
          <span class="current">$349</span>
          <span class="old">$449</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="3" data-name="SoundWave Elite"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="5" data-category="gaming" data-brand="GameForce" data-price="189" data-rating="4.8" data-name="MechKey RGB Pro" data-reviews="312" data-image="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=800&h=800&fit=crop&q=80" data-short-description="Mechanical gaming keyboard with RGB lighting and hot-swappable switches." data-in-stock="true" data-is-new="false" data-category-name="Gaming">
      <div class="product-card-image">
        <span class="product-badge discount">Hot</span>
        <a href="product-details.html?id=5">
          <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=800&h=800&fit=crop&q=80" alt="MechKey RGB Pro" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="5" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="5" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Gaming</div>
        <h5><a href="product-details.html?id=5">MechKey RGB Pro</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(312)</span>
        </div>
        <div class="product-price">
          <span class="current">$189</span>
          <span class="old">$229</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="5" data-name="MechKey RGB Pro"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Null Shop -->
  <section style="background:var(--bg-secondary)">
    <div class="container-custom">
      <div class="section-header">
        <h2 class="section-title">Why Choose Null Shop?</h2>
        <p class="section-subtitle">We're committed to delivering an exceptional shopping experience.</p>
      </div>
      <div class="features-grid">
        <div class="feature-card fade-in-up">
          <div class="feature-icon"><i class="bi bi-truck"></i></div>
          <h5>Fast Delivery</h5>
          <p>Free express shipping on orders over $100. Most items delivered within 2-3 business days.</p>
        </div>
        <div class="feature-card fade-in-up">
          <div class="feature-icon"><i class="bi bi-shield-lock"></i></div>
          <h5>Secure Payment</h5>
          <p>256-bit SSL encryption and multiple payment options for your peace of mind.</p>
        </div>
        <div class="feature-card fade-in-up">
          <div class="feature-icon"><i class="bi bi-gem"></i></div>
          <h5>Premium Products</h5>
          <p>Every product is carefully selected and verified for quality and authenticity.</p>
        </div>
        <div class="feature-card fade-in-up">
          <div class="feature-icon"><i class="bi bi-headset"></i></div>
          <h5>24/7 Support</h5>
          <p>Our dedicated support team is available around the clock to assist you.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Statistics -->
  <section class="stats-section">
    <div class="container-custom">
      <div class="stats-grid" id="stats-grid"></div>
    </div>
  </section>

  <!-- Customer Reviews -->
  <section id="reviews">
    <div class="container-custom">
      <div class="section-header">
        <h2 class="section-title">What Our Customers Say</h2>
        <p class="section-subtitle">Real reviews from real customers who love Null Shop.</p>
      </div>
      <div class="reviews-grid" id="reviews-grid"></div>
    </div>
  </section>

  <!-- Newsletter -->
  <section>
    <div class="container-custom">
      <div class="newsletter-section fade-in-up">
        <h2>Stay in the Loop</h2>
        <p>Subscribe to our newsletter for exclusive deals, new arrivals, and tech insights.</p>
        <form class="newsletter-form" id="newsletter-form">
          <input type="email" id="newsletter-email" placeholder="Enter your email address" required>
          <button type="submit" class="btn-primary-custom">Subscribe</button>
        </form>
      </div>
    </div>
  </section>



<x-footer/>
