/**
 * Null Shop - Main JavaScript
 * Front-end interactions only — product markup lives in HTML.
 */

$(document).ready(function () {
  initNavbar();
  initMiniCart();
  initScrollAnimations();
  initCounterAnimation();
  initBackToTop();
  initNewsletter();
  initProductCards();
  initProductsPage();
  initProductDetails();
  initContactForm();
  initLoginForm();
  initRegisterForm();
  initCheckout();
  initQuickView();
  initWishlist();
  initTabs();
  renderCategories();
  renderHomeReviews();
  renderStats();
});

/* --- Navbar --- */
function initNavbar() {
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';

  $('.nav-links a, .mobile-nav a').each(function () {
    const href = $(this).attr('href');
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      $(this).addClass('active');
    }
  });

  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 50) {
      $('.navbar-custom').addClass('scrolled');
    } else {
      $('.navbar-custom').removeClass('scrolled');
    }
  });

  $('.nav-toggle').on('click', function () {
    $('.mobile-nav').toggleClass('open');
    const icon = $(this).find('i');
    icon.toggleClass('bi-list bi-x-lg');
  });

  $('.mobile-nav a').on('click', function () {
    $('.mobile-nav').removeClass('open');
    $('.nav-toggle i').removeClass('bi-x-lg').addClass('bi-list');
  });

  $('a[href^="#"]').on('click', function (e) {
    const target = $(this.getAttribute('href'));
    if (target.length) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: target.offset().top - 80 }, 600);
    }
  });
}

/* --- Mini Cart --- */
function initMiniCart() {
  updateCartBadge();
  updateMiniCartSubtotal();

  $('.cart-wrapper').on('mouseenter', function () {
    $(this).find('.mini-cart').addClass('show');
  }).on('mouseleave', function () {
    $(this).find('.mini-cart').removeClass('show');
  });

  $(document).on('click', '.mini-cart-item-remove', function (e) {
    e.stopPropagation();
    const item = $(this).closest('.mini-cart-item');
    item.slideUp(300, function () {
      $(this).remove();
      updateCartBadge();
      updateMiniCartSubtotal();
      if ($('.mini-cart-item').length === 0) {
        showEmptyCart();
      }
    });
    showToast('Item removed from cart', 'info');
  });
}

function updateCartBadge() {
  const count = $('.mini-cart-item').length;
  $('.cart-badge').text(count);
  if (count === 0) {
    $('.cart-badge').hide();
  } else {
    $('.cart-badge').show();
  }
}

function updateMiniCartSubtotal() {
  let subtotal = 0;
  $('.mini-cart-item').each(function () {
    subtotal += parseFloat($(this).data('price')) || 0;
  });
  $('#mini-cart-subtotal').text(formatPrice(subtotal));
}

function showEmptyCart() {
  $('#mini-cart-items').html(`
    <div class="mini-cart-empty">
      <i class="bi bi-cart3 d-block"></i>
      <p>Your cart is empty</p>
    </div>`);
  $('#mini-cart-subtotal').text('$0');
}

/* --- Scroll Animations --- */
function initScrollAnimations() {
  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        $(entry.target).addClass('visible');
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

  $('.fade-in-up').each(function () {
    observer.observe(this);
  });
}

/* --- Counter Animation --- */
function initCounterAnimation() {
  let animated = false;

  function animateCounters() {
    if (animated) return;
    const section = $('.stats-section');
    if (!section.length) return;

    const sectionTop = section.offset().top;
    const scrollPos = $(window).scrollTop() + $(window).height();

    if (scrollPos > sectionTop + 100) {
      animated = true;
      $('.stat-counter').each(function () {
        const $el = $(this);
        const target = parseInt($el.data('target'), 10);
        const suffix = $el.data('suffix') || '';
        $({ val: 0 }).animate({ val: target }, {
          duration: 2000,
          easing: 'swing',
          step: function () {
            $el.text(Math.floor(this.val).toLocaleString() + suffix);
          },
          complete: function () {
            $el.text(target.toLocaleString() + suffix);
          }
        });
      });
    }
  }

  $(window).on('scroll', animateCounters);
  animateCounters();
}

/* --- Back to Top --- */
function initBackToTop() {
  const btn = $('<button class="back-to-top" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>');
  $('body').append(btn);

  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 400) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function () {
    $('html, body').animate({ scrollTop: 0 }, 600);
  });
}

/* --- Toast Notifications --- */
function showToast(message, type) {
  type = type || 'success';
  const icons = { success: 'bi-check-circle-fill', error: 'bi-exclamation-circle-fill', info: 'bi-info-circle-fill' };

  if (!$('.toast-container').length) {
    $('body').append('<div class="toast-container"></div>');
  }

  const toast = $(`
    <div class="toast-custom ${type}">
      <i class="bi ${icons[type]} toast-icon"></i>
      <span class="toast-message">${message}</span>
      <button class="toast-close"><i class="bi bi-x"></i></button>
    </div>`);

  $('.toast-container').append(toast);
  setTimeout(function () { toast.addClass('show'); }, 10);

  toast.find('.toast-close').on('click', function () {
    toast.removeClass('show');
    setTimeout(function () { toast.remove(); }, 400);
  });

  setTimeout(function () {
    toast.removeClass('show');
    setTimeout(function () { toast.remove(); }, 400);
  }, 4000);
}

/* --- Newsletter --- */
function initNewsletter() {
  $('#newsletter-form').on('submit', function (e) {
    e.preventDefault();
    const email = $('#newsletter-email').val().trim();
    if (!email || !isValidEmail(email)) {
      showToast('Please enter a valid email address', 'error');
      return;
    }
    showToast('Thank you for subscribing to Null Shop newsletter!', 'success');
    $('#newsletter-email').val('');
  });
}

/* --- Product Cards (interactions only) --- */
function initProductCards() {
  $(document).on('click', '.add_cart', function () {
    const name = $(this).data('name') || $(this).closest('.product-card').data('name');
    if (name) {
      showToast(`${name} added to cart!`, 'success');
      const badge = $('.cart-badge');
      badge.text(parseInt(badge.text() || '0', 10) + 1).show();
    }
  });
}

/* --- Products Page (filter/sort existing HTML) --- */
function initProductsPage() {
  const grid = $('#products-grid');
  if (!grid.length) return;

  updateProductsCount();

  $('#product-search').on('input', debounce(filterProducts, 300));
  $('#sort-select').on('change', filterProducts);
  $('.filter-option input').on('change', filterProducts);
  $('#price-min, #price-max').on('change', filterProducts);

  $('.mobile-filter-toggle').on('click', function () {
    $('.filters-sidebar').addClass('open');
    $('.filter-overlay').addClass('show');
  });

  $('.filter-overlay, .filter-close').on('click', function () {
    $('.filters-sidebar').removeClass('open');
    $('.filter-overlay').removeClass('show');
  });
}

function getProductCardData($card) {
  return {
    name: String($card.data('name') || ''),
    category: String($card.data('category') || ''),
    categoryName: String($card.data('category-name') || ''),
    brand: String($card.data('brand') || ''),
    price: parseFloat($card.data('price')) || 0,
    rating: parseFloat($card.data('rating')) || 0,
    inStock: $card.data('in-stock') === true || $card.data('in-stock') === 'true',
    isNew: $card.data('is-new') === true || $card.data('is-new') === 'true'
  };
}

function filterProducts() {
  const grid = $('#products-grid');
  if (!grid.length) return;

  const search = ($('#product-search').val() || '').toLowerCase();
  const sort = $('#sort-select').val();
  const selectedCategories = [];
  const selectedBrands = [];
  const minPrice = parseFloat($('#price-min').val()) || 0;
  const maxPrice = parseFloat($('#price-max').val()) || Infinity;
  let minRating = 0;
  let inStockOnly = false;

  $('input[name="category"]:checked').each(function () {
    selectedCategories.push($(this).val());
  });
  $('input[name="brand"]:checked').each(function () {
    selectedBrands.push($(this).val());
  });
  $('input[name="rating"]:checked').each(function () {
    minRating = Math.max(minRating, parseFloat($(this).val()));
  });
  if ($('#in-stock').is(':checked')) inStockOnly = true;

  const cards = grid.find('.product-card').get();
  let visibleCount = 0;

  cards.forEach(function (card) {
    const $card = $(card);
    const data = getProductCardData($card);
    let show = true;

    if (search && !data.name.toLowerCase().includes(search) && !data.categoryName.toLowerCase().includes(search)) {
      show = false;
    }
    if (selectedCategories.length && !selectedCategories.includes(data.category)) show = false;
    if (selectedBrands.length && !selectedBrands.includes(data.brand)) show = false;
    if (data.price < minPrice || data.price > maxPrice) show = false;
    if (minRating && data.rating < minRating) show = false;
    if (inStockOnly && !data.inStock) show = false;

    $card.toggle(show);
    if (show) visibleCount++;
  });

  if (sort !== 'featured') {
    const visibleCards = cards.filter(function (card) {
      return $(card).is(':visible');
    });

    visibleCards.sort(function (a, b) {
      const aData = getProductCardData($(a));
      const bData = getProductCardData($(b));

      switch (sort) {
        case 'price-low': return aData.price - bData.price;
        case 'price-high': return bData.price - aData.price;
        case 'rating': return bData.rating - aData.rating;
        case 'newest': return (bData.isNew ? 1 : 0) - (aData.isNew ? 1 : 0);
        default: return 0;
      }
    });

    visibleCards.forEach(function (card) {
      grid.append(card);
    });
  }

  $('#no-products').toggle(visibleCount === 0);
  $('#products-count-num').text(visibleCount);
}

function updateProductsCount() {
  const count = $('#products-grid .product-card').length;
  $('#products-count-num').text(count);
}

/* --- Product Details (show static HTML section) --- */
function initProductDetails() {
  const container = $('#product-details-container');
  if (!container.length) return;

  const params = new URLSearchParams(window.location.search);
  const id = params.get('id') || '1';
  const page = container.find('.product-detail-page[data-product-id="' + id + '"]');

  if (!page.length) {
    container.html('<p>Product not found.</p>');
    return;
  }

  container.find('.product-detail-page').hide();
  page.show();

  const productName = page.find('h1').first().text();
  document.title = `${productName} — Null Shop`;
  $('#breadcrumb-product').text(productName);

  page.find('.product-gallery-thumbs img').on('click', function () {
    page.find('.product-gallery-thumbs img').removeClass('active');
    $(this).addClass('active');
    page.find('.main-product-image').attr('src', $(this).data('full'));
  });

  page.find('.qty-minus').on('click', function () {
    const input = page.find('.qty-input');
    const val = parseInt(input.val(), 10);
    if (val > 1) input.val(val - 1);
  });

  page.find('.qty-plus').on('click', function () {
    const input = page.find('.qty-input');
    input.val(parseInt(input.val(), 10) + 1);
  });

  page.find('.option-btn').on('click', function () {
    $(this).siblings().removeClass('active');
    $(this).addClass('active');
  });
}

/* --- Tabs --- */
function initTabs() {
  $(document).on('click', '.tab-btn', function () {
    const tab = $(this).data('tab');
    const tabsContainer = $(this).closest('.product-tabs');
    $(this).siblings().removeClass('active');
    $(this).addClass('active');
    tabsContainer.find('.tab-panel').removeClass('active');
    $('#tab-' + tab).addClass('active');
  });
}

/* --- Quick View --- */
function initQuickView() {
  if (!$('#quick-view-modal').length) {
    $('body').append(`
      <div class="modal-overlay quick-view-modal" id="quick-view-modal">
        <div class="modal-content-custom">
          <button class="modal-close" aria-label="Close"><i class="bi bi-x-lg"></i></button>
          <div class="quick-view-grid">
            <div class="quick-view-image"><img src="" alt="" id="qv-image"></div>
            <div class="quick-view-info">
              <div class="product-category" id="qv-category"></div>
              <h3 id="qv-name"></h3>
              <div class="product-rating mb-3"><span class="stars" id="qv-stars"></span> <span id="qv-reviews"></span></div>
              <div class="product-info-price mb-3"><span class="current" id="qv-price"></span> <span class="old" id="qv-old-price"></span></div>
              <p id="qv-desc" style="color:var(--text-secondary);margin-bottom:1.5rem"></p>
              <a href="#" id="qv-link" class="btn-primary-custom">View Details</a>
            </div>
          </div>
        </div>
      </div>`);
  }

  $(document).on('click', '.quick-view-btn', function () {
    const card = $(this).closest('.product-card');
    if (!card.length) return;

    const id = card.data('id');
    $('#qv-image').attr('src', card.data('image')).attr('alt', card.data('name'));
    $('#qv-category').text(card.data('category-name'));
    $('#qv-name').text(card.data('name'));
    $('#qv-stars').html(card.find('.product-rating .stars').html());
    $('#qv-reviews').text(`(${card.data('reviews')} reviews)`);
    $('#qv-price').text(card.find('.product-price .current').text());
    $('#qv-old-price').text(card.find('.product-price .old').text() || '');
    $('#qv-desc').text(card.data('short-description'));
    $('#qv-link').attr('href', `product-details.html?id=${id}`);
    $('#quick-view-modal').addClass('show');
  });

  $(document).on('click', '#quick-view-modal .modal-close, #quick-view-modal', function (e) {
    if (e.target === this) $('#quick-view-modal').removeClass('show');
  });
}

/* --- Wishlist --- */
function initWishlist() {
  $(document).on('click', '.wishlist-btn', function () {
    $(this).toggleClass('active');
    const icon = $(this).find('i');
    if ($(this).hasClass('active')) {
      icon.removeClass('bi-heart').addClass('bi-heart-fill');
      showToast('Added to wishlist!', 'success');
    } else {
      icon.removeClass('bi-heart-fill').addClass('bi-heart');
      showToast('Removed from wishlist', 'info');
    }
  });
}

/* --- Contact Form --- */
function initContactForm() {
  $('#contact-form').on('submit', function (e) {
    e.preventDefault();
    let valid = true;

    $(this).find('[required]').each(function () {
      if (!validateField($(this))) valid = false;
    });

    if (valid) {
      showToast('Your message has been sent successfully! We\'ll get back to you soon.', 'success');
      this.reset();
    }
  });

  $('.form-control-custom').on('blur', function () {
    validateField($(this));
  });
}

/* --- Login Form --- */
function initLoginForm() {
  $('.password-toggle').on('click', function () {
    const input = $(this).siblings('input');
    const icon = $(this).find('i');
    if (input.attr('type') === 'password') {
      input.attr('type', 'text');
      icon.removeClass('bi-eye').addClass('bi-eye-slash');
    } else {
      input.attr('type', 'password');
      icon.removeClass('bi-eye-slash').addClass('bi-eye');
    }
  });

  $('#login-form').on('submit', function (e) {
    e.preventDefault();
    let valid = true;

    $(this).find('[required]').each(function () {
      if (!validateField($(this))) valid = false;
    });

    if (valid) {
      $('#login-success-modal').addClass('show');
    }
  });

  $('#login-success-modal .modal-close, #login-success-modal').on('click', function (e) {
    if (e.target === this || $(e.target).closest('.modal-close').length) {
      $('#login-success-modal').removeClass('show');
    }
  });
}

/* --- Register Form --- */
function initRegisterForm() {
  $('#register-form').on('submit', function (e) {
    e.preventDefault();
    let valid = true;

    $(this).find('[required]').each(function () {
      if (!validateField($(this))) valid = false;
    });

    const password = $('#reg-password').val();
    const confirm = $('#reg-confirm').val();
    if (password !== confirm) {
      showFieldError($('#reg-confirm'), 'Passwords do not match');
      valid = false;
    }

    if (!$('#terms-check').is(':checked')) {
      showToast('Please accept the Terms & Conditions', 'error');
      valid = false;
    }

    if (valid) {
      $('#register-success-modal').addClass('show');
    }
  });

  $('#register-success-modal .modal-close, #register-success-modal').on('click', function (e) {
    if (e.target === this || $(e.target).closest('.modal-close').length) {
      $('#register-success-modal').removeClass('show');
    }
  });
}

/* --- Checkout --- */
function initCheckout() {
  $('.payment-option').on('click', function () {
    $('.payment-option').removeClass('active');
    $(this).addClass('active');
    if ($(this).data('method') === 'card') {
      $('.card-fields').addClass('show');
    } else {
      $('.card-fields').removeClass('show');
      $('.card-fields .form-control-custom').each(function () {
        clearFieldError($(this));
      });
    }
  });

  $('#checkout-form').on('submit', function (e) {
    e.preventDefault();
    let valid = true;

    $(this).find('[required]').each(function () {
      if (!validateField($(this))) valid = false;
    });

    const activePayment = $('.payment-option.active').data('method');
    if (activePayment === 'card') {
      ['#card-number', '#card-expiry', '#card-cvv', '#card-name'].forEach(function (sel) {
        const $f = $(sel);
        if (!$f.val().trim()) {
          showFieldError($f, 'This field is required');
          valid = false;
        }
      });
    }

    if (valid) {
      const orderNum = 'NS-' + Date.now().toString().slice(-8);
      $('#order-number-display').text(orderNum);
      $('#order-success-modal').addClass('show');
    }
  });

  $('#order-success-modal .modal-close, #order-success-modal').on('click', function (e) {
    if (e.target === this || $(e.target).closest('.modal-close').length) {
      $('#order-success-modal').removeClass('show');
    }
  });
}

/* --- Form Validation Helpers --- */
function validateField($field) {
  const val = $field.val().trim();
  const type = $field.attr('type');
  const name = $field.attr('name') || $field.attr('id');

  clearFieldError($field);

  if ($field.prop('required') && !val) {
    showFieldError($field, 'This field is required');
    return false;
  }

  if (type === 'email' && val && !isValidEmail(val)) {
    showFieldError($field, 'Please enter a valid email');
    return false;
  }

  if (name && name.includes('phone') && val && val.length < 8) {
    showFieldError($field, 'Please enter a valid phone number');
    return false;
  }

  if ($field.attr('id') === 'reg-password' && val && val.length < 8) {
    showFieldError($field, 'Password must be at least 8 characters');
    return false;
  }

  return true;
}

function showFieldError($field, message) {
  $field.addClass('error');
  let errorEl = $field.siblings('.form-error');
  if (!errorEl.length) {
    errorEl = $('<div class="form-error"></div>');
    $field.after(errorEl);
  }
  errorEl.text(message).addClass('show');
}

function clearFieldError($field) {
  $field.removeClass('error');
  $field.siblings('.form-error').removeClass('show');
}

function isValidEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function debounce(fn, delay) {
  let timer;
  return function () {
    clearTimeout(timer);
    timer = setTimeout(fn, delay);
  };
}

/* --- Render Categories (Homepage) --- */
function renderCategories() {
  const container = $('#categories-grid');
  if (!container.length) return;

  categories.forEach(function (cat) {
    container.append(`
      <a href="products.html?category=${cat.id}" class="category-card fade-in-up">
        <img src="${cat.image}" alt="${cat.name}" loading="lazy">
        <div class="category-card-overlay">
          <div class="cat-icon"><i class="bi ${cat.icon}"></i></div>
          <h5>${cat.name}</h5>
          <span>${cat.count} Products</span>
        </div>
      </a>`);
  });
}

/* --- Render Reviews (Homepage) --- */
function renderHomeReviews() {
  const container = $('#reviews-grid');
  if (!container.length) return;

  customerReviews.forEach(function (r) {
    container.append(`
      <div class="review-card fade-in-up">
        <div class="review-header">
          <img src="${r.avatar}" alt="${r.name}">
          <div>
            <h6>${r.name}</h6>
            <div class="review-date">${r.date}</div>
          </div>
        </div>
        <div class="review-stars">${renderStars(r.rating)}</div>
        <p class="review-text">"${r.review}"</p>
      </div>`);
  });
}

/* --- Render Stats (Homepage) --- */
function renderStats() {
  const container = $('#stats-grid');
  if (!container.length) return;

  stats.forEach(function (s) {
    container.append(`
      <div class="stat-item fade-in-up">
        <h3><span class="stat-counter" data-target="${s.value}" data-suffix="${s.suffix}">0</span></h3>
        <p>${s.label}</p>
      </div>`);
  });
}

/* --- Close modals on Escape --- */
$(document).on('keydown', function (e) {
  if (e.key === 'Escape') {
    $('.modal-overlay.show').removeClass('show');
  }
});
