

  <!-- Footer -->
  <footer class="footer">
    <div class="container-custom">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="index.html" class="logo">
            <div class="logo-icon"><i class="bi bi-lightning-charge-fill"></i></div>
            <span class="logo-text">Null <span>Shop</span></span>
          </a>
          <p>Premium technology e-commerce for those who demand the best. Discover cutting-edge products with exceptional service.</p>
          <div class="footer-social">
            <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
        <div class="footer-col">
          <h6>Quick Links</h6>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="register.html">Register</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h6>Customer Service</h6>
          <ul>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Shipping Info</a></li>
            <li><a href="#">Returns & Exchanges</a></li>
            <li><a href="#">Track Order</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h6>Categories</h6>
          <ul>
            <li><a href="products.html?category=smartphones">Smartphones</a></li>
            <li><a href="products.html?category=laptops">Laptops</a></li>
            <li><a href="products.html?category=headphones">Headphones</a></li>
            <li><a href="products.html?category=gaming">Gaming</a></li>
            <li><a href="products.html?category=accessories">Accessories</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h6>Contact Us</h6>
          <div class="footer-contact-item"><i class="bi bi-envelope"></i><span>support@nullshop.com</span></div>
          <div class="footer-contact-item"><i class="bi bi-telephone"></i><span>+1 (555) 123-4567</span></div>
          <div class="footer-contact-item"><i class="bi bi-geo-alt"></i><span>742 Innovation Drive, Tech Valley, CA 94025</span></div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 Null Shop. All rights reserved.</p>
        <div class="footer-payments">
          <i class="bi bi-credit-card-2-front"></i>
          <i class="bi bi-paypal"></i>
          <i class="bi bi-apple"></i>
          <i class="bi bi-google"></i>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('shop-assets')}}/js/data.js"></script>
  <script src="{{asset('shop-assets')}}/js/main.js"></script>
  <script>
    $("#contact-form1").submit(function(e){
        e.preventDefault();
        var name = $(".name").val() ;
        var email = $(".email").val() ;
        var phone = $(".phone").val() ;
        var message = $(".message").val() ;
        var _token = "{{csrf_token()}}" ;

        if(! name ){
            $(".name").attr("placeholder" , "Plz enter ur name") ;
        }
        if(! email ){
            $(".email").attr("placeholder" , "Plz enter ur email") ;
        }
        if(! phone ){
            $(".phone").attr("placeholder" , "Plz enter ur phone") ;
        }
        if(! message ){
            $(".message").attr("placeholder" , "Plz enter ur message") ;
        }

        if(name && email && phone && message){

                $.ajax({
                    method : "post" ,
                    url : "{{route('shop.message.store')}}" ,
                    data : {
                        _token ,
                        name ,
                        email ,
                        phone ,
                        message ,
                    } ,
                    success : function(x){
                        console.log(x) ;
                     showToast('Your message has been sent successfully! We\'ll get back to you soon.', 'success');

                     $('.name').val("");
                     $('.email').val("");
                     $('.phone').val("");
                     $('.message').val("");

                    } ,
                    error : function(y){

                        console.log(y) ;
                    }
                })
        }
    })
  </script>

  <script>

        $('.add_cart').click(function(){

            var product_id = $(this).attr('id_attr') ;
            var _token = "{{csrf_token()}}" ;
            // console.log(product_id) ;
            $.ajax({
                method: "POST" ,
                url : "{{route('add.to.cart')}}" ,
                data : {
                    product_id  ,
                    _token ,
                } ,
                success : function(x) {
                    $('.cart-wrapper').load(location.href+".cart-wrapper" , function(){

                    })

                } ,
                error : function(y) {
                    console.log(y) ;


                } ,
            })
        })


  </script>
</body>
</html>
