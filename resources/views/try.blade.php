<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St Peters Hospital - Leading Cancer Care & Comprehensive Treatment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0066cc;
            --secondary-color: #0052a3;
            --accent-color: #00a86b;
            --dark-color: #1a1a2e;
            --light-bg: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.98) !important;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color) !important;
        }

        .nav-link {
            font-weight: 500;
            margin: 0 15px;
            color: var(--dark-color) !important;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .btn-appointment {
            background: var(--accent-color);
            color: white;
            padding: 10px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-appointment:hover {
            background: #008c5a;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 168, 107, 0.3);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 90vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,101.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-content .highlight {
            color: #ffd700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        .hero-image-placeholder {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            border: 2px dashed rgba(255, 255, 255, 0.3);
        }

        .btn-primary-custom {
            background: var(--accent-color);
            color: white;
            padding: 15px 40px;
            font-size: 1.1rem;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            margin-right: 15px;
        }

        .btn-primary-custom:hover {
            background: #ff5252;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 107, 107, 0.3);
        }

        .btn-secondary-custom {
            background: transparent;
            color: white;
            padding: 15px 40px;
            font-size: 1.1rem;
            border-radius: 50px;
            font-weight: 600;
            border: 2px solid white;
            transition: all 0.3s ease;
        }

        .btn-secondary-custom:hover {
            background: white;
            color: var(--primary-color);
        }

        /* Cancer Care Highlight Section */
        .cancer-care-section {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            padding: 80px 0;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .cancer-care-section::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .cancer-care-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            margin: 20px 0;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .cancer-care-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.25);
        }

        .cancer-care-card i {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #ffd700;
        }

        .cancer-care-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        /* Services Section */
        .services-section {
            padding: 100px 0;
            background: var(--light-bg);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 15px;
        }

        .section-title .underline {
            width: 100px;
            height: 4px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            margin: 0 auto 20px;
            border-radius: 2px;
        }

        .service-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            height: 100%;
            border: none;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: white;
            font-size: 2rem;
        }

        .service-card h4 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        /* Stats Section */
        .stats-section {
            background: var(--primary-color);
            padding: 80px 0;
            color: white;
        }

        .stat-item {
            text-align: center;
            padding: 30px;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 10px;
            color: #ffd700;
        }

        .stat-label {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Why Choose Us Section */
        .why-choose-section {
            padding: 100px 0;
        }

        .feature-box {
            display: flex;
            margin-bottom: 40px;
            align-items: flex-start;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--accent-color), #ff8e53);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-right: 25px;
            flex-shrink: 0;
        }

        .feature-content h4 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .image-placeholder {
            background: linear-gradient(135deg, #e0e0e0, #f5f5f5);
            border-radius: 20px;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px dashed #ccc;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 100px 0;
            color: white;
            text-align: center;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 1.3rem;
            margin-bottom: 40px;
            opacity: 0.95;
        }

        /* Footer */
        footer {
            background: var(--dark-color);
            color: white;
            padding: 60px 0 20px;
        }

        .footer-section h5 {
            font-weight: 700;
            margin-bottom: 25px;
            color: var(--secondary-color);
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 12px;
        }

        .footer-section ul li a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: white;
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            color: white;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 40px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }
            
            .hero-content p {
                font-size: 1.1rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-hospital-symbol"></i> St Peters Hospital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-appointment">Book Appointment</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1>Advanced <span class="highlight">Cancer Care</span> With Compassion</h1>
                    <p>Leading the way in comprehensive cancer treatment and holistic healthcare. Your journey to recovery starts here.</p>
                    <div class="hero-buttons">
                        <button class="btn btn-primary-custom">Our Cancer Center</button>
                        <button class="btn btn-secondary-custom">Learn More</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-placeholder">
                        <div class="text-center">
                            <i class="fas fa-image" style="font-size: 4rem; opacity: 0.5;"></i>
                            <p style="margin-top: 20px; opacity: 0.7;">Hero Image Placeholder<br>1200x800px</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cancer Care Highlight Section -->
    <section class="cancer-care-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 style="font-size: 2.8rem; font-weight: 800; margin-bottom: 20px;">World-Class Cancer Treatment Center</h2>
                <p style="font-size: 1.2rem; opacity: 0.95;">Comprehensive, compassionate, and cutting-edge cancer care</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="cancer-care-card text-center">
                        <i class="fas fa-microscope"></i>
                        <h3>Advanced Diagnostics</h3>
                        <p>State-of-the-art imaging and laboratory services for accurate cancer detection and staging</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cancer-care-card text-center">
                        <i class="fas fa-radiation"></i>
                        <h3>Radiation Therapy</h3>
                        <p>Precision radiation oncology with the latest technology for targeted treatment</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cancer-care-card text-center">
                        <i class="fas fa-pills"></i>
                        <h3>Chemotherapy</h3>
                        <p>Personalized chemotherapy protocols delivered by expert oncologists</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cancer-care-card text-center">
                        <i class="fas fa-heartbeat"></i>
                        <h3>Supportive Care</h3>
                        <p>Comprehensive support services including nutrition, pain management, and counseling</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-primary-custom" style="background: white; color: #f5576c;">Explore Our Cancer Center</button>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">15,000+</div>
                        <div class="stat-label">Patients Treated</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">150+</div>
                        <div class="stat-label">Medical Experts</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">25+</div>
                        <div class="stat-label">Years of Excellence</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Success Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Comprehensive Services</h2>
                <div class="underline"></div>
                <p style="color: #666; font-size: 1.1rem;">Complete healthcare solutions under one roof</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h4>General Medicine</h4>
                        <p>Comprehensive medical care for all ages with experienced physicians</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4>Specialized Surgery</h4>
                        <p>Advanced surgical procedures with state-of-the-art operating theaters</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h4>Cardiology</h4>
                        <p>Complete heart care from prevention to advanced cardiac interventions</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h4>Neurology</h4>
                        <p>Expert neurological care for brain and nervous system conditions</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-x-ray"></i>
                        </div>
                        <h4>Radiology</h4>
                        <p>Advanced imaging services with the latest diagnostic technology</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-ambulance"></i>
                        </div>
                        <h4>Emergency Care</h4>
                        <p>24/7 emergency services with rapid response teams</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title text-start">
                        <h2>Why Choose St Peters Hospital?</h2>
                        <div class="underline" style="margin: 0 0 20px 0;"></div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Accredited Excellence</h4>
                            <p>Internationally accredited facility with the highest standards of healthcare quality and patient safety.</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Expert Medical Team</h4>
                            <p>Our multidisciplinary team includes board-certified specialists with decades of combined experience.</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Modern Facilities</h4>
                            <p>Equipped with cutting-edge medical technology and comfortable patient-centered environments.</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Compassionate Care</h4>
                            <p>We treat every patient with dignity, respect, and personalized attention throughout their journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-placeholder">
                        <div class="text-center">
                            <i class="fas fa-image" style="font-size: 4rem; color: #999;"></i>
                            <p style="margin-top: 20px; color: #666;">Hospital Facility Image<br>900x600px</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Begin Your Healthcare Journey?</h2>
            <p>Schedule a consultation with our specialists today</p>
            <button class="btn btn-primary-custom" style="background: white; color: #667eea; font-size: 1.2rem; padding: 18px 50px;">Book Your Appointment</button>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-section">
                    <h5><i class="fas fa-hospital-symbol"></i> St Peters Hospital</h5>
                    <p style="color: rgba(255, 255, 255, 0.7);">Providing world-class healthcare with compassion and excellence. Your health is our priority.</p>
                    <div class="social-links mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-section">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-section">
                    <h5>Services</h5>
                    <ul>
                        <li><a href="#">Cancer Treatment</a></li>
                        <li><a href="#">General Medicine</a></li>
                        <li><a href="#">Surgery</a></li>
                        <li><a href="#">Emergency Care</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-section">
                    <h5>Contact Info</h5>
                    <ul style="list-style: none; padding: 0;">
                        <li style="color: rgba(255, 255, 255, 0.7); margin-bottom: 15px;">
                            <i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i>
                            123 Medical Drive, Healthcare City
                        </li>
                        <li style="color: rgba(255, 255, 255, 0.7); margin-bottom: 15px;">
                            <i class="fas fa-phone" style="margin-right: 10px;"></i>
                            +1 (555) 123-4567
                        </li>
                        <li style="color: rgba(255, 255, 255, 0.7);">
                            <i class="fas fa-envelope" style="margin-right: 10px;"></i>
                            info@stpetershospital.com
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 St Peters Hospital. All rights reserved. | Privacy Policy | Terms of Service</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>