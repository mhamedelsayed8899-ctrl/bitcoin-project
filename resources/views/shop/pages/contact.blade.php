
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
        <span>Contact</span>
      </nav>
      <h1>Contact Us</h1>
      <p class="section-subtitle" style="margin:0">Have a question? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
    </div>
  </div>

  <!-- Contact Content -->
  <section style="padding-top:3rem">
    <div class="container-custom">
      <!-- Contact Cards -->
      <div class="contact-cards">
        <div class="contact-card fade-in-up">
          <div class="contact-card-icon"><i class="bi bi-envelope"></i></div>
          <h5>Email Us</h5>
          <p>support@nullshop.com<br>sales@nullshop.com</p>
        </div>
        <div class="contact-card fade-in-up">
          <div class="contact-card-icon"><i class="bi bi-telephone"></i></div>
          <h5>Call Us</h5>
          <p>+1 (555) 123-4567<br>+1 (555) 987-6543</p>
        </div>
        <div class="contact-card fade-in-up">
          <div class="contact-card-icon"><i class="bi bi-geo-alt"></i></div>
          <h5>Visit Us</h5>
          <p>742 Innovation Drive<br>Tech Valley, CA 94025</p>
        </div>
        <div class="contact-card fade-in-up">
          <div class="contact-card-icon"><i class="bi bi-clock"></i></div>
          <h5>Working Hours</h5>
          <p>Mon - Fri: 9:00 AM - 8:00 PM<br>Sat - Sun: 10:00 AM - 6:00 PM</p>
        </div>
      </div>

      <!-- Contact Form & Map -->
      <div class="contact-layout">
        <div class="contact-form-card">
          <h3>Send Us a Message</h3>
          <p>Fill out the form below and our team will get back to you within 24 hours.</p>

          <form action="" id="contact-form1">
            <div class="form-row">
              <div class="form-group">
                <label for="contact-name">Full Name</label>
                <input type="text" class="form-control-custom name" id="contact-name" name="name" placeholder="John Doe" >
              </div>
              <div class="form-group">
                <label for="contact-email">Email Address</label>
                <input type="email" class="form-control-custom email" id="contact-email" name="email" placeholder="john@example.com">
              </div>
            </div>
            <div class="form-group">
              <label for="contact-subject">phone</label>
              <input type="text" class="form-control-custom phone"  id="contact-subject" name="subject" placeholder=" Enter Your Number" >
            </div>
            <div class="form-group">
              <label for="contact-message">Message</label>
              <textarea class="form-control-custom message" id="contact-message" name="message" placeholder="Write your message here..." ></textarea>
            </div>
            <button type="submit" class="btn-primary-custom">Send Message <i class="bi bi-send"></i></button>
          </form>
        </div>

        <div class="map-visual">
          <div class="map-visual-inner">
            <div class="map-pin">
              <i class="bi bi-geo-alt-fill d-block"></i>
              <h5>Null Shop HQ</h5>
              <p>742 Innovation Drive<br>Tech Valley, CA 94025</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

















<x-footer/>

