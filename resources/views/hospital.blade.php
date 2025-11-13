<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthCare Plus | Advanced Medical Care</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0EA5E9', // Sky blue - trust, calm
                        secondary: '#06B6D4', // Cyan - health, cleanliness
                        accent: '#10B981', // Emerald - healing, life
                        dark: '#0F172A', // Slate - professional
                        light: '#F8FAFC', // Very light - clean
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes pulse-slow {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.6;
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 3s ease-in-out infinite;
        }

        /* Gradient background */
        .gradient-bg {
            background: linear-gradient(135deg, #0EA5E9 0%, #06B6D4 50%, #10B981 100%);
        }

        .gradient-bg-light {
            background: linear-gradient(135deg, rgba(14, 165, 233, 0.05) 0%, rgba(6, 182, 212, 0.05) 50%, rgba(16, 185, 129, 0.05) 100%);
        }

        /* Glass effect */
        .glass {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* Hover effects */
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px -12px rgba(14, 165, 233, 0.25);
        }

        /* Stats counter animation */
        .stat-number {
            font-variant-numeric: tabular-nums;
        }

        /* Floating elements */
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #0EA5E9;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0284c7;
        }

        /* Navbar scroll effect */
        .navbar-scrolled {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-light text-gray-800">

    <!-- Navigation -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center">
                        <i class="fas fa-heartbeat text-white text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-dark">HealthCare<span class="text-primary">Plus</span></h1>
                        <p class="text-xs text-gray-500">Advanced Medical Care</p>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-primary transition-colors font-medium">Home</a>
                    <a href="#services" class="text-gray-700 hover:text-primary transition-colors font-medium">Services</a>
                    <a href="#departments" class="text-gray-700 hover:text-primary transition-colors font-medium">Departments</a>
                    <a href="#doctors" class="text-gray-700 hover:text-primary transition-colors font-medium">Doctors</a>
                    <a href="#testimonials" class="text-gray-700 hover:text-primary transition-colors font-medium">Testimonials</a>
                    <a href="#contact" class="gradient-bg text-white px-6 py-2.5 rounded-lg hover:shadow-lg transition-all duration-300 font-medium">
                        Book Appointment
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden glass">
            <div class="px-4 pt-2 pb-4 space-y-2">
                <a href="#home" class="block px-3 py-2 text-gray-700 hover:bg-primary hover:text-white rounded-lg transition-colors">Home</a>
                <a href="#services" class="block px-3 py-2 text-gray-700 hover:bg-primary hover:text-white rounded-lg transition-colors">Services</a>
                <a href="#departments" class="block px-3 py-2 text-gray-700 hover:bg-primary hover:text-white rounded-lg transition-colors">Departments</a>
                <a href="#doctors" class="block px-3 py-2 text-gray-700 hover:bg-primary hover:text-white rounded-lg transition-colors">Doctors</a>
                <a href="#testimonials" class="block px-3 py-2 text-gray-700 hover:bg-primary hover:text-white rounded-lg transition-colors">Testimonials</a>
                <a href="#contact" class="block px-3 py-2 gradient-bg text-white rounded-lg text-center">Book Appointment</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative pt-32 pb-20 overflow-hidden">
        <!-- Floating shapes background -->
        <div class="floating-shape w-64 h-64 bg-primary top-20 -left-32 animate-float"></div>
        <div class="floating-shape w-96 h-96 bg-secondary top-40 -right-48 animate-float" style="animation-delay: 2s;"></div>
        <div class="floating-shape w-48 h-48 bg-accent bottom-20 left-1/4 animate-float" style="animation-delay: 4s;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="animate-fade-in-up">
                    <div class="inline-flex items-center space-x-2 bg-primary/10 px-4 py-2 rounded-full mb-6">
                        <span class="w-2 h-2 bg-accent rounded-full animate-pulse-slow"></span>
                        <span class="text-primary font-semibold text-sm">ISO 9001:2015 Certified Hospital</span>
                    </div>
                    
                    <h1 class="text-5xl md:text-6xl font-bold text-dark leading-tight mb-6">
                        Your Health,<br/>
                        Our <span class="text-primary">Priority</span>
                    </h1>
                    
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Experience world-class healthcare with cutting-edge technology and compassionate care. Available 24/7 for your medical needs.
                    </p>

                    <div class="flex flex-wrap gap-4 mb-8">
                        <a href="#contact" class="gradient-bg text-white px-8 py-4 rounded-xl hover:shadow-2xl transition-all duration-300 font-semibold flex items-center space-x-2 group">
                            <span>Book Appointment</span>
                            <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                        </a>
                        <a href="#services" class="bg-white text-primary px-8 py-4 rounded-xl hover:shadow-xl transition-all duration-300 font-semibold border-2 border-primary/20">
                            Our Services
                        </a>
                    </div>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary stat-number">15K+</div>
                            <div class="text-sm text-gray-600">Patients Treated</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary stat-number">50+</div>
                            <div class="text-sm text-gray-600">Expert Doctors</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary stat-number">98%</div>
                            <div class="text-sm text-gray-600">Success Rate</div>
                        </div>
                    </div>
                </div>

                <!-- Right Image/Illustration -->
                <div class="relative animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="relative z-10">
                        <div class="glass rounded-3xl p-8 shadow-2xl">
                            <div class="aspect-square bg-gradient-to-br from-primary/20 to-accent/20 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-hospital-user text-9xl text-primary opacity-20"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Cards -->
                    <div class="absolute -bottom-6 -left-6 glass rounded-2xl p-4 shadow-xl animate-float">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-accent rounded-xl flex items-center justify-center">
                                <i class="fas fa-check text-white text-xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-dark">24/7 Emergency</div>
                                <div class="text-xs text-gray-500">Always Available</div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -top-6 -right-6 glass rounded-2xl p-4 shadow-xl animate-float" style="animation-delay: 2s;">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center">
                                <i class="fas fa-user-md text-white text-xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-dark">Expert Care</div>
                                <div class="text-xs text-gray-500">Certified Doctors</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="text-primary font-semibold text-sm uppercase tracking-wider">What We Offer</span>
                <h2 class="text-4xl md:text-5xl font-bold text-dark mt-2 mb-4">Our Medical Services</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Comprehensive healthcare solutions with state-of-the-art facilities and experienced medical professionals</p>
            </div>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-heartbeat text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3">Cardiology</h3>
                    <p class="text-gray-600 mb-6">Advanced cardiac care with latest diagnostic equipment and experienced cardiologists for all heart conditions.</p>
                    <a href="#" class="text-primary font-semibold flex items-center space-x-2 group">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>

                <!-- Service Card 2 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 bg-secondary rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-brain text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3">Neurology</h3>
                    <p class="text-gray-600 mb-6">Expert neurological care for brain, spine, and nervous system disorders with cutting-edge treatment.</p>
                    <a href="#" class="text-primary font-semibold flex items-center space-x-2 group">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>

                <!-- Service Card 3 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-bone text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3">Orthopedics</h3>
                    <p class="text-gray-600 mb-6">Comprehensive bone and joint care including sports injuries, arthritis, and joint replacement surgery.</p>
                    <a href="#" class="text-primary font-semibold flex items-center space-x-2 group">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>

                <!-- Service Card 4 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-baby text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3">Pediatrics</h3>
                    <p class="text-gray-600 mb-6">Specialized child healthcare from newborns to adolescents with child-friendly environment and care.</p>
                    <a href="#" class="text-primary font-semibold flex items-center space-x-2 group">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>

                <!-- Service Card 5 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 bg-pink-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-female text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3">Gynecology</h3>
                    <p class="text-gray-600 mb-6">Complete women's health services including maternity care, fertility treatments, and wellness programs.</p>
                    <a href="#" class="text-primary font-semibold flex items-center space-x-2 group">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>

                <!-- Service Card 6 -->
                <div class="card-hover bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 bg-red-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-ambulance text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3">Emergency Care</h3>
                    <p class="text-gray-600 mb-6">24/7 emergency services with rapid response team and fully equipped trauma center for critical care.</p>
                    <a href="#" class="text-primary font-semibold flex items-center space-x-2 group">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 gradient-bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <span class="text-primary font-semibold text-sm uppercase tracking-wider">Why Choose Us</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-dark mt-2 mb-6">Excellence in Healthcare Since 2005</h2>
                    <p class="text-xl text-gray-600 mb-8">We combine advanced medical technology with compassionate care to provide the best possible outcomes for our patients.</p>

                    <div class="space-y-6">
                        <!-- Feature 1 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-certificate text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-dark mb-2">Accredited & Certified</h3>
                                <p class="text-gray-600">ISO 9001:2015 certified facility with international healthcare standards and quality assurance.</p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-secondary rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-laptop-medical text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-dark mb-2">Advanced Technology</h3>
                                <p class="text-gray-600">State-of-the-art medical equipment and digital health records for accurate diagnosis and treatment.</p>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-accent rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-users text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-dark mb-2">Expert Medical Team</h3>
                                <p class="text-gray-600">Highly qualified doctors and healthcare professionals with years of specialized experience.</p>
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-dark mb-2">24/7 Availability</h3>
                                <p class="text-gray-600">Round-the-clock emergency services and patient care with dedicated support staff.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Stats -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white rounded-2xl p-8 shadow-xl text-center card-hover">
                        <div class="text-5xl font-bold text-primary mb-2 stat-number">18+</div>
                        <div class="text-gray-600 font-medium">Years Experience</div>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-xl text-center card-hover">
                        <div class="text-5xl font-bold text-secondary mb-2 stat-number">50+</div>
                        <div class="text-gray-600 font-medium">Expert Doctors</div>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-xl text-center card-hover">
                        <div class="text-5xl font-bold text-accent mb-2 stat-number">15K+</div>
                        <div class="text-gray-600 font-medium">Happy Patients</div>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-xl text-center card-hover">
                        <div class="text-5xl font-bold text-purple-500 mb-2 stat-number">98%</div>
                        <div class="text-gray-600 font-medium">Success Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Departments -->
    <section id="departments" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-semibold text-sm uppercase tracking-wider">Our Departments</span>
                <h2 class="text-4xl md:text-5xl font-bold text-dark mt-2 mb-4">Specialized Medical Departments</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Comprehensive healthcare across multiple specialties with dedicated departments and expert teams</p>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                <div class="group bg-gradient-to-br from-primary to-secondary rounded-2xl p-6 text-white card-hover cursor-pointer">
                    <i class="fas fa-heartbeat text-4xl mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-xl font-bold mb-2">Cardiology</h3>
                    <p class="text-sm opacity-90">Heart & Vascular Care</p>
                </div>

                <div class="group bg-gradient-to-br from-secondary to-accent rounded-2xl p-6 text-white card-hover cursor-pointer">
                    <i class="fas fa-brain text-4xl mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-xl font-bold mb-2">Neurology</h3>
                    <p class="text-sm opacity-90">Brain & Nervous System</p>
                </div>

                <div class="group bg-gradient-to-br from-accent to-primary rounded-2xl p-6 text-white card-hover cursor-pointer">
                    <i class="fas fa-bone text-4xl mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-xl font-bold mb-2">Orthopedics</h3>
                    <p class="text-sm opacity-90">Bones & Joints</p>
                </div>

                <div class="group bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl p-6 text-white card-hover cursor-pointer">
                    <i class="fas fa-baby text-4xl mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-xl font-bold mb-2">Pediatrics</h3>
                    <p class="text-sm opacity-90">Child Healthcare</p>
                </div>

                <div class="group bg-gradient-to-br from-pink-500 to-red-500 rounded-2xl p-6 text-white card-hover cursor-pointer">
                    <i class="fas fa-female text-4xl mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-xl font-bold mb-2">Gynecology</h3>
                    <p class="text-sm opacity-90">Women's Health</p>
                </div>

                <div class="group bg-gradient-to-br from-red-500 to-orange-500 rounded-2xl p-6 text-white card-hover cursor-pointer">
                    <i class="fas fa-eye text-4xl mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-xl font-bold mb-2">Ophthalmology</h3>
                    <p class="text-sm opacity-90">Eye Care</p>
                </div>

                <div class="group bg-gradient-to-br from-orange-500 to-yellow-500 rounded-2xl p-6 text-white card-hover cursor-pointer">
                    <i class="fas fa-tooth text-4xl mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-xl font-bold mb-2">Dentistry</h3>
                    <p class="text-sm opacity-90">Dental Care</p>
                </div>

                <div class="group bg-gradient-to-br from-yellow-500 to-green-500 rounded-2xl p-6 text-white card-hover cursor-pointer">
                    <i class="fas fa-lungs text-4xl mb-4 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-xl font-bold mb-2">Pulmonology</h3>
                    <p class="text-sm opacity-90">Lung & Respiratory</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-20 gradient-bg text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-white/80 font-semibold text-sm uppercase tracking-wider">Patient Stories</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-2 mb-4">What Our Patients Say</h2>
                <p class="text-xl text-white/80 max-w-2xl mx-auto">Real experiences from real people who trusted us with their health</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="glass rounded-2xl p-8 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-white/90 mb-6 italic">"The cardiac team saved my life. Their quick response and expert care during my emergency was exceptional. Forever grateful to Dr. Sarah and the entire staff."</p>
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div>
                            <div class="font-bold text-white">James Omondi</div>
                            <div class="text-sm text-white/70">Cardiac Patient</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="glass rounded-2xl p-8 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-white/90 mb-6 italic">"Best maternity experience! The gynecology department made my pregnancy journey smooth and stress-free. Clean facilities and caring staff throughout."</p>
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div>
                            <div class="font-bold text-white">Mary Wanjiku</div>
                            <div class="text-sm text-white/70">Maternity Patient</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="glass rounded-2xl p-8 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-white/90 mb-6 italic">"My son's orthopedic surgery was successful thanks to the skilled surgeons here. Modern equipment and professional care exceeded our expectations."</p>
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div>
                            <div class="font-bold text-white">Peter Kamau</div>
                            <div class="text-sm text-white/70">Orthopedic Patient</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section id="doctors" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-semibold text-sm uppercase tracking-wider">Our Medical Team</span>
                <h2 class="text-4xl md:text-5xl font-bold text-dark mt-2 mb-4">Meet Our Expert Doctors</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Highly qualified medical professionals dedicated to your health and wellbeing</p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <!-- Doctor 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="h-64 bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                        <i class="fas fa-user-md text-white text-8xl opacity-50"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark mb-1">Dr. Sarah Mwangi</h3>
                        <p class="text-primary font-semibold mb-3">Chief Cardiologist</p>
                        <p class="text-sm text-gray-600 mb-4">20+ years experience in cardiac surgery and interventional cardiology</p>
                        <div class="flex space-x-2">
                            <a href="#" class="w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
                                <i class="fab fa-linkedin-in text-sm"></i>
                            </a>
                            <a href="#" class="w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
                                <i class="fas fa-envelope text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Doctor 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="h-64 bg-gradient-to-br from-secondary to-accent flex items-center justify-center">
                        <i class="fas fa-user-md text-white text-8xl opacity-50"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark mb-1">Dr. John Kipchoge</h3>
                        <p class="text-secondary font-semibold mb-3">Neurologist</p>
                        <p class="text-sm text-gray-600 mb-4">Specialist in neurological disorders and brain surgery with 15+ years experience</p>
                        <div class="flex space-x-2">
                            <a href="#" class="w-8 h-8 bg-secondary/10 rounded-lg flex items-center justify-center hover:bg-secondary hover:text-white transition-colors">
                                <i class="fab fa-linkedin-in text-sm"></i>
                            </a>
                            <a href="#" class="w-8 h-8 bg-secondary/10 rounded-lg flex items-center justify-center hover:bg-secondary hover:text-white transition-colors">
                                <i class="fas fa-envelope text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Doctor 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="h-64 bg-gradient-to-br from-accent to-primary flex items-center justify-center">
                        <i class="fas fa-user-md text-white text-8xl opacity-50"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark mb-1">Dr. Grace Achieng</h3>
                        <p class="text-accent font-semibold mb-3">Pediatrician</p>
                        <p class="text-sm text-gray-600 mb-4">Expert in child healthcare, vaccines, and developmental disorders</p>
                        <div class="flex space-x-2">
                            <a href="#" class="w-8 h-8 bg-accent/10 rounded-lg flex items-center justify-center hover:bg-accent hover:text-white transition-colors">
                                <i class="fab fa-linkedin-in text-sm"></i>
                            </a>
                            <a href="#" class="w-8 h-8 bg-accent/10 rounded-lg flex items-center justify-center hover:bg-accent hover:text-white transition-colors">
                                <i class="fas fa-envelope text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Doctor 4 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="h-64 bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center">
                        <i class="fas fa-user-md text-white text-8xl opacity-50"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark mb-1">Dr. David Otieno</h3>
                        <p class="text-purple-500 font-semibold mb-3">Orthopedic Surgeon</p>
                        <p class="text-sm text-gray-600 mb-4">Specialized in joint replacement and sports injury treatment</p>
                        <div class="flex space-x-2">
                            <a href="#" class="w-8 h-8 bg-purple-500/10 rounded-lg flex items-center justify-center hover:bg-purple-500 hover:text-white transition-colors">
                                <i class="fab fa-linkedin-in text-sm"></i>
                            </a>
                            <a href="#" class="w-8 h-8 bg-purple-500/10 rounded-lg flex items-center justify-center hover:bg-purple-500 hover:text-white transition-colors">
                                <i class="fas fa-envelope text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center space-x-2 gradient-bg text-white px-8 py-4 rounded-xl hover:shadow-2xl transition-all duration-300 font-semibold">
                    <span>View All Doctors</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-20 gradient-bg text-white relative overflow-hidden">
        <div class="floating-shape w-96 h-96 bg-white/10 top-0 -right-48"></div>
        <div class="floating-shape w-64 h-64 bg-white/10 bottom-0 -left-32"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Book Your Appointment?</h2>
                <p class="text-xl text-white/90 mb-8">Get in touch with us today and experience world-class healthcare</p>
                
                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="glass rounded-2xl p-6">
                        <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-phone-alt text-2xl"></i>
                        </div>
                        <h3 class="font-bold mb-2">Call Us</h3>
                        <p class="text-white/80">+254 700 123 456</p>
                    </div>

                    <div class="glass rounded-2xl p-6">
                        <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-envelope text-2xl"></i>
                        </div>
                        <h3 class="font-bold mb-2">Email Us</h3>
                        <p class="text-white/80">info@healthcareplus.co.ke</p>
                    </div>

                    <div class="glass rounded-2xl p-6">
                        <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-map-marker-alt text-2xl"></i>
                        </div>
                        <h3 class="font-bold mb-2">Visit Us</h3>
                        <p class="text-white/80">Nairobi, Kenya</p>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="bg-white text-primary px-8 py-4 rounded-xl hover:shadow-2xl transition-all duration-300 font-semibold inline-flex items-center space-x-2">
                        <i class="fas fa-calendar-check"></i>
                        <span>Book Appointment Online</span>
                    </a>
                    <a href="#" class="glass text-white px-8 py-4 rounded-xl hover:bg-white/20 transition-all duration-300 font-semibold inline-flex items-center space-x-2">
                        <i class="fab fa-whatsapp"></i>
                        <span>WhatsApp Us</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <!-- About -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center">
                            <i class="fas fa-heartbeat text-white text-xl"></i>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold">HealthCare<span class="text-primary">Plus</span></h1>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-4">Your trusted partner in health, providing quality medical care with compassion and excellence.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">About Us</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-primary transition-colors">Services</a></li>
                        <li><a href="#departments" class="text-gray-400 hover:text-primary transition-colors">Departments</a></li>
                        <li><a href="#doctors" class="text-gray-400 hover:text-primary transition-colors">Our Doctors</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Careers</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Emergency Care</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Lab Services</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Diagnostic Imaging</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Pharmacy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Health Packages</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Contact Info</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-primary mt-1"></i>
                            <span class="text-gray-400">Nairobi CBD, Kenya</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-phone text-primary mt-1"></i>
                            <span class="text-gray-400">+254 700 123 456</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-envelope text-primary mt-1"></i>
                            <span class="text-gray-400">info@healthcareplus.co.ke</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-clock text-primary mt-1"></i>
                            <span class="text-gray-400">24/7 Emergency Services</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2025 HealthCare Plus. All rights reserved.</p>
                    <div class="flex space-x-6 text-sm">
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="#" class="fixed bottom-6 right-6 w-16 h-16 bg-green-500 rounded-full flex items-center justify-center shadow-2xl hover:scale-110 transition-transform z-50 animate-pulse-slow">
        <i class="fab fa-whatsapp text-white text-3xl"></i>
    </a>

    <!-- Scroll to Top Button -->
    <button id="scrollTop" class="hidden fixed bottom-6 left-6 w-14 h-14 bg-primary rounded-full flex items-center justify-center shadow-2xl hover:scale-110 transition-transform z-50">
        <i class="fas fa-arrow-up text-white text-xl"></i>
    </button>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

        // Scroll to top button
        const scrollTopBtn = document.getElementById('scrollTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.remove('hidden');
            } else {
                scrollTopBtn.classList.add('hidden');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Animate numbers on scroll
        const animateValue = (element, start, end, duration) => {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                element.textContent = value + (element.textContent.includes('+') ? '+' : '') + (element.textContent.includes('%') ? '%' : '');
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        };

        // Intersection Observer for stat counters
        const statObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statElements = entry.target.querySelectorAll('.stat-number');
                    statElements.forEach(el => {
                        const text = el.textContent;
                        const value = parseInt(text.replace(/\D/g, ''));
                        animateValue(el, 0, value, 2000);
                    });
                    statObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        // Observe all sections with stat numbers
        document.querySelectorAll('section').forEach(section => {
            if (section.querySelector('.stat-number')) {
                statObserver.observe(section);
            }
        });
    </script>
</body>
</html>