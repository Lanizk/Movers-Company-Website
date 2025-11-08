<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Munene and Sons</title>
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

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Munene and Sons</h1>
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
        <source src="assets/img/movers/video-1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="hero-overlay"></div>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row justify-content-center text-center">
        <div class="col-lg-8">
          <div class="hero-content">
            <h1 style="color:#04469F;" data-aos="fade-up" data-aos-delay="200">
              Moving Made Easy with Professional Relocation Services
            </h1>
            <p data-aos="fade-up" data-aos-delay="300">
              We provide reliable and efficient moving solutions for homes and businesses. From packing to transportation, our experienced team ensures your belongings arrive safely and on time.
            </p>

            <div class="hero-actions" data-aos="fade-up" data-aos-delay="400">
              <a href="quote.htm" class="btn btn-primary">Request a Quote</a>
              <a href="services.html" class="btn btn-secondary">View Our Services</a>
            </div>

            <div class="hero-stats" data-aos="fade-up" data-aos-delay="500">
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="stat-item">
                    <span class="stat-number" data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="2">500</span>
                    <span class="stat-label">Moves Completed</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="stat-item">
                    <span class="stat-number" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2">10</span>
                    <span class="stat-label">Years Experience</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="stat-item">
                    <span class="stat-number" data-purecounter-start="0" data-purecounter-end="99" data-purecounter-duration="2">99</span>
                    <span class="stat-label">% Customer Satisfaction</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="stat-item">
                    <span class="stat-number" data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="2">30</span>
                    <span class="stat-label">Professional Movers</span>
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
          <h2 class="section-heading mb-4">Moving with Care, Driven by Reliability</h2>
          <p class="lead-text mb-4">
            We specialize in making your move stress-free and efficient. Whether it's your home, office, or specialty items, our expert team handles every step with precision and care.
          </p>
          <p class="description-text mb-5">
            From packing fragile items to transporting large furniture safely, our professional movers ensure that every belonging reaches its destination intact and on schedule. We combine experience, modern equipment, and dedication to provide seamless relocation solutions for our clients.
          </p>

          <div class="stats-grid">
            <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
              <div class="stat-number">10+</div>
              <div class="stat-label">Years Experience</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="350">
              <div class="stat-number">500+</div>
              <div class="stat-label">Moves Completed</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
              <div class="stat-number">99%</div>
              <div class="stat-label">Customer Satisfaction</div>
            </div>
          </div>

          <div class="cta-section" data-aos="fade-up" data-aos-delay="450">
            <a href="#services" class="cta-link">
              Explore Our Services
              <i class="bi bi-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="200">
        <div class="image-section">
          <div class="main-image">
            <img src="assets/img/movers/img-1.jpg" alt="Moving company showcase" class="img-fluid">
          </div>
          <div class="floating-badge" data-aos="zoom-in" data-aos-delay="500">
            <div class="badge-content">
              <i class="bi bi-award"></i>
              <div class="badge-text">
                <span class="badge-title">Trusted Movers</span>
                <span class="badge-subtitle">Since 2014</span>
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
    <h2>Our Services</h2>
    <p>Reliable and efficient moving solutions for homes, offices, and specialty items</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="services-grid">

      <div class="service-item" data-aos="fade-up" data-aos-delay="150">
        <div class="service-number">01</div>
        <div class="service-icon">
          <i class="bi bi-building"></i>
        </div>
        <h3>Residential Moving</h3>
        <p>Safe and efficient relocation services for your home, including packing, transport, and unpacking with care.</p>
        <a href="/service" class="service-cta">
          <span>Explore Service</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="200">
        <div class="service-number">02</div>
        <div class="service-icon">
          <i class="bi bi-building"></i>
        </div>
        <h3>Commercial Moving</h3>
        <p>Professional relocation solutions for offices and businesses, ensuring minimal downtime and secure handling of equipment.</p>
        <a href="/service" class="service-cta">
          <span>Explore Service</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <div class="service-item featured" data-aos="fade-up" data-aos-delay="250">
        <div class="featured-badge">Premium</div>
        <div class="service-number">03</div>
        <div class="service-icon">
          <i class="bi bi-gear-wide-connected"></i>
        </div>
        <h3>Packing & Unpacking Services</h3>
        <p>Comprehensive packing and unpacking solutions, ensuring your belongings are protected during transit.</p>
        <a href="quote.html" class="service-cta">
          <span>Get Quote</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="300">
        <div class="service-number">04</div>
        <div class="service-icon">
          <i class="bi bi-clipboard2-check"></i>
        </div>
        <h3>Specialty Item Moving</h3>
        <p>Safe handling and transport of delicate or bulky items such as pianos, artwork, or antiques.</p>
        <a href="/service" class="service-cta">
          <span>Explore Service</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="350">
        <div class="service-number">05</div>
        <div class="service-icon">
          <i class="bi bi-truck"></i>
        </div>
        <h3>Long Distance Moving</h3>
        <p>Reliable interstate or long-distance moving services, ensuring timely delivery and full accountability for your belongings.</p>
        <a href="/service" class="service-cta">
          <span>Explore Service</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="400">
        <div class="service-number">06</div>
        <div class="service-icon">
          <i class="bi bi-house-check"></i>
        </div>
        <h3>Storage Solutions</h3>
        <p>Secure short-term or long-term storage options for your items, with professional inventory and climate-controlled facilities.</p>
        <a href="/service" class="service-cta">
          <span>Explore Service</span>
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
            <img src="assets/img/movers/residential-move.jpg" alt="Residential Move" class="img-fluid">
          </div>
          <div class="service-content">
            <h3>Residential Move</h3>
            <p>Efficient relocation of a family home, including packing, transport, and careful unpacking to ensure all belongings are safe.</p>
            <a href="/service" class="service-link">
              <span>View Services</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div><!-- End Move 1 -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        <div class="service-item">
          <div class="service-visual">
            <img src="assets/img/movers/office-img.jpg" alt="Office Relocation" class="img-fluid">
          </div>
          <div class="service-content">
            <h3>Office Relocation</h3>
            <p>Seamless moving of office spaces, including furniture, electronics, and documents, with minimal downtime for your business.</p>
             <a href="/service" class="service-link">
              <span>View Services</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div><!-- End Move 2 -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item">
          <div class="service-visual">
            <img src="assets/img/movers/speacial-item.jpg" alt="Specialty Item Move" class="img-fluid">
          </div>
          <div class="service-content">
            <h3>Specialty Item Move</h3>
            <p>Careful handling and relocation of delicate or bulky items like pianos, artworks, and antiques for full protection during transit.</p>
             <a href="/service" class="service-link">
              <span>View Services</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div><!-- End Move 3 -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="350">
        <div class="service-item">
          <div class="service-visual">
            <img src="assets/img/movers/long-dist.jpg" alt="Long Distance Move" class="img-fluid">
          </div>
          <div class="service-content">
            <h3>Long Distance Move</h3>
            <p>Reliable interstate relocation, ensuring timely delivery of all belongings with professional handling every step of the way.</p>
            <a href="/service" class="service-link">
              <span>View Services</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div><!-- End Move 4 -->

    </div>

    <div class="row mt-5" data-aos="fade-up" data-aos-delay="400">
      <div class="col-lg-12 text-center">
        <div class="cta-section">
          <h4>Ready to move your home or office?</h4>
          <p>Contact our team to plan your move and get a personalized quote for safe and efficient relocation.</p>
          <a href="quote.html" class="btn-primary">
            <span>Get Free Quote</span>
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
    <h2>Testimonials</h2>
    <p>Hear what our satisfied clients have to say about our moving services</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="testimonial-masonry">

      <div class="testimonial-item" data-aos="fade-up">
        <div class="testimonial-content">
          <div class="quote-pattern">
            <i class="bi bi-quote"></i>
          </div>
          <p>The team handled our home move professionally. Every item was packed and transported with care, making the process stress-free.</p>
          <div class="client-info">
            <div class="client-image bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:60px; height:60px; font-weight:bold;">
              A.M.
            </div>
            <div class="client-details">
              <h3>Amina Mwangi</h3>
              <span class="position">Homeowner</span>
            </div>
          </div>
        </div>
      </div>

      <div class="testimonial-item highlight" data-aos="fade-up" data-aos-delay="100">
        <div class="testimonial-content">
          <div class="quote-pattern">
            <i class="bi bi-quote"></i>
          </div>
          <p>Our office relocation was seamless. The movers were punctual and handled all furniture and electronics without any damage.</p>
          <div class="client-info">
            <div class="client-image bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:60px; height:60px; font-weight:bold;">
              J.O.
            </div>
            <div class="client-details">
              <h3>James Ochieng</h3>
              <span class="position">Business Owner</span>
            </div>
          </div>
        </div>
      </div>

      <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
        <div class="testimonial-content">
          <div class="quote-pattern">
            <i class="bi bi-quote"></i>
          </div>
          <p>The movers treated our antiques and artwork with extreme care. Everything arrived intact, exactly as packed, which was impressive.</p>
          <div class="client-info">
            <div class="client-image bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:60px; height:60px; font-weight:bold;">
              F.W.
            </div>
            <div class="client-details">
              <h3>Faith Wanjiru</h3>
              <span class="position">Art Collector</span>
            </div>
          </div>
        </div>
      </div>

      <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
        <div class="testimonial-content">
          <div class="quote-pattern">
            <i class="bi bi-quote"></i>
          </div>
          <p>Our long-distance move went perfectly. The team ensured that all belongings arrived on time and in perfect condition.</p>
          <div class="client-info">
            <div class="client-image bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:60px; height:60px; font-weight:bold;">
              P.N.
            </div>
            <div class="client-details">
              <h3>Peter Njoroge</h3>
              <span class="position">Family Head</span>
            </div>
          </div>
        </div>
      </div>

      <div class="testimonial-item highlight" data-aos="fade-up" data-aos-delay="400">
        <div class="testimonial-content">
          <div class="quote-pattern">
            <i class="bi bi-quote"></i>
          </div>
          <p>Excellent service! Movers were professional and careful. Every item was delivered safely, and the process was stress-free.</p>
          <div class="client-info">
            <div class="client-image bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:60px; height:60px; font-weight:bold;">
              L.C.
            </div>
            <div class="client-details">
              <h3>Lilian Chebet</h3>
              <span class="position">Homeowner</span>
            </div>
          </div>
        </div>
      </div>

      <div class="testimonial-item" data-aos="fade-up" data-aos-delay="500">
        <div class="testimonial-content">
          <div class="quote-pattern">
            <i class="bi bi-quote"></i>
          </div>
          <p>Professional movers who made our relocation smooth and efficient. All items were packed, transported, and delivered safely.</p>
          <div class="client-info">
            <div class="client-image bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:60px; height:60px; font-weight:bold;">
              M.K.
            </div>
            <div class="client-details">
              <h3>Michael Kiprono</h3>
              <span class="position">Office Manager</span>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- /Testimonials Section -->



    <!-- Certifications Section -->
<section id="certifications" class="certifications section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Certified &amp; Trusted</h2>
    <p>Our movers are certified professionals ensuring safe and reliable relocation services</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5 mt-4">

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="certification-item">
          <div class="certification-badge">
            <img src="assets/img/movers/kebs.png" alt="KEBS Certification" class="img-fluid">
          </div>
          <h4>KEBS Certified</h4>
          <p>Certified by the Kenya Bureau of Standards to ensure professional and high-quality moving and handling services.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="certification-item">
          <div class="certification-badge">
            <img src="assets/img/movers/nita.png" alt="NITA Certification" class="img-fluid">
          </div>
          <h4>NITA Certified</h4>
          <p>Registered with the National Industrial Training Authority, demonstrating our skilled and trained moving personnel.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="certification-item">
          <div class="certification-badge">
            <img src="assets/img/movers/ntsa.jpg" alt="NTSA License" class="img-fluid">
          </div>
          <h4>NTSA Licensed</h4>
          <p>Vehicles and logistics fully licensed by the National Transport and Safety Authority for safe and legal relocations.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="certification-item">
          <div class="certification-badge">
            <img src="assets/img/construction/badge-4.webp" alt="ISO Certification" class="img-fluid">
          </div>
          <h4>ISO 9001</h4>
          <p>Internationally recognized quality management certification ensuring consistency, professionalism, and customer satisfaction.</p>
        </div>
      </div>

    </div>

    <div class="row mt-5" data-aos="fade-up" data-aos-delay="500">
      <div class="col-12">
        <div class="certification-stats">
          <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="stat-item">
                <h3>10+</h3>
                <p>Years in Service</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="stat-item">
                <h3>500+</h3>
                <p>Moves Completed</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="stat-item">
                <h3>2</h3>
                <p>Industry Awards</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="stat-item">
                <h3>100%</h3>
                <p>Damage-Free Moves</p>
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
        <h2>Team</h2>
        <p>Meet the dedicated team that works together to bring your vision to life</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6">
            <div class="team-member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/construction/team-1.webp" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Munene</h4>
                <span>CEO</span>
                <p>Provides strategic leadership and drives the company’s vision with innovation and integrity.</p>

                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                  
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
                <h4>Ben Rodriguez</h4>
                <span>Site Supervisor</span>
                <p>Vivamus in diam turpis. In condimentum maximus tristique. Maecenas non laoreet odio.</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
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
          <h2>Move Smarter, Move Safer</h2>
          <p>Our professional moving team ensures your belongings are handled with care. From local relocations to long-distance moves, we deliver excellence, efficiency, and peace of mind on every move.</p>
        </div>
      </div>

    </div>

    <div class="cta-main" data-aos="fade-up" data-aos-delay="300">
      <div class="row align-items-center g-5">

        <div class="col-lg-6">
          <div class="achievements-grid">
            <div class="achievement-item" data-aos="zoom-in" data-aos-delay="400">
              <div class="achievement-icon">
                <i class="bi bi-truck"></i>
              </div>
              <div class="achievement-info">
                <h3>500+</h3>
                <span>Moves Completed</span>
              </div>
            </div>

            <div class="achievement-item" data-aos="zoom-in" data-aos-delay="450">
              <div class="achievement-icon">
                <i class="bi bi-clock-history"></i>
              </div>
              <div class="achievement-info">
                <h3>10+</h3>
                <span>Years Established</span>
              </div>
            </div>

            <div class="achievement-item" data-aos="zoom-in" data-aos-delay="500">
              <div class="achievement-icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <div class="achievement-info">
                <h3>100%</h3>
                <span>Damage-Free Moves</span>
              </div>
            </div>

            <div class="achievement-item" data-aos="zoom-in" data-aos-delay="550">
              <div class="achievement-icon">
                <i class="bi bi-star-fill"></i>
              </div>
              <div class="achievement-info">
                <h3>97%</h3>
                <span>Client Satisfaction</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="action-panel" data-aos="fade-left" data-aos-delay="350">

            <div class="panel-content">
              <h3>Ready to Move?</h3>
              <p>Let us take the stress out of your relocation. Our trained movers handle packing, loading, and transportation with care. Schedule your move today and enjoy a seamless experience.</p>

              <div class="action-buttons">
                <a href="quote.html" class="btn-primary">
                  <span>Request Quote</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
                <a href="#" class="btn-secondary">
                  <span>View Gallery</span>
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>

            <div class="contact-quick">
              <div class="contact-row">
                <i class="bi bi-telephone-fill"></i>
                <div class="contact-details">
                  <span class="contact-label">Direct Line</span>
                  <span class="contact-value">+254 711 155232</span>
                </div>
              </div>

              <div class="contact-row">
                <i class="bi bi-envelope-fill"></i>
                <div class="contact-details">
                  <span class="contact-label">Email Us</span>
                  <span class="contact-value">info@muneneandsons.co.ke</span>
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
          <a href="index.html" class="logo d-flex align-items-center mb-3">
            <span class="sitename">Munene and Sons</span>
          </a>
          <p class="tagline">Making relocations seamless, safe, and stress-free with professional moving services.</p>

          <div class="social-links mt-4">
            <a href="https://web.facebook.com/p/Munene-Sons-Transporters-100088968903058/?_rdc=1&_rdr#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.tiktok.com/@muneneandsons" aria-label="Twitter"><i class="bi bi-tiktok"></i></a>
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
                <li><a href="/service">Services</a></li>
                <li><a href="/contact">Contact</a></li>
                
              </ul>
            </div>
            <div class="col-6 col-md-4">
              <h5>Services</h5>
              <ul class="list-unstyled">
                <li><a href="#">Residential Moves</a></li>
                <li><a href="#">Commercial Moves</a></li>
                <li><a href="#">Packing & Storage</a></li>
                <li><a href="#">Long-Distance Relocation</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-4">
              <h5>Support</h5>
              <ul class="list-unstyled">
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Contact Us</a></li>
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
            <p class="mb-0">© <span class="sitename">Munene and Sons</span>. All rights reserved.</p>
            <div class="credits">
              Designed by <a href="#">Artechulate Solutions</a>
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