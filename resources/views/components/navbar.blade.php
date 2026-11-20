
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Null Shop — Technology. Designed Better.</title>
  <meta name="description" content="Null Shop — Premium technology e-commerce. Discover the latest smartphones, laptops, headphones, and more.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="{{asset('shop-assets')}}/css/style.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar-custom">
    <div class="navbar-inner">
      <a href="index.html" class="logo">
        <div class="logo-icon"><i class="bi bi-lightning-charge-fill"></i></div>
        <span class="logo-text">Null <span>Shop</span></span>
      </a>

      <div class="nav-links">
        <a href="{{route('shop.index')}}">Home</a>
        <a href="{{route('shop.products')}}">Products</a>
        <a href="{{route('shop.contact')}}">Contact</a>
      </div>

      <div class="nav-actions">
        @if (!Auth::guard('web')->check())

        <div class="nav-auth">
          <a href="login.html" class="btn-login">Login</a>
          <a href="register.html" class="btn-register">Register</a>
        </div>
        @else


        <div class="nav-auth">
            <p>welcome{{Auth::user()->name}}</p>
          <a href="{{route('user.logout')}}" class="btn-register">Register</a>
        </div>



        @endif

        @if (Auth::check())


        <div class="cart-wrapper">
          <button class="cart-btn" aria-label="Shopping cart">
            <i class="bi bi-cart3"></i>
            <span class="cart-badge">3</span>
          </button>
          <div class="mini-cart">
            <div class="mini-cart-header">
              <h6>Shopping Cart</h6>
              <span style="font-size:0.8rem;color:var(--text-muted)">3 items</span>
            </div>
            <div class="mini-cart-items" id="mini-cart-items">
                @foreach ($cart as $cart )


            <div class="mini-cart-item" data-id="3" data-price="349">
              <img src="{{asset('storage/'. $cart->product->image[0]->imgName)}}" alt="SoundWave Elite">
              <div class="mini-cart-item-info">
                <h6>{{$cart->product->name}}</h6>
                <div class="qty-price">{{$cart->count}} × ${{$cart->product->price}}</div>
              </div>
              <button class="mini-cart-item-remove" aria-label="Remove item"><i class="bi bi-x-lg"></i></button>
            </div>

                @endforeach




            </div>
            <div class="mini-cart-footer">
              <div class="mini-cart-subtotal">
                <span>Subtotal</span>
                <span id="mini-cart-subtotal">$967</span>
              </div>
              <div class="mini-cart-actions">
                <a href="checkout.html" class="btn-outline-custom btn-sm-custom">View Cart</a>
                <a href="checkout.html" class="btn-primary-custom btn-sm-custom">Checkout</a>
              </div>
            </div>
          </div>
        </div>

        @endif




        <button class="nav-toggle" aria-label="Toggle menu"><i class="bi bi-list"></i></button>
      </div>
    </div>
  </nav>

