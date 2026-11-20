<x-navbar/>




  <div class="mobile-nav">
    <a href="index.html">Home</a>
    <a href="products.html">Products</a>
    <a href="contact.html">Contact</a>
    <a href="login.html">Login</a>
    <a href="register.html">Register</a>
    <a href="checkout.html">Cart</a>
  </div>

  <!-- Product Details -->
  <section class="product-details-section">
    <div class="container-custom">
      <nav class="breadcrumb-custom">
        <a href="index.html">Home</a>
        <span class="separator">/</span>
        <a href="products.html">Products</a>
        <span class="separator">/</span>
        <span id="breadcrumb-product">Product</span>
      </nav>

      <div id="product-details-container">
<div class="product-detail-page" data-product-id="1" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="{{asset('storage/'. $products->image[0]->imgName)}}" alt="Nova X Pro" class="main-product-image">
        </div>


        <div class="product-gallery-thumbs">

            @foreach ($products->image as $image  )

            <img src="{{asset('storage/'. $image['imgName'])}}" alt="Nova X Pro" class="active" data-full="{{asset('storage/'. $image['imgName'])}}">
            @endforeach


        </div>
      </div>

      <div class="product-info">
        <div class="product-category">{{$products->cat->name}}</div>
        <h1>{{$products->name}}</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>4.8 (124 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">${{$products->price - ($products->price * $products->sale / 100)}}</span>
          <span class="old">${{$products->price}}</span>
          <span class="save-badge">Save 10%</span>
        </div>
        <p class="product-short-desc">Flagship smartphone with 6.7" OLED display, 50MP camera, and all-day battery.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Midnight Black</button><button class="option-btn " data-option="color">Arctic Silver</button><button class="option-btn " data-option="color">Ocean Blue</button></div></div>
        <div class="option-group"><label>Storage</label><div class="option-buttons"><button class="option-btn active" data-option="storage">128GB</button><button class="option-btn " data-option="storage">256GB</button><button class="option-btn " data-option="storage">512GB</button></div></div>
        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="1" data-name="Nova X Pro"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="1"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-1">Description</button>
        <button class="tab-btn" data-tab="specifications-1">Specifications</button>
        <button class="tab-btn" data-tab="reviews-1">Reviews (124)</button>
      </div>
      <div class="tab-panel active" id="tab-description-1">
        <p style="color:var(--text-secondary);line-height:1.8">Experience flagship performance with the Nova X Pro. Featuring a stunning 6.7" OLED display, triple-camera system with 50MP main sensor, and all-day battery life powered by the latest Nova A4 chip.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-1">
        <table class="specs-table"><tr><td>Display</td><td>6.7" OLED, 120Hz</td></tr><tr><td>Processor</td><td>Nova A4 Chip</td></tr><tr><td>RAM</td><td>12GB</td></tr><tr><td>Storage</td><td>256GB</td></tr><tr><td>Camera</td><td>50MP + 12MP + 12MP</td></tr><tr><td>Battery</td><td>4500mAh</td></tr><tr><td>OS</td><td>NovaOS 5.0</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-1"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
    <div class="product-card fade-in-up" data-id="12" data-category="smartphones" data-brand="Nova" data-price="1599" data-rating="4.6" data-name="Fold X Elite" data-reviews="54" data-image="https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=800&h=800&fit=crop&q=80" data-short-description="Foldable smartphone with 7.6&quot; inner display and multitasking features." data-in-stock="true" data-is-new="true" data-category-name="Smartphones">
      <div class="product-card-image">
        <span class="product-badge ">New</span>
        <a href="product-details.html?id=12">
          <img src="https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=800&h=800&fit=crop&q=80" alt="Fold X Elite" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="12" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="12" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Smartphones</div>
        <h5><a href="product-details.html?id=12">Fold X Elite</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(54)</span>
        </div>
        <div class="product-price">
          <span class="current">$1,599</span>
          <span class="old">$1,799</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="12" data-name="Fold X Elite"><i class="bi bi-cart-plus"></i> Add to Cart</button>
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
    <div class="product-card fade-in-up" data-id="4" data-category="smart-watches" data-brand="Chronos" data-price="429" data-rating="4.6" data-name="Chronos Ultra" data-reviews="178" data-image="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" data-short-description="Advanced smartwatch with health monitoring, GPS, and AMOLED display." data-in-stock="true" data-is-new="true" data-category-name="Smart Watches">
      <div class="product-card-image">
        <span class="product-badge ">New</span>
        <a href="product-details.html?id=4">
          <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" alt="Chronos Ultra" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="4" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="4" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Smart Watches</div>
        <h5><a href="product-details.html?id=4">Chronos Ultra</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(178)</span>
        </div>
        <div class="product-price">
          <span class="current">$429</span>
          <span class="old">$499</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="4" data-name="Chronos Ultra"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="2" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=800&h=800&fit=crop&q=80" alt="UltraBook Pro 16" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=800&h=800&fit=crop&q=80" alt="UltraBook Pro 16" class="active" data-full="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=800&h=800&fit=crop&q=80"><img src="https://images.unsplash.com/photo-1525547719325-a1d2a4e22866?w=800&h=800&fit=crop&q=80" alt="UltraBook Pro 16" class="" data-full="https://images.unsplash.com/photo-1525547719325-a1d2a4e22866?w=800&h=800&fit=crop&q=80"><img src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800&h=800&fit=crop&q=80" alt="UltraBook Pro 16" class="" data-full="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Laptops</div>
        <h1>UltraBook Pro 16</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>4.9 (89 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$1,499</span>
          <span class="old">$1,799</span>
          <span class="save-badge">Save 17%</span>
        </div>
        <p class="product-short-desc">Professional laptop with 16" display, M3 Ultra chip, and 18-hour battery.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Space Gray</button><button class="option-btn " data-option="color">Silver</button></div></div>
        <div class="option-group"><label>Storage</label><div class="option-buttons"><button class="option-btn active" data-option="storage">512GB SSD</button><button class="option-btn " data-option="storage">1TB SSD</button><button class="option-btn " data-option="storage">2TB SSD</button></div></div>
        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="2" data-name="UltraBook Pro 16"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="2"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-2">Description</button>
        <button class="tab-btn" data-tab="specifications-2">Specifications</button>
        <button class="tab-btn" data-tab="reviews-2">Reviews (89)</button>
      </div>
      <div class="tab-panel active" id="tab-description-2">
        <p style="color:var(--text-secondary);line-height:1.8">The UltraBook Pro 16 delivers professional-grade performance in a sleek aluminum chassis. With a stunning 16" Retina display, M3 Ultra processor, and 18-hour battery life.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-2">
        <table class="specs-table"><tr><td>Display</td><td>16" Retina, 3456×2234</td></tr><tr><td>Processor</td><td>M3 Ultra</td></tr><tr><td>RAM</td><td>16GB Unified</td></tr><tr><td>Storage</td><td>512GB SSD</td></tr><tr><td>Graphics</td><td>Integrated 10-core GPU</td></tr><tr><td>Battery</td><td>18 hours</td></tr><tr><td>Weight</td><td>2.1 kg</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-2"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
    <div class="product-card fade-in-up" data-id="7" data-category="laptops" data-brand="PixelTab" data-price="799" data-rating="4.5" data-name="PixelTab Pro 12" data-reviews="143" data-image="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=800&h=800&fit=crop&q=80" data-short-description="2-in-1 tablet with 12.4&quot; OLED display and stylus support." data-in-stock="true" data-is-new="false" data-category-name="Laptops">
      <div class="product-card-image">
        <span class="product-badge discount">-11%</span>
        <a href="product-details.html?id=7">
          <img src="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=800&h=800&fit=crop&q=80" alt="PixelTab Pro 12" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="7" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="7" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Laptops</div>
        <h5><a href="product-details.html?id=7">PixelTab Pro 12</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(143)</span>
        </div>
        <div class="product-price">
          <span class="current">$799</span>
          <span class="old">$899</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="7" data-name="PixelTab Pro 12"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
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
    <div class="product-card fade-in-up" data-id="4" data-category="smart-watches" data-brand="Chronos" data-price="429" data-rating="4.6" data-name="Chronos Ultra" data-reviews="178" data-image="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" data-short-description="Advanced smartwatch with health monitoring, GPS, and AMOLED display." data-in-stock="true" data-is-new="true" data-category-name="Smart Watches">
      <div class="product-card-image">
        <span class="product-badge ">New</span>
        <a href="product-details.html?id=4">
          <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" alt="Chronos Ultra" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="4" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="4" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Smart Watches</div>
        <h5><a href="product-details.html?id=4">Chronos Ultra</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(178)</span>
        </div>
        <div class="product-price">
          <span class="current">$429</span>
          <span class="old">$499</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="4" data-name="Chronos Ultra"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="3" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=800&h=800&fit=crop&q=80" alt="SoundWave Elite" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=800&h=800&fit=crop&q=80" alt="SoundWave Elite" class="active" data-full="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=800&h=800&fit=crop&q=80"><img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=800&h=800&fit=crop&q=80" alt="SoundWave Elite" class="" data-full="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=800&h=800&fit=crop&q=80"><img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=800&h=800&fit=crop&q=80" alt="SoundWave Elite" class="" data-full="https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Headphones</div>
        <h1>SoundWave Elite</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>4.7 (256 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$349</span>
          <span class="old">$449</span>
          <span class="save-badge">Save 22%</span>
        </div>
        <p class="product-short-desc">Premium wireless headphones with ANC and 40-hour battery life.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Matte Black</button><button class="option-btn " data-option="color">Pearl White</button><button class="option-btn " data-option="color">Navy Blue</button></div></div>

        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="3" data-name="SoundWave Elite"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="3"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-3">Description</button>
        <button class="tab-btn" data-tab="specifications-3">Specifications</button>
        <button class="tab-btn" data-tab="reviews-3">Reviews (256)</button>
      </div>
      <div class="tab-panel active" id="tab-description-3">
        <p style="color:var(--text-secondary);line-height:1.8">Immerse yourself in premium sound with active noise cancellation, 40-hour battery life, and studio-quality drivers. Crafted with memory foam ear cushions for all-day comfort.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-3">
        <table class="specs-table"><tr><td>Driver Size</td><td>40mm Dynamic</td></tr><tr><td>Frequency</td><td>20Hz - 40kHz</td></tr><tr><td>Battery</td><td>40 hours (ANC off)</td></tr><tr><td>Connectivity</td><td>Bluetooth 5.3</td></tr><tr><td>Weight</td><td>250g</td></tr><tr><td>ANC</td><td>Hybrid Active</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-3"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
    <div class="product-card fade-in-up" data-id="15" data-category="headphones" data-brand="SoundWave" data-price="249" data-rating="4.7" data-name="AirBuds Pro 3" data-reviews="389" data-image="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=800&h=800&fit=crop&q=80" data-short-description="True wireless earbuds with adaptive ANC and spatial audio." data-in-stock="true" data-is-new="false" data-category-name="Headphones">
      <div class="product-card-image">
        <span class="product-badge discount">Popular</span>
        <a href="product-details.html?id=15">
          <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=800&h=800&fit=crop&q=80" alt="AirBuds Pro 3" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="15" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="15" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Headphones</div>
        <h5><a href="product-details.html?id=15">AirBuds Pro 3</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(389)</span>
        </div>
        <div class="product-price">
          <span class="current">$249</span>
          <span class="old">$279</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="15" data-name="AirBuds Pro 3"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
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
    <div class="product-card fade-in-up" data-id="4" data-category="smart-watches" data-brand="Chronos" data-price="429" data-rating="4.6" data-name="Chronos Ultra" data-reviews="178" data-image="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" data-short-description="Advanced smartwatch with health monitoring, GPS, and AMOLED display." data-in-stock="true" data-is-new="true" data-category-name="Smart Watches">
      <div class="product-card-image">
        <span class="product-badge ">New</span>
        <a href="product-details.html?id=4">
          <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" alt="Chronos Ultra" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="4" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="4" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Smart Watches</div>
        <h5><a href="product-details.html?id=4">Chronos Ultra</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(178)</span>
        </div>
        <div class="product-price">
          <span class="current">$429</span>
          <span class="old">$499</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="4" data-name="Chronos Ultra"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="4" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" alt="Chronos Ultra" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" alt="Chronos Ultra" class="active" data-full="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80"><img src="https://images.unsplash.com/photo-1579586337278-3befd40fd17a?w=800&h=800&fit=crop&q=80" alt="Chronos Ultra" class="" data-full="https://images.unsplash.com/photo-1579586337278-3befd40fd17a?w=800&h=800&fit=crop&q=80"><img src="https://images.unsplash.com/photo-1434493789847-2f02dc6ca35d?w=800&h=800&fit=crop&q=80" alt="Chronos Ultra" class="" data-full="https://images.unsplash.com/photo-1434493789847-2f02dc6ca35d?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Smart Watches</div>
        <h1>Chronos Ultra</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>4.6 (178 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$429</span>
          <span class="old">$499</span>
          <span class="save-badge">Save 14%</span>
        </div>
        <p class="product-short-desc">Advanced smartwatch with health monitoring, GPS, and AMOLED display.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Graphite</button><button class="option-btn " data-option="color">Gold</button><button class="option-btn " data-option="color">Silver</button></div></div>
        <div class="option-group"><label>Storage</label><div class="option-buttons"><button class="option-btn active" data-option="storage">32GB</button><button class="option-btn " data-option="storage">64GB</button></div></div>
        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="4" data-name="Chronos Ultra"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="4"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-4">Description</button>
        <button class="tab-btn" data-tab="specifications-4">Specifications</button>
        <button class="tab-btn" data-tab="reviews-4">Reviews (178)</button>
      </div>
      <div class="tab-panel active" id="tab-description-4">
        <p style="color:var(--text-secondary);line-height:1.8">Track your fitness, stay connected, and express your style with the Chronos Ultra. Features advanced health monitoring, GPS, and a stunning always-on AMOLED display.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-4">
        <table class="specs-table"><tr><td>Display</td><td>1.9" AMOLED Always-On</td></tr><tr><td>Battery</td><td>7 days typical use</td></tr><tr><td>Water Resistance</td><td>5ATM</td></tr><tr><td>Sensors</td><td>Heart Rate, SpO2, ECG</td></tr><tr><td>Connectivity</td><td>Bluetooth 5.2, WiFi</td></tr><tr><td>Compatibility</td><td>iOS & Android</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-4"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
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
  </div>
<div class="product-detail-page" data-product-id="5" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=800&h=800&fit=crop&q=80" alt="MechKey RGB Pro" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=800&h=800&fit=crop&q=80" alt="MechKey RGB Pro" class="active" data-full="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=800&h=800&fit=crop&q=80"><img src="https://images.unsplash.com/photo-1618384887920-8472a1934ecb?w=800&h=800&fit=crop&q=80" alt="MechKey RGB Pro" class="" data-full="https://images.unsplash.com/photo-1618384887920-8472a1934ecb?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Gaming</div>
        <h1>MechKey RGB Pro</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>4.8 (312 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$189</span>
          <span class="old">$229</span>
          <span class="save-badge">Save 17%</span>
        </div>
        <p class="product-short-desc">Mechanical gaming keyboard with RGB lighting and hot-swappable switches.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Black</button></div></div>

        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="5" data-name="MechKey RGB Pro"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="5"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-5">Description</button>
        <button class="tab-btn" data-tab="specifications-5">Specifications</button>
        <button class="tab-btn" data-tab="reviews-5">Reviews (312)</button>
      </div>
      <div class="tab-panel active" id="tab-description-5">
        <p style="color:var(--text-secondary);line-height:1.8">Dominate your games with tactile mechanical switches, per-key RGB lighting, and aircraft-grade aluminum frame. Hot-swappable switches for ultimate customization.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-5">
        <table class="specs-table"><tr><td>Switch Type</td><td>Mechanical (Red)</td></tr><tr><td>Layout</td><td>Full-size 104 keys</td></tr><tr><td>Lighting</td><td>Per-key RGB</td></tr><tr><td>Connection</td><td>USB-C Wired</td></tr><tr><td>Polling Rate</td><td>1000Hz</td></tr><tr><td>Material</td><td>Aluminum Frame</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-5"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
    <div class="product-card fade-in-up" data-id="6" data-category="gaming" data-brand="GameForce" data-price="2199" data-rating="4.9" data-name="GameForce RTX Station" data-reviews="67" data-image="https://images.unsplash.com/photo-1593305841991-05c297ba4575?w=800&h=800&fit=crop&q=80" data-short-description="High-end gaming PC with RTX 4080 and Intel i9 processor." data-in-stock="true" data-is-new="true" data-category-name="Gaming">
      <div class="product-card-image">
        <span class="product-badge discount">Premium</span>
        <a href="product-details.html?id=6">
          <img src="https://images.unsplash.com/photo-1593305841991-05c297ba4575?w=800&h=800&fit=crop&q=80" alt="GameForce RTX Station" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="6" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="6" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Gaming</div>
        <h5><a href="product-details.html?id=6">GameForce RTX Station</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(67)</span>
        </div>
        <div class="product-price">
          <span class="current">$2,199</span>
          <span class="old">$2,499</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="6" data-name="GameForce RTX Station"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="11" data-category="gaming" data-brand="GameForce" data-price="129" data-rating="4.8" data-name="HyperGlide Pro Mouse" data-reviews="267" data-image="https://images.unsplash.com/photo-1527864550417-7fd91d23706c?w=800&h=800&fit=crop&q=80" data-short-description="Ultra-light wireless gaming mouse with 26K DPI and 70-hour battery." data-in-stock="true" data-is-new="false" data-category-name="Gaming">
      <div class="product-card-image">
        <span class="product-badge ">Best Seller</span>
        <a href="product-details.html?id=11">
          <img src="https://images.unsplash.com/photo-1527864550417-7fd91d23706c?w=800&h=800&fit=crop&q=80" alt="HyperGlide Pro Mouse" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="11" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="11" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Gaming</div>
        <h5><a href="product-details.html?id=11">HyperGlide Pro Mouse</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(267)</span>
        </div>
        <div class="product-price">
          <span class="current">$129</span>
          <span class="old">$159</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="11" data-name="HyperGlide Pro Mouse"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
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
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="6" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1593305841991-05c297ba4575?w=800&h=800&fit=crop&q=80" alt="GameForce RTX Station" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1593305841991-05c297ba4575?w=800&h=800&fit=crop&q=80" alt="GameForce RTX Station" class="active" data-full="https://images.unsplash.com/photo-1593305841991-05c297ba4575?w=800&h=800&fit=crop&q=80"><img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?w=800&h=800&fit=crop&q=80" alt="GameForce RTX Station" class="" data-full="https://images.unsplash.com/photo-1542751371-adc38448a05e?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Gaming</div>
        <h1>GameForce RTX Station</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>4.9 (67 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$2,199</span>
          <span class="old">$2,499</span>
          <span class="save-badge">Save 12%</span>
        </div>
        <p class="product-short-desc">High-end gaming PC with RTX 4080 and Intel i9 processor.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Black RGB</button></div></div>
        <div class="option-group"><label>Storage</label><div class="option-buttons"><button class="option-btn active" data-option="storage">1TB NVMe</button><button class="option-btn " data-option="storage">2TB NVMe</button></div></div>
        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="6" data-name="GameForce RTX Station"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="6"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-6">Description</button>
        <button class="tab-btn" data-tab="specifications-6">Specifications</button>
        <button class="tab-btn" data-tab="reviews-6">Reviews (67)</button>
      </div>
      <div class="tab-panel active" id="tab-description-6">
        <p style="color:var(--text-secondary);line-height:1.8">Ultimate gaming powerhouse with RTX 4080, Intel i9 processor, 32GB DDR5 RAM, and liquid cooling. Ready for 4K gaming at maximum settings.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-6">
        <table class="specs-table"><tr><td>GPU</td><td>NVIDIA RTX 4080 16GB</td></tr><tr><td>CPU</td><td>Intel Core i9-14900K</td></tr><tr><td>RAM</td><td>32GB DDR5 6000MHz</td></tr><tr><td>Storage</td><td>1TB NVMe SSD</td></tr><tr><td>Cooling</td><td>360mm AIO Liquid</td></tr><tr><td>PSU</td><td>850W 80+ Gold</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-6"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
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
    <div class="product-card fade-in-up" data-id="11" data-category="gaming" data-brand="GameForce" data-price="129" data-rating="4.8" data-name="HyperGlide Pro Mouse" data-reviews="267" data-image="https://images.unsplash.com/photo-1527864550417-7fd91d23706c?w=800&h=800&fit=crop&q=80" data-short-description="Ultra-light wireless gaming mouse with 26K DPI and 70-hour battery." data-in-stock="true" data-is-new="false" data-category-name="Gaming">
      <div class="product-card-image">
        <span class="product-badge ">Best Seller</span>
        <a href="product-details.html?id=11">
          <img src="https://images.unsplash.com/photo-1527864550417-7fd91d23706c?w=800&h=800&fit=crop&q=80" alt="HyperGlide Pro Mouse" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="11" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="11" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Gaming</div>
        <h5><a href="product-details.html?id=11">HyperGlide Pro Mouse</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(267)</span>
        </div>
        <div class="product-price">
          <span class="current">$129</span>
          <span class="old">$159</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="11" data-name="HyperGlide Pro Mouse"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
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
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="7" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=800&h=800&fit=crop&q=80" alt="PixelTab Pro 12" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=800&h=800&fit=crop&q=80" alt="PixelTab Pro 12" class="active" data-full="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=800&h=800&fit=crop&q=80"><img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?w=800&h=800&fit=crop&q=80" alt="PixelTab Pro 12" class="" data-full="https://images.unsplash.com/photo-1561154464-82e9adf32764?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Laptops</div>
        <h1>PixelTab Pro 12</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>4.5 (143 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$799</span>
          <span class="old">$899</span>
          <span class="save-badge">Save 11%</span>
        </div>
        <p class="product-short-desc">2-in-1 tablet with 12.4" OLED display and stylus support.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Slate</button><button class="option-btn " data-option="color">Champagne</button></div></div>
        <div class="option-group"><label>Storage</label><div class="option-buttons"><button class="option-btn active" data-option="storage">256GB</button><button class="option-btn " data-option="storage">512GB</button></div></div>
        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="7" data-name="PixelTab Pro 12"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="7"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-7">Description</button>
        <button class="tab-btn" data-tab="specifications-7">Specifications</button>
        <button class="tab-btn" data-tab="reviews-7">Reviews (143)</button>
      </div>
      <div class="tab-panel active" id="tab-description-7">
        <p style="color:var(--text-secondary);line-height:1.8">Versatile 2-in-1 tablet with detachable keyboard, stylus support, and stunning 12.4" OLED display. Perfect for creative professionals and students.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-7">
        <table class="specs-table"><tr><td>Display</td><td>12.4" OLED, 120Hz</td></tr><tr><td>Processor</td><td>Snapdragon 8 Gen 2</td></tr><tr><td>RAM</td><td>8GB</td></tr><tr><td>Storage</td><td>256GB</td></tr><tr><td>Stylus</td><td>Included</td></tr><tr><td>Battery</td><td>14 hours</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-7"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
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
    <div class="product-card fade-in-up" data-id="4" data-category="smart-watches" data-brand="Chronos" data-price="429" data-rating="4.6" data-name="Chronos Ultra" data-reviews="178" data-image="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" data-short-description="Advanced smartwatch with health monitoring, GPS, and AMOLED display." data-in-stock="true" data-is-new="true" data-category-name="Smart Watches">
      <div class="product-card-image">
        <span class="product-badge ">New</span>
        <a href="product-details.html?id=4">
          <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" alt="Chronos Ultra" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="4" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="4" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Smart Watches</div>
        <h5><a href="product-details.html?id=4">Chronos Ultra</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(178)</span>
        </div>
        <div class="product-price">
          <span class="current">$429</span>
          <span class="old">$499</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="4" data-name="Chronos Ultra"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="8" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1587826080695-36b9d5a2e2c6?w=800&h=800&fit=crop&q=80" alt="StreamCam 4K Pro" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1587826080695-36b9d5a2e2c6?w=800&h=800&fit=crop&q=80" alt="StreamCam 4K Pro" class="active" data-full="https://images.unsplash.com/photo-1587826080695-36b9d5a2e2c6?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Accessories</div>
        <h1>StreamCam 4K Pro</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <span>4.4 (98 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$199</span>
          <span class="old">$249</span>
          <span class="save-badge">Save 20%</span>
        </div>
        <p class="product-short-desc">4K webcam with auto-focus, HDR, and dual microphones.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Black</button></div></div>

        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="8" data-name="StreamCam 4K Pro"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="8"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-8">Description</button>
        <button class="tab-btn" data-tab="specifications-8">Specifications</button>
        <button class="tab-btn" data-tab="reviews-8">Reviews (98)</button>
      </div>
      <div class="tab-panel active" id="tab-description-8">
        <p style="color:var(--text-secondary);line-height:1.8">Professional 4K webcam with auto-focus, HDR, and dual noise-canceling microphones. Perfect for streaming, video calls, and content creation.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-8">
        <table class="specs-table"><tr><td>Resolution</td><td>4K @ 30fps, 1080p @ 60fps</td></tr><tr><td>Field of View</td><td>90°</td></tr><tr><td>Focus</td><td>Auto with HDR</td></tr><tr><td>Microphones</td><td>Dual noise-canceling</td></tr><tr><td>Connection</td><td>USB-C</td></tr><tr><td>Mount</td><td>Universal clip & tripod</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-8"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
    <div class="product-card fade-in-up" data-id="9" data-category="accessories" data-brand="Null Tech" data-price="699" data-rating="4.7" data-name="Vision Pro Display 32" data-reviews="76" data-image="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&h=800&fit=crop&q=80" data-short-description="32&quot; 4K monitor with 144Hz, HDR600, and 99% sRGB accuracy." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-18%</span>
        <a href="product-details.html?id=9">
          <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&h=800&fit=crop&q=80" alt="Vision Pro Display 32" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="9" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="9" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=9">Vision Pro Display 32</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(76)</span>
        </div>
        <div class="product-price">
          <span class="current">$699</span>
          <span class="old">$849</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="9" data-name="Vision Pro Display 32"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="10" data-category="accessories" data-brand="Null Tech" data-price="59" data-rating="4.3" data-name="PowerVault 20000" data-reviews="421" data-image="https://images.unsplash.com/photo-1609091839311-6203d14d0a0a?w=800&h=800&fit=crop&q=80" data-short-description="20000mAh power bank with 65W USB-C PD fast charging." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-25%</span>
        <a href="product-details.html?id=10">
          <img src="https://images.unsplash.com/photo-1609091839311-6203d14d0a0a?w=800&h=800&fit=crop&q=80" alt="PowerVault 20000" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="10" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="10" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=10">PowerVault 20000</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <span>(421)</span>
        </div>
        <div class="product-price">
          <span class="current">$59</span>
          <span class="old">$79</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="10" data-name="PowerVault 20000"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="13" data-category="accessories" data-brand="Null Tech" data-price="79" data-rating="4.5" data-name="USB-C Hub Ultra" data-reviews="189" data-image="https://images.unsplash.com/photo-1625842268584-8f3296236761?w=800&h=800&fit=crop&q=80" data-short-description="12-in-1 USB-C hub with dual 4K HDMI and 100W pass-through charging." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-20%</span>
        <a href="product-details.html?id=13">
          <img src="https://images.unsplash.com/photo-1625842268584-8f3296236761?w=800&h=800&fit=crop&q=80" alt="USB-C Hub Ultra" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="13" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="13" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=13">USB-C Hub Ultra</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(189)</span>
        </div>
        <div class="product-price">
          <span class="current">$79</span>
          <span class="old">$99</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="13" data-name="USB-C Hub Ultra"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="14" data-category="accessories" data-brand="SoundWave" data-price="249" data-rating="4.6" data-name="Aura Speaker Max" data-reviews="134" data-image="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=800&h=800&fit=crop&q=80" data-short-description="Premium smart speaker with 360° sound and voice assistant." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-17%</span>
        <a href="product-details.html?id=14">
          <img src="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=800&h=800&fit=crop&q=80" alt="Aura Speaker Max" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="14" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="14" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=14">Aura Speaker Max</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(134)</span>
        </div>
        <div class="product-price">
          <span class="current">$249</span>
          <span class="old">$299</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="14" data-name="Aura Speaker Max"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="9" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&h=800&fit=crop&q=80" alt="Vision Pro Display 32" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&h=800&fit=crop&q=80" alt="Vision Pro Display 32" class="active" data-full="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&h=800&fit=crop&q=80"><img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?w=800&h=800&fit=crop&q=80" alt="Vision Pro Display 32" class="" data-full="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Accessories</div>
        <h1>Vision Pro Display 32</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>4.7 (76 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$699</span>
          <span class="old">$849</span>
          <span class="save-badge">Save 18%</span>
        </div>
        <p class="product-short-desc">32" 4K monitor with 144Hz, HDR600, and 99% sRGB accuracy.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Black</button></div></div>

        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="9" data-name="Vision Pro Display 32"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="9"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-9">Description</button>
        <button class="tab-btn" data-tab="specifications-9">Specifications</button>
        <button class="tab-btn" data-tab="reviews-9">Reviews (76)</button>
      </div>
      <div class="tab-panel active" id="tab-description-9">
        <p style="color:var(--text-secondary);line-height:1.8">32" 4K UHD monitor with 144Hz refresh rate, HDR600, and 99% sRGB color accuracy. Ideal for creative work and immersive gaming.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-9">
        <table class="specs-table"><tr><td>Size</td><td>32 inches</td></tr><tr><td>Resolution</td><td>3840×2160 4K</td></tr><tr><td>Refresh Rate</td><td>144Hz</td></tr><tr><td>Panel</td><td>IPS</td></tr><tr><td>HDR</td><td>HDR600</td></tr><tr><td>Ports</td><td>HDMI 2.1, DP 1.4, USB-C</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-9"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
    <div class="product-card fade-in-up" data-id="8" data-category="accessories" data-brand="StreamCam" data-price="199" data-rating="4.4" data-name="StreamCam 4K Pro" data-reviews="98" data-image="https://images.unsplash.com/photo-1587826080695-36b9d5a2e2c6?w=800&h=800&fit=crop&q=80" data-short-description="4K webcam with auto-focus, HDR, and dual microphones." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-20%</span>
        <a href="product-details.html?id=8">
          <img src="https://images.unsplash.com/photo-1587826080695-36b9d5a2e2c6?w=800&h=800&fit=crop&q=80" alt="StreamCam 4K Pro" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="8" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="8" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=8">StreamCam 4K Pro</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <span>(98)</span>
        </div>
        <div class="product-price">
          <span class="current">$199</span>
          <span class="old">$249</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="8" data-name="StreamCam 4K Pro"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="10" data-category="accessories" data-brand="Null Tech" data-price="59" data-rating="4.3" data-name="PowerVault 20000" data-reviews="421" data-image="https://images.unsplash.com/photo-1609091839311-6203d14d0a0a?w=800&h=800&fit=crop&q=80" data-short-description="20000mAh power bank with 65W USB-C PD fast charging." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-25%</span>
        <a href="product-details.html?id=10">
          <img src="https://images.unsplash.com/photo-1609091839311-6203d14d0a0a?w=800&h=800&fit=crop&q=80" alt="PowerVault 20000" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="10" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="10" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=10">PowerVault 20000</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <span>(421)</span>
        </div>
        <div class="product-price">
          <span class="current">$59</span>
          <span class="old">$79</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="10" data-name="PowerVault 20000"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="13" data-category="accessories" data-brand="Null Tech" data-price="79" data-rating="4.5" data-name="USB-C Hub Ultra" data-reviews="189" data-image="https://images.unsplash.com/photo-1625842268584-8f3296236761?w=800&h=800&fit=crop&q=80" data-short-description="12-in-1 USB-C hub with dual 4K HDMI and 100W pass-through charging." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-20%</span>
        <a href="product-details.html?id=13">
          <img src="https://images.unsplash.com/photo-1625842268584-8f3296236761?w=800&h=800&fit=crop&q=80" alt="USB-C Hub Ultra" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="13" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="13" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=13">USB-C Hub Ultra</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(189)</span>
        </div>
        <div class="product-price">
          <span class="current">$79</span>
          <span class="old">$99</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="13" data-name="USB-C Hub Ultra"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="14" data-category="accessories" data-brand="SoundWave" data-price="249" data-rating="4.6" data-name="Aura Speaker Max" data-reviews="134" data-image="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=800&h=800&fit=crop&q=80" data-short-description="Premium smart speaker with 360° sound and voice assistant." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-17%</span>
        <a href="product-details.html?id=14">
          <img src="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=800&h=800&fit=crop&q=80" alt="Aura Speaker Max" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="14" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="14" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=14">Aura Speaker Max</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(134)</span>
        </div>
        <div class="product-price">
          <span class="current">$249</span>
          <span class="old">$299</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="14" data-name="Aura Speaker Max"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="10" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1609091839311-6203d14d0a0a?w=800&h=800&fit=crop&q=80" alt="PowerVault 20000" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1609091839311-6203d14d0a0a?w=800&h=800&fit=crop&q=80" alt="PowerVault 20000" class="active" data-full="https://images.unsplash.com/photo-1609091839311-6203d14d0a0a?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Accessories</div>
        <h1>PowerVault 20000</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <span>4.3 (421 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$59</span>
          <span class="old">$79</span>
          <span class="save-badge">Save 25%</span>
        </div>
        <p class="product-short-desc">20000mAh power bank with 65W USB-C PD fast charging.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Black</button><button class="option-btn " data-option="color">White</button></div></div>

        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="10" data-name="PowerVault 20000"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="10"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-10">Description</button>
        <button class="tab-btn" data-tab="specifications-10">Specifications</button>
        <button class="tab-btn" data-tab="reviews-10">Reviews (421)</button>
      </div>
      <div class="tab-panel active" id="tab-description-10">
        <p style="color:var(--text-secondary);line-height:1.8">Compact 20000mAh power bank with 65W USB-C PD fast charging. Charge your laptop, phone, and tablet simultaneously with triple output ports.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-10">
        <table class="specs-table"><tr><td>Capacity</td><td>20000mAh</td></tr><tr><td>Max Output</td><td>65W USB-C PD</td></tr><tr><td>Ports</td><td>2× USB-C, 1× USB-A</td></tr><tr><td>Input</td><td>65W USB-C</td></tr><tr><td>Weight</td><td>380g</td></tr><tr><td>Safety</td><td>Overcharge protection</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-10"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
    <div class="product-card fade-in-up" data-id="8" data-category="accessories" data-brand="StreamCam" data-price="199" data-rating="4.4" data-name="StreamCam 4K Pro" data-reviews="98" data-image="https://images.unsplash.com/photo-1587826080695-36b9d5a2e2c6?w=800&h=800&fit=crop&q=80" data-short-description="4K webcam with auto-focus, HDR, and dual microphones." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-20%</span>
        <a href="product-details.html?id=8">
          <img src="https://images.unsplash.com/photo-1587826080695-36b9d5a2e2c6?w=800&h=800&fit=crop&q=80" alt="StreamCam 4K Pro" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="8" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="8" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=8">StreamCam 4K Pro</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <span>(98)</span>
        </div>
        <div class="product-price">
          <span class="current">$199</span>
          <span class="old">$249</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="8" data-name="StreamCam 4K Pro"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="9" data-category="accessories" data-brand="Null Tech" data-price="699" data-rating="4.7" data-name="Vision Pro Display 32" data-reviews="76" data-image="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&h=800&fit=crop&q=80" data-short-description="32&quot; 4K monitor with 144Hz, HDR600, and 99% sRGB accuracy." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-18%</span>
        <a href="product-details.html?id=9">
          <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&h=800&fit=crop&q=80" alt="Vision Pro Display 32" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="9" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="9" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=9">Vision Pro Display 32</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(76)</span>
        </div>
        <div class="product-price">
          <span class="current">$699</span>
          <span class="old">$849</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="9" data-name="Vision Pro Display 32"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="13" data-category="accessories" data-brand="Null Tech" data-price="79" data-rating="4.5" data-name="USB-C Hub Ultra" data-reviews="189" data-image="https://images.unsplash.com/photo-1625842268584-8f3296236761?w=800&h=800&fit=crop&q=80" data-short-description="12-in-1 USB-C hub with dual 4K HDMI and 100W pass-through charging." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-20%</span>
        <a href="product-details.html?id=13">
          <img src="https://images.unsplash.com/photo-1625842268584-8f3296236761?w=800&h=800&fit=crop&q=80" alt="USB-C Hub Ultra" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="13" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="13" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=13">USB-C Hub Ultra</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(189)</span>
        </div>
        <div class="product-price">
          <span class="current">$79</span>
          <span class="old">$99</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="13" data-name="USB-C Hub Ultra"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="14" data-category="accessories" data-brand="SoundWave" data-price="249" data-rating="4.6" data-name="Aura Speaker Max" data-reviews="134" data-image="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=800&h=800&fit=crop&q=80" data-short-description="Premium smart speaker with 360° sound and voice assistant." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-17%</span>
        <a href="product-details.html?id=14">
          <img src="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=800&h=800&fit=crop&q=80" alt="Aura Speaker Max" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="14" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="14" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=14">Aura Speaker Max</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(134)</span>
        </div>
        <div class="product-price">
          <span class="current">$249</span>
          <span class="old">$299</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="14" data-name="Aura Speaker Max"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="11" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1527864550417-7fd91d23706c?w=800&h=800&fit=crop&q=80" alt="HyperGlide Pro Mouse" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1527864550417-7fd91d23706c?w=800&h=800&fit=crop&q=80" alt="HyperGlide Pro Mouse" class="active" data-full="https://images.unsplash.com/photo-1527864550417-7fd91d23706c?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Gaming</div>
        <h1>HyperGlide Pro Mouse</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>4.8 (267 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$129</span>
          <span class="old">$159</span>
          <span class="save-badge">Save 19%</span>
        </div>
        <p class="product-short-desc">Ultra-light wireless gaming mouse with 26K DPI and 70-hour battery.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Black</button><button class="option-btn " data-option="color">White</button></div></div>

        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="11" data-name="HyperGlide Pro Mouse"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="11"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-11">Description</button>
        <button class="tab-btn" data-tab="specifications-11">Specifications</button>
        <button class="tab-btn" data-tab="reviews-11">Reviews (267)</button>
      </div>
      <div class="tab-panel active" id="tab-description-11">
        <p style="color:var(--text-secondary);line-height:1.8">Ultra-lightweight wireless gaming mouse with 26K DPI sensor, 70-hour battery, and customizable RGB. Weighs only 63 grams for competitive advantage.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-11">
        <table class="specs-table"><tr><td>Sensor</td><td>26,000 DPI Optical</td></tr><tr><td>Weight</td><td>63g</td></tr><tr><td>Battery</td><td>70 hours wireless</td></tr><tr><td>Polling Rate</td><td>1000Hz</td></tr><tr><td>Buttons</td><td>8 programmable</td></tr><tr><td>Connection</td><td>2.4GHz + Bluetooth</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-11"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
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
    <div class="product-card fade-in-up" data-id="6" data-category="gaming" data-brand="GameForce" data-price="2199" data-rating="4.9" data-name="GameForce RTX Station" data-reviews="67" data-image="https://images.unsplash.com/photo-1593305841991-05c297ba4575?w=800&h=800&fit=crop&q=80" data-short-description="High-end gaming PC with RTX 4080 and Intel i9 processor." data-in-stock="true" data-is-new="true" data-category-name="Gaming">
      <div class="product-card-image">
        <span class="product-badge discount">Premium</span>
        <a href="product-details.html?id=6">
          <img src="https://images.unsplash.com/photo-1593305841991-05c297ba4575?w=800&h=800&fit=crop&q=80" alt="GameForce RTX Station" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="6" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="6" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Gaming</div>
        <h5><a href="product-details.html?id=6">GameForce RTX Station</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(67)</span>
        </div>
        <div class="product-price">
          <span class="current">$2,199</span>
          <span class="old">$2,499</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="6" data-name="GameForce RTX Station"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
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
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="12" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=800&h=800&fit=crop&q=80" alt="Fold X Elite" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=800&h=800&fit=crop&q=80" alt="Fold X Elite" class="active" data-full="https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=800&h=800&fit=crop&q=80"><img src="https://images.unsplash.com/photo-1598327105666-5b89351aff23?w=800&h=800&fit=crop&q=80" alt="Fold X Elite" class="" data-full="https://images.unsplash.com/photo-1598327105666-5b89351aff23?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Smartphones</div>
        <h1>Fold X Elite</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>4.6 (54 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$1,599</span>
          <span class="old">$1,799</span>
          <span class="save-badge">Save 11%</span>
        </div>
        <p class="product-short-desc">Foldable smartphone with 7.6" inner display and multitasking features.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Phantom Black</button><button class="option-btn " data-option="color">Mystic Bronze</button></div></div>
        <div class="option-group"><label>Storage</label><div class="option-buttons"><button class="option-btn active" data-option="storage">256GB</button><button class="option-btn " data-option="storage">512GB</button><button class="option-btn " data-option="storage">1TB</button></div></div>
        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="12" data-name="Fold X Elite"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="12"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-12">Description</button>
        <button class="tab-btn" data-tab="specifications-12">Specifications</button>
        <button class="tab-btn" data-tab="reviews-12">Reviews (54)</button>
      </div>
      <div class="tab-panel active" id="tab-description-12">
        <p style="color:var(--text-secondary);line-height:1.8">Revolutionary foldable smartphone with 7.6" inner display and 6.2" cover screen. Multitask like never before with advanced split-screen capabilities.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-12">
        <table class="specs-table"><tr><td>Inner Display</td><td>7.6" Foldable AMOLED</td></tr><tr><td>Cover Display</td><td>6.2" AMOLED</td></tr><tr><td>Processor</td><td>Snapdragon 8 Gen 3</td></tr><tr><td>RAM</td><td>12GB</td></tr><tr><td>Camera</td><td>50MP Triple Camera</td></tr><tr><td>Battery</td><td>4400mAh Dual Cell</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-12"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
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
    <div class="product-card fade-in-up" data-id="4" data-category="smart-watches" data-brand="Chronos" data-price="429" data-rating="4.6" data-name="Chronos Ultra" data-reviews="178" data-image="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" data-short-description="Advanced smartwatch with health monitoring, GPS, and AMOLED display." data-in-stock="true" data-is-new="true" data-category-name="Smart Watches">
      <div class="product-card-image">
        <span class="product-badge ">New</span>
        <a href="product-details.html?id=4">
          <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" alt="Chronos Ultra" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="4" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="4" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Smart Watches</div>
        <h5><a href="product-details.html?id=4">Chronos Ultra</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(178)</span>
        </div>
        <div class="product-price">
          <span class="current">$429</span>
          <span class="old">$499</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="4" data-name="Chronos Ultra"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="13" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1625842268584-8f3296236761?w=800&h=800&fit=crop&q=80" alt="USB-C Hub Ultra" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1625842268584-8f3296236761?w=800&h=800&fit=crop&q=80" alt="USB-C Hub Ultra" class="active" data-full="https://images.unsplash.com/photo-1625842268584-8f3296236761?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Accessories</div>
        <h1>USB-C Hub Ultra</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>4.5 (189 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$79</span>
          <span class="old">$99</span>
          <span class="save-badge">Save 20%</span>
        </div>
        <p class="product-short-desc">12-in-1 USB-C hub with dual 4K HDMI and 100W pass-through charging.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Space Gray</button></div></div>

        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="13" data-name="USB-C Hub Ultra"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="13"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-13">Description</button>
        <button class="tab-btn" data-tab="specifications-13">Specifications</button>
        <button class="tab-btn" data-tab="reviews-13">Reviews (189)</button>
      </div>
      <div class="tab-panel active" id="tab-description-13">
        <p style="color:var(--text-secondary);line-height:1.8">12-in-1 USB-C hub with dual 4K HDMI, Gigabit Ethernet, SD/microSD slots, and 100W pass-through charging. The ultimate connectivity solution.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-13">
        <table class="specs-table"><tr><td>Ports</td><td>12-in-1</td></tr><tr><td>HDMI</td><td>Dual 4K @ 60Hz</td></tr><tr><td>Ethernet</td><td>Gigabit</td></tr><tr><td>USB</td><td>3× USB 3.0, 1× USB-C</td></tr><tr><td>Card Reader</td><td>SD + microSD</td></tr><tr><td>Power Delivery</td><td>100W pass-through</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-13"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
    <div class="product-card fade-in-up" data-id="8" data-category="accessories" data-brand="StreamCam" data-price="199" data-rating="4.4" data-name="StreamCam 4K Pro" data-reviews="98" data-image="https://images.unsplash.com/photo-1587826080695-36b9d5a2e2c6?w=800&h=800&fit=crop&q=80" data-short-description="4K webcam with auto-focus, HDR, and dual microphones." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-20%</span>
        <a href="product-details.html?id=8">
          <img src="https://images.unsplash.com/photo-1587826080695-36b9d5a2e2c6?w=800&h=800&fit=crop&q=80" alt="StreamCam 4K Pro" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="8" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="8" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=8">StreamCam 4K Pro</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <span>(98)</span>
        </div>
        <div class="product-price">
          <span class="current">$199</span>
          <span class="old">$249</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="8" data-name="StreamCam 4K Pro"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="9" data-category="accessories" data-brand="Null Tech" data-price="699" data-rating="4.7" data-name="Vision Pro Display 32" data-reviews="76" data-image="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&h=800&fit=crop&q=80" data-short-description="32&quot; 4K monitor with 144Hz, HDR600, and 99% sRGB accuracy." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-18%</span>
        <a href="product-details.html?id=9">
          <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&h=800&fit=crop&q=80" alt="Vision Pro Display 32" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="9" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="9" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=9">Vision Pro Display 32</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(76)</span>
        </div>
        <div class="product-price">
          <span class="current">$699</span>
          <span class="old">$849</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="9" data-name="Vision Pro Display 32"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="10" data-category="accessories" data-brand="Null Tech" data-price="59" data-rating="4.3" data-name="PowerVault 20000" data-reviews="421" data-image="https://images.unsplash.com/photo-1609091839311-6203d14d0a0a?w=800&h=800&fit=crop&q=80" data-short-description="20000mAh power bank with 65W USB-C PD fast charging." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-25%</span>
        <a href="product-details.html?id=10">
          <img src="https://images.unsplash.com/photo-1609091839311-6203d14d0a0a?w=800&h=800&fit=crop&q=80" alt="PowerVault 20000" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="10" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="10" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=10">PowerVault 20000</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <span>(421)</span>
        </div>
        <div class="product-price">
          <span class="current">$59</span>
          <span class="old">$79</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="10" data-name="PowerVault 20000"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="14" data-category="accessories" data-brand="SoundWave" data-price="249" data-rating="4.6" data-name="Aura Speaker Max" data-reviews="134" data-image="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=800&h=800&fit=crop&q=80" data-short-description="Premium smart speaker with 360° sound and voice assistant." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-17%</span>
        <a href="product-details.html?id=14">
          <img src="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=800&h=800&fit=crop&q=80" alt="Aura Speaker Max" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="14" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="14" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=14">Aura Speaker Max</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(134)</span>
        </div>
        <div class="product-price">
          <span class="current">$249</span>
          <span class="old">$299</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="14" data-name="Aura Speaker Max"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="14" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=800&h=800&fit=crop&q=80" alt="Aura Speaker Max" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=800&h=800&fit=crop&q=80" alt="Aura Speaker Max" class="active" data-full="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Accessories</div>
        <h1>Aura Speaker Max</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>4.6 (134 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$249</span>
          <span class="old">$299</span>
          <span class="save-badge">Save 17%</span>
        </div>
        <p class="product-short-desc">Premium smart speaker with 360° sound and voice assistant.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Charcoal</button><button class="option-btn " data-option="color">Sand</button></div></div>

        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="14" data-name="Aura Speaker Max"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="14"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-14">Description</button>
        <button class="tab-btn" data-tab="specifications-14">Specifications</button>
        <button class="tab-btn" data-tab="reviews-14">Reviews (134)</button>
      </div>
      <div class="tab-panel active" id="tab-description-14">
        <p style="color:var(--text-secondary);line-height:1.8">Premium smart speaker with 360° room-filling sound, voice assistant integration, and seamless multi-room audio. Crafted with premium fabric and aluminum.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-14">
        <table class="specs-table"><tr><td>Drivers</td><td>3-way speaker system</td></tr><tr><td>Power</td><td>60W RMS</td></tr><tr><td>Connectivity</td><td>WiFi, Bluetooth 5.0</td></tr><tr><td>Voice Assistant</td><td>Built-in</td></tr><tr><td>Multi-room</td><td>Yes</td></tr><tr><td>Dimensions</td><td>180×180×280mm</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-14"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
    <div class="product-card fade-in-up" data-id="8" data-category="accessories" data-brand="StreamCam" data-price="199" data-rating="4.4" data-name="StreamCam 4K Pro" data-reviews="98" data-image="https://images.unsplash.com/photo-1587826080695-36b9d5a2e2c6?w=800&h=800&fit=crop&q=80" data-short-description="4K webcam with auto-focus, HDR, and dual microphones." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-20%</span>
        <a href="product-details.html?id=8">
          <img src="https://images.unsplash.com/photo-1587826080695-36b9d5a2e2c6?w=800&h=800&fit=crop&q=80" alt="StreamCam 4K Pro" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="8" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="8" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=8">StreamCam 4K Pro</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <span>(98)</span>
        </div>
        <div class="product-price">
          <span class="current">$199</span>
          <span class="old">$249</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="8" data-name="StreamCam 4K Pro"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="9" data-category="accessories" data-brand="Null Tech" data-price="699" data-rating="4.7" data-name="Vision Pro Display 32" data-reviews="76" data-image="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&h=800&fit=crop&q=80" data-short-description="32&quot; 4K monitor with 144Hz, HDR600, and 99% sRGB accuracy." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-18%</span>
        <a href="product-details.html?id=9">
          <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&h=800&fit=crop&q=80" alt="Vision Pro Display 32" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="9" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="9" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=9">Vision Pro Display 32</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(76)</span>
        </div>
        <div class="product-price">
          <span class="current">$699</span>
          <span class="old">$849</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="9" data-name="Vision Pro Display 32"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="10" data-category="accessories" data-brand="Null Tech" data-price="59" data-rating="4.3" data-name="PowerVault 20000" data-reviews="421" data-image="https://images.unsplash.com/photo-1609091839311-6203d14d0a0a?w=800&h=800&fit=crop&q=80" data-short-description="20000mAh power bank with 65W USB-C PD fast charging." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-25%</span>
        <a href="product-details.html?id=10">
          <img src="https://images.unsplash.com/photo-1609091839311-6203d14d0a0a?w=800&h=800&fit=crop&q=80" alt="PowerVault 20000" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="10" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="10" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=10">PowerVault 20000</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <span>(421)</span>
        </div>
        <div class="product-price">
          <span class="current">$59</span>
          <span class="old">$79</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="10" data-name="PowerVault 20000"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="13" data-category="accessories" data-brand="Null Tech" data-price="79" data-rating="4.5" data-name="USB-C Hub Ultra" data-reviews="189" data-image="https://images.unsplash.com/photo-1625842268584-8f3296236761?w=800&h=800&fit=crop&q=80" data-short-description="12-in-1 USB-C hub with dual 4K HDMI and 100W pass-through charging." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-20%</span>
        <a href="product-details.html?id=13">
          <img src="https://images.unsplash.com/photo-1625842268584-8f3296236761?w=800&h=800&fit=crop&q=80" alt="USB-C Hub Ultra" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="13" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="13" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=13">USB-C Hub Ultra</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(189)</span>
        </div>
        <div class="product-price">
          <span class="current">$79</span>
          <span class="old">$99</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="13" data-name="USB-C Hub Ultra"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="15" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=800&h=800&fit=crop&q=80" alt="AirBuds Pro 3" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=800&h=800&fit=crop&q=80" alt="AirBuds Pro 3" class="active" data-full="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=800&h=800&fit=crop&q=80"><img src="https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?w=800&h=800&fit=crop&q=80" alt="AirBuds Pro 3" class="" data-full="https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Headphones</div>
        <h1>AirBuds Pro 3</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>4.7 (389 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$249</span>
          <span class="old">$279</span>
          <span class="save-badge">Save 11%</span>
        </div>
        <p class="product-short-desc">True wireless earbuds with adaptive ANC and spatial audio.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">White</button><button class="option-btn " data-option="color">Black</button></div></div>

        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="15" data-name="AirBuds Pro 3"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="15"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-15">Description</button>
        <button class="tab-btn" data-tab="specifications-15">Specifications</button>
        <button class="tab-btn" data-tab="reviews-15">Reviews (389)</button>
      </div>
      <div class="tab-panel active" id="tab-description-15">
        <p style="color:var(--text-secondary);line-height:1.8">True wireless earbuds with adaptive ANC, spatial audio, and 30-hour total battery life. IPX5 water resistant for workouts and daily commutes.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-15">
        <table class="specs-table"><tr><td>Driver</td><td>11mm Dynamic</td></tr><tr><td>ANC</td><td>Adaptive Hybrid</td></tr><tr><td>Battery</td><td>8h + 22h case</td></tr><tr><td>Water Resistance</td><td>IPX5</td></tr><tr><td>Codec</td><td>AAC, SBC, LDAC</td></tr><tr><td>Weight</td><td>5.4g per earbud</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-15"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
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
    <div class="product-card fade-in-up" data-id="4" data-category="smart-watches" data-brand="Chronos" data-price="429" data-rating="4.6" data-name="Chronos Ultra" data-reviews="178" data-image="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" data-short-description="Advanced smartwatch with health monitoring, GPS, and AMOLED display." data-in-stock="true" data-is-new="true" data-category-name="Smart Watches">
      <div class="product-card-image">
        <span class="product-badge ">New</span>
        <a href="product-details.html?id=4">
          <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=800&fit=crop&q=80" alt="Chronos Ultra" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="4" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="4" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Smart Watches</div>
        <h5><a href="product-details.html?id=4">Chronos Ultra</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(178)</span>
        </div>
        <div class="product-price">
          <span class="current">$429</span>
          <span class="old">$499</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="4" data-name="Chronos Ultra"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
<div class="product-detail-page" data-product-id="16" style="display:none">
    <div class="product-details-grid">
      <div class="product-gallery">
        <div class="product-gallery-main">
          <img src="https://images.unsplash.com/photo-1527864550417-7fd91d23706c?w=800&h=800&fit=crop&q=80" alt="ProStand Elite" class="main-product-image">
        </div>
        <div class="product-gallery-thumbs"><img src="https://images.unsplash.com/photo-1527864550417-7fd91d23706c?w=800&h=800&fit=crop&q=80" alt="ProStand Elite" class="active" data-full="https://images.unsplash.com/photo-1527864550417-7fd91d23706c?w=800&h=800&fit=crop&q=80"></div>
      </div>
      <div class="product-info">
        <div class="product-category">Accessories</div>
        <h1>ProStand Elite</h1>
        <div class="product-info-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <span>4.4 (156 reviews)</span>
        </div>
        <div class="product-info-price">
          <span class="current">$89</span>
          <span class="old">$109</span>
          <span class="save-badge">Save 18%</span>
        </div>
        <p class="product-short-desc">Ergonomic aluminum laptop stand with adjustable height.</p>
        <div class="option-group"><label>Color</label><div class="option-buttons"><button class="option-btn active" data-option="color">Silver</button><button class="option-btn " data-option="color">Space Gray</button></div></div>

        <div class="quantity-selector">
          <label>Quantity</label>
          <button class="qty-btn qty-minus">−</button>
          <input type="text" class="qty-input" value="1" readonly>
          <button class="qty-btn qty-plus">+</button>
        </div>
        <div class="product-actions">
          <button class="btn-primary-custom btn-add-cart" data-id="16" data-name="ProStand Elite"><i class="bi bi-cart-plus"></i> Add to Cart</button>
          <a href="checkout.html" class="btn-outline-custom"><i class="bi bi-lightning"></i> Buy Now</a>
          <button class="btn-icon wishlist-btn" data-id="16"><i class="bi bi-heart"></i></button>
        </div>
        <div class="product-meta">
          <span><i class="bi bi-truck"></i> Free shipping</span>
          <span><i class="bi bi-shield-check"></i> 2-year warranty</span>
          <span><i class="bi bi-arrow-repeat"></i> 30-day returns</span>
        </div>
      </div>
    </div>
    <div class="product-tabs">
      <div class="tab-nav">
        <button class="tab-btn active" data-tab="description-16">Description</button>
        <button class="tab-btn" data-tab="specifications-16">Specifications</button>
        <button class="tab-btn" data-tab="reviews-16">Reviews (156)</button>
      </div>
      <div class="tab-panel active" id="tab-description-16">
        <p style="color:var(--text-secondary);line-height:1.8">Ergonomic aluminum laptop stand with adjustable height and angle. Improves posture and airflow while adding a premium aesthetic to your desk setup.</p>
      </div>
      <div class="tab-panel" id="tab-specifications-16">
        <table class="specs-table"><tr><td>Material</td><td>Aluminum alloy</td></tr><tr><td>Adjustable Height</td><td>10-20cm</td></tr><tr><td>Max Load</td><td>5kg</td></tr><tr><td>Compatibility</td><td>10"-17" laptops</td></tr><tr><td>Weight</td><td>680g</td></tr><tr><td>Foldable</td><td>Yes</td></tr></table>
      </div>
      <div class="tab-panel" id="tab-reviews-16"><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Alex Turner"><div><h6>Alex Turner</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">March 5, 2026</span></div><div class="review-title">Best phone I've ever owned</div><p>The Nova X Pro exceeded all my expectations. Camera is stunning, performance is blazing fast, and the build quality feels premium in every way.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&q=80" alt="Lisa Park"><div><h6>Lisa Park</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 20, 2026</span></div><div class="review-title">Worth every penny</div><p>Upgraded from my old phone and the difference is night and day. The display is gorgeous and battery life is excellent.</p></div><div class="review-item"><div class="review-item-header"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=80&h=80&fit=crop&q=80" alt="David Wilson"><div><h6>David Wilson</h6><div class="review-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div></div><span class="review-date ms-auto" style="font-size:0.8rem;color:var(--text-muted)">February 8, 2026</span></div><div class="review-title">Great but pricey</div><p>Fantastic device overall. Only minor complaint is the price, but you get what you pay for with this level of quality.</p></div></div>
    </div>
    <div class="mt-5 related-section">
      <h3 class="section-title mb-4" style="font-size:1.5rem">Related Products</h3>
      <div class="products-grid">
    <div class="product-card fade-in-up" data-id="8" data-category="accessories" data-brand="StreamCam" data-price="199" data-rating="4.4" data-name="StreamCam 4K Pro" data-reviews="98" data-image="https://images.unsplash.com/photo-1587826080695-36b9d5a2e2c6?w=800&h=800&fit=crop&q=80" data-short-description="4K webcam with auto-focus, HDR, and dual microphones." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-20%</span>
        <a href="product-details.html?id=8">
          <img src="https://images.unsplash.com/photo-1587826080695-36b9d5a2e2c6?w=800&h=800&fit=crop&q=80" alt="StreamCam 4K Pro" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="8" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="8" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=8">StreamCam 4K Pro</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <span>(98)</span>
        </div>
        <div class="product-price">
          <span class="current">$199</span>
          <span class="old">$249</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="8" data-name="StreamCam 4K Pro"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="9" data-category="accessories" data-brand="Null Tech" data-price="699" data-rating="4.7" data-name="Vision Pro Display 32" data-reviews="76" data-image="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&h=800&fit=crop&q=80" data-short-description="32&quot; 4K monitor with 144Hz, HDR600, and 99% sRGB accuracy." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-18%</span>
        <a href="product-details.html?id=9">
          <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800&h=800&fit=crop&q=80" alt="Vision Pro Display 32" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="9" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="9" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=9">Vision Pro Display 32</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(76)</span>
        </div>
        <div class="product-price">
          <span class="current">$699</span>
          <span class="old">$849</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="9" data-name="Vision Pro Display 32"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="10" data-category="accessories" data-brand="Null Tech" data-price="59" data-rating="4.3" data-name="PowerVault 20000" data-reviews="421" data-image="https://images.unsplash.com/photo-1609091839311-6203d14d0a0a?w=800&h=800&fit=crop&q=80" data-short-description="20000mAh power bank with 65W USB-C PD fast charging." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-25%</span>
        <a href="product-details.html?id=10">
          <img src="https://images.unsplash.com/photo-1609091839311-6203d14d0a0a?w=800&h=800&fit=crop&q=80" alt="PowerVault 20000" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="10" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="10" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=10">PowerVault 20000</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
          <span>(421)</span>
        </div>
        <div class="product-price">
          <span class="current">$59</span>
          <span class="old">$79</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="10" data-name="PowerVault 20000"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-card fade-in-up" data-id="13" data-category="accessories" data-brand="Null Tech" data-price="79" data-rating="4.5" data-name="USB-C Hub Ultra" data-reviews="189" data-image="https://images.unsplash.com/photo-1625842268584-8f3296236761?w=800&h=800&fit=crop&q=80" data-short-description="12-in-1 USB-C hub with dual 4K HDMI and 100W pass-through charging." data-in-stock="true" data-is-new="false" data-category-name="Accessories">
      <div class="product-card-image">
        <span class="product-badge discount">-20%</span>
        <a href="product-details.html?id=13">
          <img src="https://images.unsplash.com/photo-1625842268584-8f3296236761?w=800&h=800&fit=crop&q=80" alt="USB-C Hub Ultra" loading="lazy">
        </a>
        <div class="product-actions-overlay">
          <button class="btn-icon wishlist-btn" data-id="13" aria-label="Add to wishlist"><i class="bi bi-heart"></i></button>
          <button class="btn-icon quick-view-btn" data-id="13" aria-label="Quick view"><i class="bi bi-eye"></i></button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-category">Accessories</div>
        <h5><a href="product-details.html?id=13">USB-C Hub Ultra</a></h5>
        <div class="product-rating">
          <span class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
          <span>(189)</span>
        </div>
        <div class="product-price">
          <span class="current">$79</span>
          <span class="old">$99</span>
        </div>
        <div class="product-card-footer">
          <button class="btn-add-cart" data-id="13" data-name="USB-C Hub Ultra"><i class="bi bi-cart-plus"></i> Add to Cart</button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
      </div>
    </div>
  </section>






<x-footer/>















