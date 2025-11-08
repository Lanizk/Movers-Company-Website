<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - KenyaMovers</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">

  
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">KenyaMovers</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
          <li><a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
          <li><a href="/service" class="{{ Request::is('service') ? 'active' : '' }}">Services</a></li>
          <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted d-none d-sm-block" href="quote.html">Request Quote</a>

    </div>
  </header>

 <main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <div class="hero-video-container">
      <video autoplay="" muted="" loop="">
        <source src="assets/img/construction/video-1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="hero-overlay"></div>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row justify-content-center text-center">
        <div class="col-lg-8">
          <div class="hero-content">
            <h1 style="color:#04469F;" data-aos="fade-up" data-aos-delay="200">
              Get in Touch with Us
            </h1>
            <p data-aos="fade-up" data-aos-delay="300">
              Have questions about our moving services? Need a quote? Our team is ready to assist you. Reach out today and let's discuss how we can make your move seamless.
            </p>

            <div class="hero-actions" data-aos="fade-up" data-aos-delay="400">
              <a href="#contact-form" class="btn btn-primary">Send Message</a>
              <a href="tel:+254712345678" class="btn btn-secondary">Call Now</a>
            </div>

            <div class="hero-stats" data-aos="fade-up" data-aos-delay="500">
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="stat-item">
                    <span class="stat-number" data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="2">24</span>
                    <span class="stat-label">7 Support</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="stat-item">
                    <span class="stat-number" data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="2">2</span>
                    <span class="stat-label">Office Locations</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="stat-item">
                    <span class="stat-number" data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="2">1</span>
                    <span class="stat-label">Hour Response Time</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="stat-item">
                    <span class="stat-number" data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="2">100</span>
                    <span class="stat-label">% Customer Satisfaction</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section><!-- /Hero Section -->


    <!-- About Section -->
<section id="about" class="about section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row align-items-center">

      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="200">
        <div class="content">
          <h2 class="section-heading mb-4">We're Here to Help You Move</h2>
          <p class="lead-text mb-4">
            Whether you need a quote, have questions about our services, or want to schedule a move, our friendly team is ready to assist you every step of the way.
          </p>
          <p class="description-text mb-5">
            Contact us today via phone, email, or our online form. We respond quickly to all inquiries and provide detailed information to help you make informed decisions about your relocation. Our customer service team is available 24/7 to address your concerns and ensure your moving experience is smooth and worry-free.
          </p>

          <div class="stats-grid">
            <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
              <div class="stat-number">24/7</div>
              <div class="stat-label">Available Support</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="350">
              <div class="stat-number">1 Hour</div>
              <div class="stat-label">Response Time</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
              <div class="stat-number">Free</div>
              <div class="stat-label">Consultations</div>
            </div>
          </div>

          <div class="cta-section" data-aos="fade-up" data-aos-delay="450">
            <a href="#services" class="cta-link">
              View Contact Options
              <i class="bi bi-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="200">
        <div class="image-section">
          <div class="main-image">
            <img src="assets/img/construction/project-4.webp" alt="Contact KenyaMovers" class="img-fluid">
          </div>
          <div class="floating-badge" data-aos="zoom-in" data-aos-delay="500">
            <div class="badge-content">
              <i class="bi bi-headset"></i>
              <div class="badge-text">
                <span class="badge-title">24/7 Support</span>
                <span class="badge-subtitle">Always Available</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- /About Section -->


   <!-- Services Section -->
<section id="services" class="services section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact Information</h2>
    <p>Multiple ways to reach us - choose what works best for you</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="services-grid">

      <div class="service-item" data-aos="fade-up" data-aos-delay="150">
        <div class="service-number">01</div>
        <div class="service-icon">
          <i class="bi bi-telephone"></i>
        </div>
        <h3>Phone</h3>
        <p>Call us anytime for immediate assistance. Our team is available 24/7 to answer your questions and schedule moves.</p>
        <a href="tel:+254712345678" class="service-cta">
          <span>+254 712 345 678</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="200">
        <div class="service-number">02</div>
        <div class="service-icon">
          <i class="bi bi-envelope"></i>
        </div>
        <h3>Email</h3>
        <p>Send us an email with your inquiry or quote request. We typically respond within one hour during business hours.</p>
        <a href="mailto:info@kenyamovers.co.ke" class="service-cta">
          <span>info@kenyamovers.co.ke</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <div class="service-item featured" data-aos="fade-up" data-aos-delay="250">
        <div class="featured-badge">Main Office</div>
        <div class="service-number">03</div>
        <div class="service-icon">
          <i class="bi bi-geo-alt"></i>
        </div>
        <h3>Nairobi Office</h3>
        <p>Visit our main office for in-person consultations. Open Monday-Saturday, 8:00 AM - 6:00 PM.</p>
        <a href="#" class="service-cta">
          <span>Mombasa Road, Nairobi</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="300">
        <div class="service-number">04</div>
        <div class="service-icon">
          <i class="bi bi-geo-alt"></i>
        </div>
        <h3>Mombasa Office</h3>
        <p>Our coastal branch serving Mombasa and surrounding areas. Full-service moving support available.</p>
        <a href="#" class="service-cta">
          <span>Nyerere Avenue, Mombasa</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="350">
        <div class="service-number">05</div>
        <div class="service-icon">
          <i class="bi bi-whatsapp"></i>
        </div>
        <h3>WhatsApp</h3>
        <p>Message us on WhatsApp for quick responses and easy communication. Share photos and get instant quotes.</p>
        <a href="https://wa.me/254712345678" class="service-cta">
          <span>Chat on WhatsApp</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="400">
        <div class="service-number">06</div>
        <div class="service-icon">
          <i class="bi bi-clock"></i>
        </div>
        <h3>Business Hours</h3>
        <p>Mon-Fri: 7:00 AM - 7:00 PM | Sat: 8:00 AM - 6:00 PM | Sun: 9:00 AM - 5:00 PM | 24/7 Emergency Support</p>
        <a href="#" class="service-cta">
          <span>View Schedule</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

    </div>

  </div>

</section><!-- /Services Section -->



   <!-- Our Moves Section -->
<section id="our-moves" class="services-alt section light-background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-5">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item">
          <div class="service-visual">
            <img src="assets/img/construction/project-1.webp" alt="Request Quote" class="img-fluid">
          </div>
          <div class="service-content">
            <h3>Request a Free Quote</h3>
            <p>Get a detailed, no-obligation quote for your move. Fill out our form or call us directly to discuss your requirements and receive pricing.</p>
            <a href="quote.html" class="service-link">
              <span>Get Quote</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div><!-- End Move 1 -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        <div class="service-item">
          <div class="service-visual">
            <img src="assets/img/construction/project-1.webp" alt="Schedule Consultation" class="img-fluid">
          </div>
          <div class="service-content">
            <h3>Schedule a Consultation</h3>
            <p>Book a free in-home or virtual consultation. Our team will assess your needs and provide personalized moving solutions.</p>
            <a href="#" class="service-link">
              <span>Book Now</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div><!-- End Move 2 -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item">
          <div class="service-visual">
            <img src="assets/img/construction/project-3.webp" alt="Emergency Moving" class="img-fluid">
          </div>
          <div class="service-content">
            <h3>Emergency Moving Services</h3>
            <p>Need to move urgently? Our 24/7 emergency service ensures you can relocate quickly with the same quality and care.</p>
            <a href="tel:+254712345678" class="service-link">
              <span>Call Emergency Line</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div><!-- End Move 3 -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="350">
        <div class="service-item">
          <div class="service-visual">
            <img src="assets/img/construction/project-4.webp" alt="Customer Support" class="img-fluid">
          </div>
          <div class="service-content">
            <h3>Customer Support</h3>
            <p>Have questions during your move? Our support team is available round the clock to assist you with any concerns or updates.</p>
            <a href="mailto:support@kenyamovers.co.ke" class="service-link">
              <span>Contact Support</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div><!-- End Move 4 -->

    </div>

    <div class="row mt-5" data-aos="fade-up" data-aos-delay="400">
      <div class="col-lg-12 text-center">
        <div class="cta-section">
          <h4>Prefer to fill out a form?</h4>
          <p>Use our contact form below to send us a detailed message. We'll respond within one hour during business hours.</p>
          <a href="#contact-form" class="btn-primary">
            <span>Fill Contact Form</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Our Moves Section -->


<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 id="contact-form">Send Us a Message</h2>
    <p>Fill out the form below and we'll get back to you as soon as possible</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-6">
              <input type="text" class="form-control" name="phone" placeholder="Your Phone" required="">
            </div>

            <div class="col-md-6">
              <select class="form-control" name="service" required="">
                <option value="">Select Service</option>
                <option value="residential">Residential Moving</option>
                <option value="commercial">Commercial Moving</option>
                <option value="packing">Packing Services</option>
                <option value="specialty">Specialty Items</option>
                <option value="long-distance">Long Distance</option>
                <option value="storage">Storage Solutions</option>
                <option value="other">Other</option>
              </select>
            </div>

            <div class="col-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>

          </div>
        </form>
      </div>
    </div>

  </div>

</section><!-- /Testimonials Section -->



    <!-- Certifications Section -->
<section id="certifications" class="certifications section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Visit Our Offices</h2>
    <p>Find us at these convenient locations across Kenya</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5 mt-4">

      <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="certification-item">
          <div class="certification-badge">
            <img src="assets/img/construction/badge-1.webp" alt="Nairobi Office" class="img-fluid">
          </div>
          <h4>Nairobi Main Office</h4>
          <p><strong>Address:</strong> Mombasa Road, Industrial Area, Nairobi</p>
          <p><strong>Phone:</strong> +254 712 345 678</p>
          <p><strong>Email:</strong> nairobi@kenyamovers.co.ke</p>
          <p><strong>Hours:</strong> Mon-Sat: 8:00 AM - 6:00 PM</p>
        </div>
      </div>

      <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="certification-item">
          <div class="certification-badge">
            <img src="assets/img/construction/badge-2.webp" alt="Mombasa Office" class="img-fluid">
          </div>
          <h4>Mombasa Branch</h4>
          <p><strong>Address:</strong> Nyerere Avenue, Mombasa</p>
          <p><strong>Phone:</strong> +254 722 345 678</p>
          <p><strong>Email:</strong> mombasa@kenyamovers.co.ke</p>
          <p><strong>Hours:</strong> Mon-Sat: 8:00 AM - 6:00 PM</p>
        </div>
      </div>

    </div>

    <div class="row mt-5" data-aos="fade-up" data-aos-delay="500">
      <div class="col-12">
        <div class="certification-stats">
          <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="stat-item">
                <h3>2</h3>
                <p>Office Locations</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="stat-item">
                <h3>24/7</h3>
                <p>Support Available</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="stat-item">
                <h3>1 Hr</h3>
                <p>Response Time</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="stat-item">
                <h3>100%</h3>
                <p>Customer Satisfaction</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Certifications Section -->


    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Quick answers to common questions about contacting us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6">
            <div class="team-member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/construction/team-1.webp" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>How quickly will I get a response?</h4>
                <span>Response Times</span>
                <p>We respond to all inquiries within one hour during business hours. Emergency calls are answered immediately 24/7.</p>
                <div class="social">
                  <a href=""><i class="bi bi-clock"></i></a>
                  <a href=""><i class="bi bi-telephone"></i></a>
                  <a href=""><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6">
            <div class="team-member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/construction/team-3.webp" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Can I get a quote online?</h4>
                <span>Online Quotes</span>
                <p>Yes! Fill out our contact form with your moving details, and we'll send you a detailed quote within one hour.</p>
                <div class="social">
                  <a href=""><i class="bi bi-file-text"></i></a>
                  <a href=""><i class="bi bi-calculator"></i></a>
                  <a href=""><i class="bi bi-check-circle"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section light-background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row justify-content-center">

      <div class="col-lg-10">
        <div class="cta-header text-center" data-aos="fade-up" data-aos-delay="200">
          <h2>Ready to Plan Your Move?</h2>
          <p>Don't wait! Contact us today to schedule your move or get a free quote. Our team is standing by to make your relocation smooth and stress-free.</p>
        </div>
      </div>

    </div>

    <div class="cta-main" data-aos="fade-up" data-aos-delay="300">
      <div class="row align-items-center g-5">

        <div class="col-lg-6">
          <div class="achievements-grid">
            <div class="achievement-item" data-aos="zoom-in" data-aos-delay="400">
              <div class="achievement-icon">
                <i class="bi bi-telephone"></i>
              </div>
              <div class="achievement-info">
                <h3>24/7</h3>
                <span>Phone Support</span>
              </div>
            </div>

            <div class="achievement-item" data-aos="zoom-in" data-aos-delay="450">
              <div class="achievement-icon">
                <i class="bi bi-clock-history"></i>
              </div>
              <div class="achievement-info">
                <h3>1 Hour</h3>
                <span>Response Time</span>
              </div>
            </div>

            <div class="achievement-item" data-aos="zoom-in" data-aos-delay="500">
              <div class="achievement-icon">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="achievement-info">
                <h3>2</h3>
                <span>Office Locations</span>
              </div>
            </div>

            <div class="achievement-item" data-aos="zoom-in" data-aos-delay="550">
              <div class="achievement-icon">
                <i class="bi bi-star-fill"></i>
              </div>
              <div class="achievement-info">
                <h3>100%</h3>
                <span>Satisfaction</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="action-panel" data-aos="fade-left" data-aos-delay="350">

            <div class="panel-content">
              <h3>Contact Us Today</h3>
              <p>Let's discuss your moving needs and create a customized plan. Our team is ready to provide professional service.</p>

              <div class="action-buttons">
                <a href="quote.html" class="btn-primary">
                  <span>Request Quote</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
                <a href="tel:+254712345678" class="btn-secondary">
                  <span>Call Now</span>
                  <i class="bi bi-telephone"></i>
                </a>
              </div>
            </div>

            <div class="contact-quick">
              <div class="contact-row">
                <i class="bi bi-telephone-fill"></i>
                <div class="contact-details">
                  <span class="contact-label">Direct Line</span>
                  <span class="contact-value">+254 712 345 678</span>
                </div>
              </div>

              <div class="contact-row">
                <i class="bi bi-envelope-fill"></i>
                <div class="contact-details">
                  <span class="contact-label">Email Us</span>
                  <span class="contact-value">info@kenyamovers.co.ke</span>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>

</section><!-- /Call To Action Section -->


  </main>

 <footer id="footer" class="footer dark-background">

  <div class="container">
    <div class="row gy-5">

      <div class="col-lg-4">
        <div class="footer-brand">
          <a href="/" class="logo d-flex align-items-center mb-3">
            <span class="sitename">KenyaMovers</span>
          </a>
          <p class="tagline">Making relocations seamless, safe, and stress-free with professional moving services.</p>

          <div class="social-links mt-4">
            <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="footer-links-grid">
          <div class="row">
            <div class="col-6 col-md-4">
              <h5>Company</h5>
              <ul class="list-unstyled">
                <li><a href="/about">About Us</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">News & Updates</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-4">
              <h5>Services</h5>
              <ul class="list-unstyled">
                <li><a href="/service">Residential Moves</a></li>
                <li><a href="/service">Commercial Moves</a></li>
                <li><a href="/service">Packing & Storage</a></li>
                <li><a href="/service">Long-Distance Relocation</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-4">
              <h5>Support</h5>
              <ul class="list-unstyled">
                <li><a href="#">Help Center</a></li>
                <li><a href="/contact">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="footer-cta">
          <h5>Let's Connect</h5>
          <a href="/contact" class="btn btn-outline">Get in Touch</a>
        </div>
      </div>

    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="footer-bottom-content">
            <p class="mb-0">© <span class="sitename">KenyaMovers</span>. All rights reserved.</p>
            <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>