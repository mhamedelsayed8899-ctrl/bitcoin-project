/**
 * Null Shop - Shared Utilities
 * Product data is hardcoded in HTML pages.
 */

const categories = [
  { id: 'smartphones', name: 'Smartphones', icon: 'bi-phone', count: 48, image: 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=600&h=400&fit=crop&q=80' },
  { id: 'laptops', name: 'Laptops', icon: 'bi-laptop', count: 36, image: 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=600&h=400&fit=crop&q=80' },
  { id: 'headphones', name: 'Headphones', icon: 'bi-headphones', count: 52, image: 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600&h=400&fit=crop&q=80' },
  { id: 'smart-watches', name: 'Smart Watches', icon: 'bi-smartwatch', count: 28, image: 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=600&h=400&fit=crop&q=80' },
  { id: 'gaming', name: 'Gaming', icon: 'bi-controller', count: 64, image: 'https://images.unsplash.com/photo-1542751371-adc38448a05e?w=600&h=400&fit=crop&q=80' },
  { id: 'accessories', name: 'Accessories', icon: 'bi-usb-plug', count: 89, image: 'https://images.unsplash.com/photo-1625842268584-8f3296236761?w=600&h=400&fit=crop&q=80' }
];

const customerReviews = [
  {
    id: 1,
    name: 'Sarah Mitchell',
    avatar: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&q=80',
    rating: 5,
    review: 'Absolutely love my Nova X Pro! The camera quality is incredible and the battery lasts all day. Null Shop delivered faster than expected.',
    date: 'March 12, 2026',
    product: 'Nova X Pro'
  },
  {
    id: 2,
    name: 'James Chen',
    avatar: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&q=80',
    rating: 5,
    review: 'The SoundWave Elite headphones are the best I\'ve ever owned. The noise cancellation is phenomenal and the sound quality is studio-grade.',
    date: 'February 28, 2026',
    product: 'SoundWave Elite'
  },
  {
    id: 3,
    name: 'Emily Rodriguez',
    avatar: 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&q=80',
    rating: 4,
    review: 'Great selection of tech products and competitive prices. My UltraBook Pro 16 arrived perfectly packaged. Customer support was very helpful.',
    date: 'February 15, 2026',
    product: 'UltraBook Pro 16'
  },
  {
    id: 4,
    name: 'Michael Thompson',
    avatar: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&q=80',
    rating: 5,
    review: 'Null Shop has become my go-to for all tech purchases. Premium products, fast shipping, and the website experience is top-notch.',
    date: 'January 30, 2026',
    product: 'GameForce RTX Station'
  }
];

const stats = [
  { value: 25000, suffix: '+', label: 'Happy Customers' },
  { value: 500, suffix: '+', label: 'Products' },
  { value: 98, suffix: '%', label: 'Positive Reviews' },
  { value: 24, suffix: '/7', label: 'Customer Support' }
];

const contactInfo = {
  email: 'support@nullshop.com',
  phone: '+1 (555) 123-4567',
  address: '742 Innovation Drive, Tech Valley, CA 94025',
  hours: 'Mon - Fri: 9:00 AM - 8:00 PM\nSat - Sun: 10:00 AM - 6:00 PM'
};

function formatPrice(price) {
  return '$' + price.toLocaleString('en-US', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
}

function calculateDiscount(price, oldPrice) {
  if (!oldPrice || oldPrice <= price) return 0;
  return Math.round(((oldPrice - price) / oldPrice) * 100);
}

function renderStars(rating) {
  let stars = '';
  const full = Math.floor(rating);
  const half = rating % 1 >= 0.5;
  for (let i = 0; i < full; i++) stars += '<i class="bi bi-star-fill"></i>';
  if (half) stars += '<i class="bi bi-star-half"></i>';
  for (let i = full + (half ? 1 : 0); i < 5; i++) stars += '<i class="bi bi-star"></i>';
  return stars;
}
