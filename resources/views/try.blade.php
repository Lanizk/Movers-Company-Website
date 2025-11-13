<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GraceCare Hospital - Compassionate Care, Modern Medicine</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafa;
        }
        
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
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }
        
        .animate-scale-in {
            animation: scaleIn 1.2s ease-out forwards;
        }
        
        .animate-delay-200 {
            animation-delay: 0.2s;
            opacity: 0;
        }
        
        .animate-delay-400 {
            animation-delay: 0.4s;
            opacity: 0;
        }
        
        .animate-delay-600 {
            animation-delay: 0.6s;
            opacity: 0;
        }
        
        .animate-delay-800 {
            animation-delay: 0.8s;
            opacity: 0;
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }
        
        .btn-pulse:hover {
            animation: pulse 1s infinite;
        }
    </style>
</head>
<body class="text-gray-800">
    
    <!-- Header / Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold text-[#023047]">
                    GraceCare <span class="text-[#0077b6]">Hospital</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-[#0077b6] transition-colors duration-300">Home</a>
                    <a href="#about" class="text-gray-700 hover:text-[#0077b6] transition-colors duration-300">About Us</a>
                    <a href="#services" class="text-gray-700 hover:text-[#0077b6] transition-colors duration-300">Departments</a>
                    <a href="#doctors" class="text-gray-700 hover:text-[#0077b6] transition-colors duration-300">Doctors</a>
                    <a href="#contact" class="text-gray-700 hover:text-[#0077b6] transition-colors duration-300">Contact</a>
                </div>
                <button class="bg-[#34d399] text-white px-6 py-2 rounded-full hover:bg-[#2bb380] transition-all duration-300 hover:shadow-lg">
                    Book Now
                </button>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="relative bg-gradient-to-br from-[#0077b6] to-[#023047] text-white overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="container mx-auto px-6 py-32 relative z-10">
            <div class="max-w-3xl animate-fade-in-up">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                    Compassionate Care, Modern Medicine
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-100 animate-fade-in-up animate-delay-200">
                    We're committed to healing with heart and expertise. Discover a hospital experience built around you.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up animate-delay-400">
                    <button class="bg-[#34d399] text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-[#2bb380] transition-all duration-300 btn-pulse shadow-lg">
                        Book Appointment
                    </button>
                    <button class="bg-white text-[#0077b6] px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg">
                        Our Services
                    </button>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-64 bg-gradient-to-t from-[#f9fafa] to-transparent"></div>
        <!-- Photo Placeholder -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gray-300 opacity-10 animate-scale-in">
            <div class="flex items-center justify-center h-full text-white text-2xl">
                Hero Image Placeholder
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 animate-fade-in-up">
                    <div class="bg-gray-200 h-[400px] rounded-2xl flex items-center justify-center text-gray-500 text-xl overflow-hidden hover:scale-105 transition-transform duration-700">
                        Doctor & Patient Photo Placeholder
                    </div>
                </div>
                <div class="order-1 md:order-2 animate-fade-in-up animate-delay-200">
                    <h2 class="text-4xl font-bold text-[#023047] mb-6">
                        Where Technology Meets Compassion
                    </h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        At GraceCare Hospital, we believe healing begins with understanding. Our team combines cutting-edge medical technology with genuine human connection to provide care that treats not just symptoms, but the whole person.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Every patient's journey is unique, and we're here to walk alongside you with expertise, empathy, and unwavering support.
                    </p>
                    <button class="bg-[#0077b6] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#005a8c] transition-all duration-300 hover:shadow-lg">
                        Learn More About Us
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-[#f9fafa]">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl font-bold text-[#023047] mb-4">Our Departments</h2>
                <p class="text-xl text-gray-600">Comprehensive healthcare services tailored to your needs</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-md hover-lift animate-fade-in-up">
                    <div class="bg-[#90e0ef] h-16 w-16 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#023047]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#023047] mb-3">Cardiology</h3>
                    <p class="text-gray-600 leading-relaxed">Advanced heart care with state-of-the-art diagnostic and treatment options for all cardiac conditions.</p>
                </div>
                
                <!-- Service Card 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-md hover-lift animate-fade-in-up animate-delay-200">
                    <div class="bg-[#34d399] h-16 w-16 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#023047] mb-3">Emergency Care</h3>
                    <p class="text-gray-600 leading-relaxed">24/7 emergency services with rapid response teams ready to provide critical care when you need it most.</p>
                </div>
                
                <!-- Service Card 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-md hover-lift animate-fade-in-up animate-delay-400">
                    <div class="bg-[#ffb5a7] h-16 w-16 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#023047]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#023047] mb-3">Pediatrics</h3>
                    <p class="text-gray-600 leading-relaxed">Specialized care for children in a warm, friendly environment designed to make young patients feel safe.</p>
                </div>
                
                <!-- Service Card 4 -->
                <div class="bg-white rounded-2xl p-8 shadow-md hover-lift animate-fade-in-up animate-delay-600">
                    <div class="bg-[#90e0ef] h-16 w-16 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#023047]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#023047] mb-3">Laboratory</h3>
                    <p class="text-gray-600 leading-relaxed">Precision diagnostics with cutting-edge lab technology ensuring accurate results and faster treatment.</p>
                </div>
                
                <!-- Service Card 5 -->
                <div class="bg-white rounded-2xl p-8 shadow-md hover-lift animate-fade-in-up animate-delay-800">
                    <div class="bg-[#34d399] h-16 w-16 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#023047] mb-3">Surgery</h3>
                    <p class="text-gray-600 leading-relaxed">World-class surgical expertise with minimally invasive techniques and compassionate post-operative care.</p>
                </div>
                
                <!-- Service Card 6 -->
                <div class="bg-white rounded-2xl p-8 shadow-md hover-lift animate-fade-in-up animate-delay-800">
                    <div class="bg-[#ffb5a7] h-16 w-16 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#023047]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#023047] mb-3">Mental Health</h3>
                    <p class="text-gray-600 leading-relaxed">Comprehensive mental health support in a safe, judgment-free environment with expert therapists.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section id="doctors" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl font-bold text-[#023047] mb-4">Meet Our Specialists</h2>
                <p class="text-xl text-gray-600">Expert physicians dedicated to your wellbeing</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Doctor Card 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift animate-fade-in-up">
                    <div class="bg-gray-200 h-64 flex items-center justify-center text-gray-500">
                        Doctor Photo Placeholder
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-2xl font-bold text-[#023047] mb-2">Dr. Sarah Mitchell</h3>
                        <p class="text-[#0077b6] font-semibold mb-4">Chief Cardiologist</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="text-gray-400 hover:text-[#0077b6] transition-colors duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Doctor Card 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift animate-fade-in-up animate-delay-200">
                    <div class="bg-gray-200 h-64 flex items-center justify-center text-gray-500">
                        Doctor Photo Placeholder
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-2xl font-bold text-[#023047] mb-2">Dr. James Chen</h3>
                        <p class="text-[#0077b6] font-semibold mb-4">Pediatric Surgeon</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="text-gray-400 hover:text-[#0077b6] transition-colors duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Doctor Card 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift animate-fade-in-up animate-delay-400">
                    <div class="bg-gray-200 h-64 flex items-center justify-center text-gray-500">
                        Doctor Photo Placeholder
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-2xl font-bold text-[#023047] mb-2">Dr. Emily Rodriguez</h3>
                        <p class="text-[#0077b6] font-semibold mb-4">Neurologist</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="text-gray-400 hover:text-[#0077b6] transition-colors duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-[#f9fafa]">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl font-bold text-[#023047] mb-4">What Our Patients Say</h2>
                <p class="text-xl text-gray-600">Real stories from the people we care for</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-md hover-lift animate-fade-in-up">
                    <div class="flex items-center mb-6">
                        <div class="bg-gray-200 h-16 w-16 rounded-full flex items-center justify-center text-gray-500 text-xs mr-4">
                            Photo
                        </div>
                        <div>
                            <h4 class="font-bold text-[#023047]">Maria Thompson</h4>
                            <p class="text-sm text-gray-500">Heart Surgery Patient</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic leading-relaxed">
                        "The care I received was extraordinary. Every nurse, every doctor treated me like family. I felt safe, heard, and genuinely cared for throughout my entire journey."
                    </p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-md hover-lift animate-fade-in-up animate-delay-200">
                    <div class="flex items-center mb-6">
                        <div class="bg-gray-200 h-16 w-16 rounded-full flex items-center justify-center text-gray-500 text-xs mr-4">
                            Photo
                        </div>
                        <div>
                            <h4 class="font-bold text-[#023047]">Robert Johnson</h4>
                            <p class="text-sm text-gray-500">Emergency Care</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic leading-relaxed">
                        "When my son had an emergency, GraceCare responded immediately. The speed and professionalism of the team saved his life. We're forever grateful."
                    </p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-md hover-lift animate-fade-in-up animate-delay-400">
                    <div class="flex items-center mb-6">
                        <div class="bg-gray-200 h-16 w-16 rounded-full flex items-center justify-center text-gray-500 text-xs mr-4">
                            Photo
                        </div>
                        <div>
                            <h4 class="font-bold text-[#023047]">Linda Parker</h4>
                            <p class="text-sm text-gray-500">Maternity Ward</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic leading-relaxed">
                        "Bringing my daughter into the world at GraceCare was magical. The staff made what could have been scary feel beautiful and empowering. Thank you for everything."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="relative py-24 bg-gradient-to-r from-[#0077b6] to-[#023047] text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="bg-gray-300 h-full w-full flex items-center justify-center text-white text-2xl">
                Consultation Background
            </div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center animate-fade-in-up">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Your Health, Our Priority</h2>
            <p class="text-xl md:text-2xl mb-8 text-gray-100">
                Book your appointment today and experience care that feels personal
            </p>
            <button class="bg-[#34d399] text-white px-10 py-5 rounded-full text-lg font-semibold hover:bg-[#2bb380] transition-all duration-300 btn-pulse shadow-2xl">
                Book Appointment Now
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-[#023047] text-white py-16">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <!-- About Column -->
                <div>
                    <h3 class="text-2xl font-bold mb-4">GraceCare Hospital</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Providing compassionate, world-class healthcare to our community since 1985.
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#about" class="text-gray-300 hover:text-[#34d399] transition-colors duration-300">About Us</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-[#34d399] transition-colors duration-300">Departments</a></li>
                        <li><a href="#doctors" class="text-gray-300 hover:text-[#34d399] transition-colors duration-300">Our Doctors</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-[#34d399] transition-colors duration-300">Careers</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li>123 Healthcare Drive</li>
                        <li>Medical District, MC 12345</li>
                        <li class="pt-2">Phone: (555) 123-4567</li>
                        <li>Email: info@gracecare.com</li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <p class="text-gray-300 mb-4">Stay updated with health tips and news</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email" class="flex-1 px-4 py-2 rounded-l-full text-gray-800 focus:outline-none">
                        <button class="bg-[#34d399] px-6 py-2 rounded-r-full hover:bg-[#2bb380] transition-colors duration-300">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Social Media & Copyright -->
            <div class="border-t border-gray-700 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="flex space-x-6 mb-4 md:mb-0">
                        <a href="#" class="text-gray-300 hover:text-[#34d399] transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-[#34d399] transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-[#34d399] transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-[#34d399] transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                    <p class="text-gray-400 text-sm">
                        © 2025 GraceCare Hospital. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>