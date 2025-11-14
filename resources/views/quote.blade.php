<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Request Quote - Munene and Sons Transporters</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <!-- <link href="/assets/img/favicon.png" rel="icon"> -->
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

  <style>
    /* Multi-step form specific styles */

  /* Style for the radio cards */
.radio-card {
  border: 2px solid #e0e0e0;
  border-radius: 8px;
  padding: 15px 10px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.radio-card input[type="radio"] {
  display: none; /* hide default radio button */
}

/* When radio is checked, style the card */
.radio-card input[type="radio"]:checked + .card-content {
  border: 2px solid #04469F;
  background-color: #e6f0ff;
  border-radius: 8px;
}

/* Card content styling */
.card-content {
  padding: 10px;
  transition: all 0.3s ease;
}


    .step-indicator {
      display: flex;
      justify-content: space-between;
      margin-bottom: 3rem;
      position: relative;
    }

    .step-indicator::before {
      content: '';
      position: absolute;
      top: 20px;
      left: 0;
      right: 0;
      height: 3px;
      background: #e0e0e0;
      z-index: 0;
    }

    .step {
      display: flex;
      flex-direction: column;
      align-items: center;
      flex: 1;
      position: relative;
      z-index: 1;
    }

    .step-number {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      background: #e0e0e0;
      color: #999;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
      transition: all 0.3s;
      border: 3px solid #fff;
    }

    .step.active .step-number {
      background: #04469F;
      color: #fff;
      box-shadow: 0 4px 15px rgba(4, 70, 159, 0.3);
    }

    .step.completed .step-number {
      background: #28a745;
      color: #fff;
    }

    .step-label {
      font-size: 0.875rem;
      color: #666;
      text-align: center;
      font-weight: 500;
    }

    .step.active .step-label {
      color: #04469F;
      font-weight: 600;
    }

    .form-step {
      display: none;
    }

    .form-step.active {
      display: block;
      animation: fadeIn 0.3s;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .section-title {
      font-size: 1.75rem;
      font-weight: 700;
      color: #04469F;
      margin-bottom: 0.5rem;
    }

    .section-subtitle {
      color: #666;
      margin-bottom: 2rem;
    }

    .checkbox-card {
      border: 2px solid #e0e0e0;
      border-radius: 12px;
      padding: 1.25rem;
      cursor: pointer;
      transition: all 0.3s;
      margin-bottom: 1rem;
    }

    .checkbox-card:hover {
      border-color: #04469F;
      background: #f8f9ff;
    }

    .checkbox-card input[type="checkbox"]:checked ~ label {
      color: #04469F;
    }

    .radio-card {
      border: 2px solid #e0e0e0;
      border-radius: 12px;
      padding: 1.25rem;
      cursor: pointer;
      transition: all 0.3s;
      position: relative;
      height: 100%;
    }

    .radio-card input[type="radio"] {
      position: absolute;
      opacity: 0;
    }

    .radio-card:hover {
      border-color: #04469F;
      background: #f8f9ff;
    }

    .radio-card input[type="radio"]:checked + .card-content {
      color: #04469F;
    }

    .radio-card input[type="radio"]:checked ~ * {
      border-color: #04469F;
    }

    .btn-navigation {
      padding: 0.875rem 2.5rem;
      border-radius: 8px;
      font-weight: 600;
      transition: all 0.3s;
    }

    .feature-card {
      text-align: center;
      padding: 2rem;
      border-radius: 12px;
      background: #f8f9fa;
      transition: all 0.3s;
      height: 100%;
    }

    .feature-card:hover {
      background: #f0f4ff;
      transform: translateY(-5px);
    }

    .icon-box {
      width: 60px;
      height: 60px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      margin: 0 auto 1rem;
    }
  </style>

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Munene and Sons Transporters</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/service">Services</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted d-none d-sm-block" href="/quote">Request Quote</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="hero-video-container">
        <video autoplay="" muted="" loop="">
          <source src="assets/img/movers/vedio-2.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="hero-overlay"></div>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center text-center">
          <div class="col-lg-8">
            <div class="hero-content">
              <h1 style="color:#04469F;" data-aos="fade-up" data-aos-delay="200">
                Get Your Free Moving Quote
              </h1>
              <p data-aos="fade-up" data-aos-delay="300">
                Fill out the form below and receive a detailed, transparent quote within 24 hours. No hidden fees, no surprises - just honest pricing for exceptional service.
              </p>

              <div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
                <div class="row">
                  <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                      <span class="stat-number">24hrs</span>
                      <span class="stat-label">Quick Response</span>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                      <span class="stat-number">100%</span>
                      <span class="stat-label">Transparent Pricing</span>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                      <span class="stat-number">Free</span>
                      <span class="stat-label">No Obligation Quote</span>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                      <span class="stat-number">10+</span>
                      <span class="stat-label">Years Experience</span>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- Quote Form Section -->
    <section id="quote-form" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        @if(session('success'))
        <div class="alert alert-success d-flex align-items-center mb-4" data-aos="fade-up">
          <i class="bi bi-check-circle-fill me-3 fs-3"></i>
          <div>
            <strong>Success!</strong> {{ session('success') }}
          </div>
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger mb-4" data-aos="fade-up">
          <strong>Please correct the following errors:</strong>
          <ul class="mb-0 mt-2">
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <!-- Step Indicator -->
        <div class="step-indicator mb-5">
          <div class="step active" data-step="1">
            <div class="step-number">1</div>
            <div class="step-label">Contact Info</div>
          </div>
          <div class="step" data-step="2">
            <div class="step-number">2</div>
            <div class="step-label">Move Details</div>
          </div>
          <div class="step" data-step="3">
            <div class="step-number">3</div>
            <div class="step-label">Property Size</div>
          </div>
          <div class="step" data-step="4">
            <div class="step-number">4</div>
            <div class="step-label">Services</div>
          </div>
          <div class="step" data-step="5">
            <div class="step-number">5</div>
            <div class="step-label">Review</div>
          </div>
        </div>

        <form action="{{ route('quote.store') }}" method="POST" id="quoteForm">
          @csrf

          <!-- Step 1: Contact Information -->
          <div class="form-step active" data-step="1">
            <div class="content">
              <h2 class="section-title">Contact Information</h2>
              <p class="section-subtitle">Let us know how to reach you</p>

              <div class="row g-4">
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                  <input type="text" name="full_name" class="form-control" placeholder="John Doe" value="{{ old('full_name') }}" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Phone Number <span class="text-danger">*</span></label>
                  <input type="tel" name="phone" class="form-control" placeholder="+254 712 345 678" value="{{ old('phone') }}" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Email Address <span class="text-danger">*</span></label>
                  <input type="email" name="email" class="form-control" placeholder="john@example.com" value="{{ old('email') }}" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Preferred Contact Method <span class="text-danger">*</span></label>
                  <select name="preferred_contact" class="form-select" required>
                    <option value="phone" {{ old('preferred_contact') == 'phone' ? 'selected' : '' }}>Phone Call</option>
                    <option value="email" {{ old('preferred_contact') == 'email' ? 'selected' : '' }}>Email</option>
                    <option value="whatsapp" {{ old('preferred_contact') == 'whatsapp' ? 'selected' : '' }}>WhatsApp</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <!-- Step 2: Move Details -->
          <div class="form-step" data-step="2">
            <div class="content">
              <h2 class="section-title">Move Details</h2>
              <p class="section-subtitle">Tell us about your relocation</p>

              <div class="row g-4">
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Origin Town <span class="text-danger">*</span></label>
                  <input type="text" name="origin_address" class="form-control" placeholder="Rongai" value="{{ old('origin_address') }}" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Origin County <span class="text-danger">*</span></label>
                  <input type="text" name="origin_city" class="form-control" placeholder="Nairobi" value="{{ old('origin_city') }}" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Destination Town <span class="text-danger">*</span></label>
                  <input type="text" name="destination_address" class="form-control" placeholder="Kisauni" value="{{ old('destination_address') }}" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Destination County <span class="text-danger">*</span></label>
                  <input type="text" name="destination_city" class="form-control" placeholder="Mombasa" value="{{ old('destination_city') }}" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Preferred Move Date <span class="text-danger">*</span></label>
                  <input type="date" name="preferred_date" class="form-control" value="{{ old('preferred_date') }}" min="{{ date('Y-m-d', strtotime('+1 day')) }}" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Date Flexibility</label>
                  <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" name="date_flexible" id="dateFlexible" {{ old('date_flexible') ? 'checked' : '' }}>
                    <label class="form-check-label" for="dateFlexible">
                      My dates are flexible
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Step 3: Property Size -->
          <div class="form-step" data-step="3">
            <div class="content">
              <h2 class="section-title">Property Size & Type</h2>
              <p class="section-subtitle">Help us understand the scope of your move</p>

              <div class="mb-4">
                <label class="form-label fw-semibold">Move Type <span class="text-danger">*</span></label>
                <div class="row g-3">
                  <div class="col-md-3 col-6">
                    <div class="radio-card">
                      <input type="radio" name="move_type" value="residential" id="residential" {{ old('move_type', 'residential') == 'residential' ? 'checked' : '' }} required>
                      <div class="card-content text-center">
                        <i class="bi bi-house-door fs-2 text-primary mb-2"></i>
                        <label for="residential" class="d-block fw-semibold mb-0">Residential</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="radio-card">
                      <input type="radio" name="move_type" value="commercial" id="commercial" {{ old('move_type') == 'commercial' ? 'checked' : '' }}>
                      <div class="card-content text-center">
                        <i class="bi bi-shop fs-2 text-primary mb-2"></i>
                        <label for="commercial" class="d-block fw-semibold mb-0">Commercial</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="radio-card">
                      <input type="radio" name="move_type" value="office" id="office" {{ old('move_type') == 'office' ? 'checked' : '' }}>
                      <div class="card-content text-center">
                        <i class="bi bi-building fs-2 text-primary mb-2"></i>
                        <label for="office" class="d-block fw-semibold mb-0">Office</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="radio-card">
                      <input type="radio" name="move_type" value="warehouse" id="warehouse" {{ old('move_type') == 'warehouse' ? 'checked' : '' }}>
                      <div class="card-content text-center">
                        <i class="bi bi-box-seam fs-2 text-primary mb-2"></i>
                        <label for="warehouse" class="d-block fw-semibold mb-0">Warehouse</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row g-4">
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Property Size</label>
                  <select name="property_size" class="form-select">
                    <option value="">Select property size</option>
                    <optgroup label="Residential">
                      <option value="studio" {{ old('property_size') == 'studio' ? 'selected' : '' }}>Studio/Bedsitter</option>
                      <option value="1_bedroom" {{ old('property_size') == '1_bedroom' ? 'selected' : '' }}>1 Bedroom</option>
                      <option value="2_bedroom" {{ old('property_size') == '2_bedroom' ? 'selected' : '' }}>2 Bedrooms</option>
                      <option value="3_bedroom" {{ old('property_size') == '3_bedroom' ? 'selected' : '' }}>3 Bedrooms</option>
                      <option value="4_bedroom" {{ old('property_size') == '4_bedroom' ? 'selected' : '' }}>4 Bedrooms</option>
                      <option value="5+_bedroom" {{ old('property_size') == '5+_bedroom' ? 'selected' : '' }}>5+ Bedrooms</option>
                    </optgroup>
                    <optgroup label="Commercial/Office">
                      <option value="small_office" {{ old('property_size') == 'small_office' ? 'selected' : '' }}>Small Office (1-5 desks)</option>
                      <option value="medium_office" {{ old('property_size') == 'medium_office' ? 'selected' : '' }}>Medium Office (6-20 desks)</option>
                      <option value="large_office" {{ old('property_size') == 'large_office' ? 'selected' : '' }}>Large Office (20+ desks)</option>
                    </optgroup>
                  </select>
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Access Type</label>
                  <select name="access_type" class="form-select">
                    <option value="">Select access type</option>
                    <option value="ground_floor" {{ old('access_type') == 'ground_floor' ? 'selected' : '' }}>Ground Floor</option>
                    <option value="elevator" {{ old('access_type') == 'elevator' ? 'selected' : '' }}>Elevator Available</option>
                    <option value="stairs" {{ old('access_type') == 'stairs' ? 'selected' : '' }}>Stairs Only</option>
                    <option value="long_carry" {{ old('access_type') == 'long_carry' ? 'selected' : '' }}>Long Carry Distance</option>
                  </select>
                </div>

                <div class="col-12">
                  <label class="form-label fw-semibold">Major Items / Inventory List</label>
                  <textarea name="inventory_list" class="form-control" rows="4" placeholder="List any large or special items (e.g., piano, pool table, antiques, heavy furniture)">{{ old('inventory_list') }}</textarea>
                  <small class="text-muted">This helps us provide a more accurate quote</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Step 4: Additional Services -->
          <div class="form-step" data-step="4">
            <div class="content">
              <h2 class="section-title">Additional Services</h2>
              <p class="section-subtitle">Select any extra services you need</p>

              <div class="row g-3">
                <div class="col-md-6">
                  <div class="checkbox-card">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="packing_service" id="packingService" {{ old('packing_service') ? 'checked' : '' }}>
                      <label class="form-check-label w-100" for="packingService">
                        <div class="d-flex align-items-start">
                          <i class="bi bi-box-seam text-primary fs-3 me-3"></i>
                          <div>
                            <strong>Professional Packing</strong>
                            <p class="mb-0 text-muted small">We pack all your items safely</p>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="checkbox-card">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="unpacking_service" id="unpackingService" {{ old('unpacking_service') ? 'checked' : '' }}>
                      <label class="form-check-label w-100" for="unpackingService">
                        <div class="d-flex align-items-start">
                          <i class="bi bi-box-arrow-up text-primary fs-3 me-3"></i>
                          <div>
                            <strong>Unpacking Service</strong>
                            <p class="mb-0 text-muted small">We unpack at your new location</p>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="checkbox-card">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="storage_required" id="storageRequired" {{ old('storage_required') ? 'checked' : '' }}>
                      <label class="form-check-label w-100" for="storageRequired">
                        <div class="d-flex align-items-start">
                          <i class="bi bi-archive text-primary fs-3 me-3"></i>
                          <div>
                            <strong>Storage Services</strong>
                            <p class="mb-0 text-muted small">Secure storage facility available</p>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="checkbox-card">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="assembly_required" id="assemblyRequired" {{ old('assembly_required') ? 'checked' : '' }}>
                      <label class="form-check-label w-100" for="assemblyRequired">
                        <div class="d-flex align-items-start">
                          <i class="bi bi-tools text-primary fs-3 me-3"></i>
                          <div>
                            <strong>Assembly/Disassembly</strong>
                            <p class="mb-0 text-muted small">Furniture assembly services</p>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="checkbox-card">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="fragile_items" id="fragileItems" {{ old('fragile_items') ? 'checked' : '' }}>
                      <label class="form-check-label w-100" for="fragileItems">
                        <div class="d-flex align-items-start">
                          <i class="bi bi-exclamation-triangle text-warning fs-3 me-3"></i>
                          <div>
                            <strong>Fragile Items</strong>
                            <p class="mb-0 text-muted small">Artwork, antiques, or delicate items</p>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="checkbox-card">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="heavy_items" id="heavyItems" {{ old('heavy_items') ? 'checked' : '' }}>
                      <label class="form-check-label w-100" for="heavyItems">
                        <div class="d-flex align-items-start">
                          <i class="bi bi-clipboard-check text-primary fs-3 me-3"></i>
                          <div>
                            <strong>Heavy Items</strong>
                            <p class="mb-0 text-muted small">Pianos, safes, gym equipment</p>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="checkbox-card">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="insurance_required" id="insuranceRequired" {{ old('insurance_required', true) ? 'checked' : '' }}>
                      <label class="form-check-label w-100" for="insuranceRequired">
                        <div class="d-flex align-items-start">
                          <i class="bi bi-shield-check text-success fs-3 me-3"></i>
                          <div>
                            <strong>Comprehensive Insurance Coverage</strong>
                            <p class="mb-0 text-muted small">Full protection for your belongings during the move (Recommended)</p>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-4">
                <label class="form-label fw-semibold">Special Instructions or Requirements</label>
                <textarea name="special_instructions" class="form-control" rows="4" placeholder="Any additional information that would help us serve you better...">{{ old('special_instructions') }}</textarea>
              </div>

              <div class="mt-4">
                <label class="form-label fw-semibold">Estimated Budget (Optional)</label>
                <div class="input-group">
                  <span class="input-group-text">KES</span>
                  <input type="number" name="estimated_budget" class="form-control" placeholder="50000" value="{{ old('estimated_budget') }}" min="0" step="1000">
                </div>
                <small class="text-muted">This helps us tailor our quote to your budget</small>
              </div>
            </div>
          </div>

          <!-- Step 5: Review & Submit -->
   <div class="form-step" data-step="5">
  <div class="content">
    <h2 class="section-title">Review Your Information</h2>
    <p class="section-subtitle">Please review your details before submitting</p>

    <div class="alert alert-light border d-flex align-items-start mb-4">
      <i class="bi bi-info-circle fs-4 me-3 text-secondary"></i>
      <div>
        <strong>What happens next?</strong>
        <p class="mb-0">Once you submit this form, our team will review your request and contact you within 24 hours with a detailed quote. We may call to clarify some details for the most accurate pricing.</p>
      </div>
    </div>

    <!-- Contact Information -->
    <div class="card shadow-sm mb-4">
      <div class="card-header border-0">
        <h5 class="mb-0"><i class="bi bi-person-circle me-2"></i>Contact Information</h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 mb-3">
            <small class="text-muted d-block">Full Name</small>
            <strong id="review-name">-</strong>
          </div>
          <div class="col-md-6 mb-3">
            <small class="text-muted d-block">Phone Number</small>
            <strong id="review-phone">-</strong>
          </div>
          <div class="col-md-6 mb-3">
            <small class="text-muted d-block">Email Address</small>
            <strong id="review-email">-</strong>
          </div>
          <div class="col-md-6 mb-3">
            <small class="text-muted d-block">Preferred Contact</small>
            <strong id="review-contact">-</strong>
          </div>
        </div>
      </div>
    </div>

    <!-- Move Details -->
    <div class="card shadow-sm mb-4">
      <div class="card-header border-0">
        <h5 class="mb-0"><i class="bi bi-geo-alt me-2"></i>Move Details</h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 mb-3">
            <small class="text-muted d-block">From</small>
            <strong id="review-origin">-</strong>
          </div>
          <div class="col-md-6 mb-3">
            <small class="text-muted d-block">To</small>
            <strong id="review-destination">-</strong>
          </div>
          <div class="col-md-6 mb-3">
            <small class="text-muted d-block">Move Date</small>
            <strong id="review-date">-</strong>
          </div>
          <div class="col-md-6 mb-3">
            <small class="text-muted d-block">Date Flexibility</small>
            <strong id="review-flexible">-</strong>
          </div>
        </div>
      </div>
    </div>

    <!-- Property Details -->
    <div class="card shadow-sm mb-4">
      <div class="card-header border-0">
        <h5 class="mb-0"><i class="bi bi-house me-2"></i>Property Details</h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4 mb-3">
            <small class="text-muted d-block">Move Type</small>
            <strong id="review-move-type">-</strong>
          </div>
          <div class="col-md-4 mb-3">
            <small class="text-muted d-block">Property Size</small>
            <strong id="review-property-size">-</strong>
          </div>
          <div class="col-md-4 mb-3">
            <small class="text-muted d-block">Access Type</small>
            <strong id="review-access">-</strong>
          </div>
          <div class="col-12 mb-3" id="review-inventory-container" style="display: none;">
            <small class="text-muted d-block">Inventory List</small>
            <p id="review-inventory" class="mb-0">-</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Additional Services -->
    <div class="card shadow-sm mb-4">
      <div class="card-header border-0">
        <h5 class="mb-0"><i class="bi bi-list-check me-2"></i>Additional Services</h5>
      </div>
      <div class="card-body">
        <div id="review-services" class="mb-3">
          <small class="text-muted">No additional services selected</small>
        </div>
        <div id="review-instructions-container" style="display: none;">
          <small class="text-muted d-block">Special Instructions</small>
          <p id="review-instructions" class="mb-0">-</p>
        </div>
        <div id="review-budget-container" style="display: none;" class="mt-3">
          <small class="text-muted d-block">Estimated Budget</small>
          <strong id="review-budget">-</strong>
        </div>
      </div>
    </div>

    <div class="alert alert-light border d-flex align-items-center">
      <i class="bi bi-pencil-square fs-4 me-3 text-secondary"></i>
      <div>
        <strong>Need to make changes?</strong> Use the "Previous" button to go back and edit any section.
      </div>
    </div>

    <div class="form-check mt-4">
      <input class="form-check-input" type="checkbox" id="agreeTerms" required>
      <label class="form-check-label" for="agreeTerms">
        I agree to the <a href="#" class="text-decoration-underline">Terms and Conditions</a> and <a href="#" class="text-decoration-underline">Privacy Policy</a>
      </label>
    </div>
  </div>
</div>



          <!-- Navigation Buttons -->
          <div class="d-flex justify-content-between mt-5">
            <button type="button" class="btn btn-secondary btn-navigation" id="prevBtn" style="display: none;">
              <i class="bi bi-arrow-left me-2"></i> Previous
            </button>
            <button type="button" class="btn btn-primary btn-navigation ms-auto" id="nextBtn">
              Next <i class="bi bi-arrow-right ms-2"></i>
            </button>
            <button type="submit" class="btn btn-primary btn-navigation ms-auto" id="submitBtn" style="display: none;">
              <i class="bi bi-check-circle me-2"></i> Submit Quote Request
            </button>
          </div>

        </form>

      </div>

    </section><!-- /Quote Form Section -->

    <!-- Why Choose Us Section -->
    <section id="certifications" class="certifications section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Why Get a Quote from Us?</h2>
        <p>Our certifications and experience guarantee professional, safe, and reliable moving services</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5 mt-4">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="certification-item">
              <div class="certification-badge">
                <i class="bi bi-award fs-1 text-primary"></i>
              </div>
              <h4>10+ Years Experience</h4>
              <p>Trusted moving experts with a proven track record</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="certification-item">
              <div class="certification-badge">
                <i class="bi bi-truck fs-1 text-success"></i>
              </div>
              <h4>500+ Moves</h4>
              <p>Successfully completed relocations across Kenya</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="certification-item">
              <div class="certification-badge">
                <i class="bi bi-star-fill fs-1 text-warning"></i>
              </div>
              <h4>97% Satisfaction</h4>
              <p>Happy customers who trust and recommend us</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="certification-item">
              <div class="certification-badge">
                <i class="bi bi-shield-fill-check fs-1 text-info"></i>
              </div>
              <h4>Fully Certified</h4>
              <p>KEBS, NITA, NTSA licensed and insured</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Choose Us Section -->

  </main>


 <footer id="footer" class="footer dark-background">

  <div class="container">
    <div class="row gy-5">

      <div class="col-lg-4">
        <div class="footer-brand">
          <a href="/" class="logo d-flex align-items-center mb-3">
            <span class="sitename">Munene and Sons Transporters</span>
          </a>
          <p class="tagline">Making relocations seamless, safe, and stress-free with professional moving services.</p>

          <div class="social-links mt-4">
            <a href="https://web.facebook.com/p/Munene-Sons-Transporters-100088968903058/?_rdc=1&_rdr# " aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            
            <a href="https://wa.me/254711155232" target="_blank" aria-label="Whatsapp">
                <i class="bi bi-whatsapp"></i></a>
            <a href="https://www.linkedin.com/in/munene-murungi-21374885/ " aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.tiktok.com/@muneneandsons" aria-label="Tiktok"><i class="bi bi-tiktok"></i></a>
          </div>
        </div>
      </div>

 <div class="col-lg-6">
  <div class="footer-links-grid">
    <div class="row">
      <!-- Location -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h5 class="fw-bold mb-3">Location</h5>
        <ul class="list-unstyled">
          <li>Thika, Kenya</li>
          <li>Opposite Christian Outreach</li>
          <li>Kwiz Cyber Building</li>
          <li><strong>Phone:</strong> +254 768 002 702</li>
          <li><strong>Email:</strong> support@muneneandsonstransporters.co.ke</li>
        </ul>
      </div>

      <!-- Services -->
      <div class="col-md-6">
        <h5 class="fw-bold mb-3">Services</h5>
        <ul class="list-unstyled">
          <li><a href="/service" class="text-decoration-none text-light">Residential Moves</a></li>
          <li><a href="/service" class="text-decoration-none text-light">Commercial Moves</a></li>
          <li><a href="/service" class="text-decoration-none text-light">Packing & Storage</a></li>
          <li><a href="/service" class="text-decoration-none text-light">House & Hunting</a></li>
          <li><a href="/service" class="text-decoration-none text-light">Long-Distance Relocation</a></li>
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
            <p class="mb-0">© <span class="sitename">Munene and Sons Transporters</span>. All rights reserved.</p>
            <div class="credits">
              Designed by <a href="https://artechullatesoluutions.co.ke">Artechulate Solutions</a>
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
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/assets/js/main.js"></script>

<script>
  // Initialize AOS
  AOS.init({
    duration: 1000,
    easing: "ease-in-out",
    once: true,
    mirror: false
  });

  // Multi-step form
  let currentStep = 1;
  const totalSteps = 5;
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const submitBtn = document.getElementById('submitBtn');
  const form = document.querySelector('form'); // Assuming your form is the first <form>

  function showStep(step) {
  // Hide all steps
  document.querySelectorAll('.form-step').forEach(el => {
    el.classList.remove('active');
  });

  // Show current step
  document.querySelector(`.form-step[data-step="${step}"]`).classList.add('active');

  // Update step indicators
  document.querySelectorAll('.step').forEach((el, index) => {
    const stepNum = index + 1;
    el.classList.remove('active', 'completed');

    if (stepNum < step) {
      el.classList.add('completed');
    } else if (stepNum === step) {
      el.classList.add('active');
    }
  });

  // Update buttons
  prevBtn.style.display = step === 1 ? 'none' : 'inline-block';
  nextBtn.style.display = step === totalSteps ? 'none' : 'inline-block';
  submitBtn.style.display = step === totalSteps ? 'inline-block' : 'none';

  // Populate review on final step
  if (step === totalSteps) {
    populateReview();
  }
}


function populateReview() {
  // Contact Information
  document.getElementById('review-name').textContent = document.querySelector('[name="full_name"]').value || '-';
  document.getElementById('review-phone').textContent = document.querySelector('[name="phone"]').value || '-';
  document.getElementById('review-email').textContent = document.querySelector('[name="email"]').value || '-';
  const contactMethod = document.querySelector('[name="preferred_contact"]').value;
  document.getElementById('review-contact').textContent = contactMethod.charAt(0).toUpperCase() + contactMethod.slice(1);

  // Move Details
  const originTown = document.querySelector('[name="origin_address"]').value || '';
  const originCounty = document.querySelector('[name="origin_city"]').value || '';
  document.getElementById('review-origin').textContent = `${originTown}, ${originCounty}` || '-';
  
  const destTown = document.querySelector('[name="destination_address"]').value || '';
  const destCounty = document.querySelector('[name="destination_city"]').value || '';
  document.getElementById('review-destination').textContent = `${destTown}, ${destCounty}` || '-';
  
  document.getElementById('review-date').textContent = document.querySelector('[name="preferred_date"]').value || '-';
  document.getElementById('review-flexible').textContent = document.querySelector('[name="date_flexible"]').checked ? 'Yes' : 'No';

  // Property Details
  const moveType = document.querySelector('[name="move_type"]:checked')?.value || '-';
  document.getElementById('review-move-type').textContent = moveType.charAt(0).toUpperCase() + moveType.slice(1);
  
  const propertySize = document.querySelector('[name="property_size"]').value;
  if (propertySize) {
    const sizeText = document.querySelector(`[name="property_size"] option[value="${propertySize}"]`).textContent;
    document.getElementById('review-property-size').textContent = sizeText;
  } else {
    document.getElementById('review-property-size').textContent = 'Not specified';
  }
  
  const accessType = document.querySelector('[name="access_type"]').value;
  if (accessType) {
    const accessText = document.querySelector(`[name="access_type"] option[value="${accessType}"]`).textContent;
    document.getElementById('review-access').textContent = accessText;
  } else {
    document.getElementById('review-access').textContent = 'Not specified';
  }

  const inventory = document.querySelector('[name="inventory_list"]').value;
  if (inventory) {
    document.getElementById('review-inventory-container').style.display = 'block';
    document.getElementById('review-inventory').textContent = inventory;
  } else {
    document.getElementById('review-inventory-container').style.display = 'none';
  }

  // Additional Services
  const services = [];
  if (document.querySelector('[name="packing_service"]').checked) services.push('Professional Packing');
  if (document.querySelector('[name="unpacking_service"]').checked) services.push('Unpacking Service');
  if (document.querySelector('[name="storage_required"]').checked) services.push('Storage Services');
  if (document.querySelector('[name="assembly_required"]').checked) services.push('Assembly/Disassembly');
  if (document.querySelector('[name="fragile_items"]').checked) services.push('Fragile Items Handling');
  if (document.querySelector('[name="heavy_items"]').checked) services.push('Heavy Items');
  if (document.querySelector('[name="insurance_required"]').checked) services.push('Insurance Coverage');

  const servicesContainer = document.getElementById('review-services');
  if (services.length > 0) {
    servicesContainer.innerHTML = '<div class="d-flex flex-wrap gap-2">' + 
      services.map(s => `<span class="badge bg-primary">${s}</span>`).join('') + 
      '</div>';
  } else {
    servicesContainer.innerHTML = '<small class="text-muted">No additional services selected</small>';
  }

  const instructions = document.querySelector('[name="special_instructions"]').value;
  if (instructions) {
    document.getElementById('review-instructions-container').style.display = 'block';
    document.getElementById('review-instructions').textContent = instructions;
  } else {
    document.getElementById('review-instructions-container').style.display = 'none';
  }

  const budget = document.querySelector('[name="estimated_budget"]').value;
  if (budget) {
    document.getElementById('review-budget-container').style.display = 'block';
    document.getElementById('review-budget').textContent = 'KES ' + Number(budget).toLocaleString();
  } else {
    document.getElementById('review-budget-container').style.display = 'none';
  }
}


  function validateStep(step) {
    const currentStepEl = document.querySelector(`.form-step[data-step="${step}"]`);
    const requiredInputs = currentStepEl.querySelectorAll('[required]');
    let isValid = true;

    requiredInputs.forEach(input => {
      if (!input.value || (input.type === 'checkbox' && !input.checked) || (input.type === 'radio' && !currentStepEl.querySelector(`input[name="${input.name}"]:checked`))) {
        isValid = false;
        input.classList.add('is-invalid');
      } else {
        input.classList.remove('is-invalid');
      }
    });

    return isValid;
  }

  nextBtn.addEventListener('click', () => {
    if (validateStep(currentStep)) {
      currentStep++;
      showStep(currentStep);
    } else {
      alert('Please fill in all required fields before proceeding.');
    }
  });

  prevBtn.addEventListener('click', () => {
    currentStep--;
    showStep(currentStep);
  });

  // Submit button only triggers if last step is valid
  submitBtn.addEventListener('click', (e) => {
    if (!validateStep(currentStep)) {
      e.preventDefault();
      alert('Please fill in all required fields before submitting.');
    } else {
      form.submit(); // Actually submit the form
    }
  });

  // Initialize first step
  showStep(1);

  // Remove validation styling on input
  document.querySelectorAll('input, select, textarea').forEach(input => {
    input.addEventListener('input', () => {
      input.classList.remove('is-invalid');
    });
  });
</script>


</body>

</html>