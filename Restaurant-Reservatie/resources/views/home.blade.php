<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant De Smaak - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        .font-playfair { font-family: 'Playfair Display', serif; }
        .font-lato { font-family: 'Lato', sans-serif; }
        
        /* Loading animation */
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #1c1917;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        .loader.hidden {
            opacity: 0;
            visibility: hidden;
        }
        .loader-content {
            text-align: center;
        }
        .loader-spinner {
            width: 60px;
            height: 60px;
            border: 4px solid #b45309;
            border-top-color: transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Scroll animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .slide-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        .slide-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        .slide-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        .slide-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        /* Parallax effect */
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #b45309;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(180, 83, 9, 0.4);
        }
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
        .back-to-top:hover {
            background: #92400e;
            transform: translateY(-5px);
        }
        
        /* Mobile menu */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 80%;
            max-width: 400px;
            height: 100vh;
            background: white;
            z-index: 1001;
            transition: right 0.3s ease;
            box-shadow: -5px 0 30px rgba(0,0,0,0.1);
        }
        .mobile-menu.open {
            right: 0;
        }
        .mobile-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        .mobile-overlay.open {
            opacity: 1;
            visibility: visible;
        }
        
        /* Hero text animation */
        .hero-text {
            animation: fadeInUp 1s ease forwards;
        }
        .hero-text-delay-1 {
            animation: fadeInUp 1s ease 0.2s forwards;
            opacity: 0;
        }
        .hero-text-delay-2 {
            animation: fadeInUp 1s ease 0.4s forwards;
            opacity: 0;
        }
        .hero-text-delay-3 {
            animation: fadeInUp 1s ease 0.6s forwards;
            opacity: 0;
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
        
        /* Card hover effects */
        .menu-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .menu-card:hover {
            transform: translateY(-10px);
        }
        
        /* Button pulse animation */
        .btn-pulse {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(180, 83, 9, 0.7); }
            50% { box-shadow: 0 0 0 15px rgba(180, 83, 9, 0); }
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f5f5f4;
        }
        ::-webkit-scrollbar-thumb {
            background: #b45309;
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #92400e;
        }
        
        /* Form focus effects */
        .form-input:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(180, 83, 9, 0.15);
        }
        
        /* Stats counter animation */
        .stat-number {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="font-lato bg-stone-50 text-stone-800 overflow-x-hidden">
    <!-- Loading Screen -->
    <div class="loader" id="loader">
        <div class="loader-content">
            <div class="loader-spinner"></div>
            <p class="font-playfair text-2xl text-amber-500">De Smaak</p>
            <p class="text-stone-400 mt-2">Laden...</p>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="p-8">
            <div class="flex justify-between items-center mb-8">
                <div class="font-playfair text-2xl font-bold text-amber-700">De Smaak</div>
                <button id="closeMobileMenu" class="text-stone-600 hover:text-amber-700 transition">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <nav class="space-y-6">
                <a href="#home" class="block text-xl text-stone-700 hover:text-amber-700 transition mobile-nav-link">Home</a>
                <a href="#about" class="block text-xl text-stone-700 hover:text-amber-700 transition mobile-nav-link">Over Ons</a>
                <a href="#menu" class="block text-xl text-stone-700 hover:text-amber-700 transition mobile-nav-link">Menu</a>
                <a href="#reservations" class="block text-xl text-stone-700 hover:text-amber-700 transition mobile-nav-link">Reserveren</a>
                <a href="#contact" class="block text-xl text-stone-700 hover:text-amber-700 transition mobile-nav-link">Contact</a>
            </nav>
            <div class="mt-8">
                <a href="#reservations" class="block w-full bg-amber-700 text-white text-center py-3 rounded-full hover:bg-amber-800 transition font-semibold mobile-nav-link">
                    Tafel Reserveren
                </a>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full bg-white/95 backdrop-blur-sm shadow-sm z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="font-playfair text-2xl font-bold text-amber-700">De Smaak</div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-stone-600 hover:text-amber-700 transition relative group">
                        Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-amber-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#about" class="text-stone-600 hover:text-amber-700 transition relative group">
                        Over Ons
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-amber-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#menu" class="text-stone-600 hover:text-amber-700 transition relative group">
                        Menu
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-amber-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#reservations" class="text-stone-600 hover:text-amber-700 transition relative group">
                        Reserveren
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-amber-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#contact" class="text-stone-600 hover:text-amber-700 transition relative group">
                        Contact
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-amber-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    <button class="hidden md:block bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition btn-pulse">
                        Tafel Reserveren
                    </button>
                    <button id="mobileMenuBtn" class="md:hidden text-stone-600 hover:text-amber-700 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen flex items-center justify-center bg-cover bg-center parallax" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1920');">
        <div class="text-center text-white px-4">
            <p class="text-amber-300 tracking-widest uppercase mb-4 hero-text">Welkom bij</p>
            <h1 class="font-playfair text-5xl md:text-7xl lg:text-8xl font-bold mb-6 hero-text-delay-1">Restaurant De Smaak</h1>
            <p class="text-xl md:text-2xl lg:text-3xl mb-8 max-w-2xl mx-auto font-light hero-text-delay-2">
                Ervaar de kunst van fijnproeven in een warme en elegante sfeer
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center hero-text-delay-3">
                <a href="#menu" class="bg-amber-700 text-white px-8 py-4 rounded-full hover:bg-amber-800 transition text-lg font-semibold transform hover:scale-105 duration-300 shadow-lg">
                    Bekijk Menu
                </a>
                <a href="#reservations" class="border-2 border-white text-white px-8 py-4 rounded-full hover:bg-white hover:text-stone-800 transition text-lg font-semibold transform hover:scale-105 duration-300">
                    Reserveren
                </a>
            </div>
        </div>
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="slide-left">
                    <p class="text-amber-700 tracking-widest uppercase mb-2">Over Ons</p>
                    <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-6">Ons Verhaal</h2>
                    <p class="text-stone-600 leading-relaxed mb-4">
                        Al meer dan 25 jaar verwelkomt Restaurant De Smaak gasten met een passie voor culinaire excellentie. 
                        Onze keuken combineert traditionele technieken met moderne creativiteit.
                    </p>
                    <p class="text-stone-600 leading-relaxed mb-6">
                        Wij geloven in het gebruik van verse, lokale ingrediënten om gerechten te creëren die niet alleen 
                        heerlijk zijn, maar ook een verhaal vertellen. Elk gerecht is met liefde bereid door ons toegewijde team.
                    </p>
                    <div class="flex gap-8">
                        <div class="text-center stat-item">
                            <p class="font-playfair text-4xl md:text-5xl font-bold text-amber-700 stat-number" data-target="25">0</p>
                            <p class="text-stone-600">Jaar Ervaring</p>
                        </div>
                        <div class="text-center stat-item">
                            <p class="font-playfair text-4xl md:text-5xl font-bold text-amber-700 stat-number" data-target="50">0</p>
                            <p class="text-stone-600">Gerechten</p>
                        </div>
                        <div class="text-center stat-item">
                            <p class="font-playfair text-4xl md:text-5xl font-bold text-amber-700 stat-number" data-target="15">0</p>
                            <p class="text-stone-600">k+ Tevreden Gasten</p>
                        </div>
                    </div>
                </div>
                <div class="relative slide-right">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800" alt="Restaurant interior" class="rounded-lg shadow-2xl transform hover:scale-105 transition duration-500">
                    <div class="absolute -bottom-6 -left-6 bg-amber-700 text-white p-6 rounded-lg shadow-xl transform hover:scale-105 transition duration-300">
                        <p class="font-playfair text-2xl font-bold">⭐ 4.9</p>
                        <p class="text-sm">500+ Reviews</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-20 bg-stone-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <p class="text-amber-700 tracking-widest uppercase mb-2">Onze Specialiteiten</p>
                <h2 class="font-playfair text-4xl md:text-5xl font-bold">Populaire Gerechten</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Menu Item 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition menu-card fade-in">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?w=600" alt="Dish" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-amber-700 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">€28</div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-playfair text-xl font-bold mb-2">Zalm Filet</h3>
                        <p class="text-stone-600 text-sm mb-4">Verse zalm met citroen-dillesaus en seizoensgroenten</p>
                        <button class="w-full bg-amber-700 text-white py-3 rounded-lg hover:bg-amber-800 transition font-semibold transform hover:scale-105 duration-300">
                            Bestel Nu →
                        </button>
                    </div>
                </div>
                <!-- Menu Item 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition menu-card fade-in" style="animation-delay: 0.2s;">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600" alt="Dish" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-amber-700 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">€32</div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-playfair text-xl font-bold mb-2">Biefstuk</h3>
                        <p class="text-stone-600 text-sm mb-4">Malse biefstuk met pepersaus en gebakken aardappelen</p>
                        <button class="w-full bg-amber-700 text-white py-3 rounded-lg hover:bg-amber-800 transition font-semibold transform hover:scale-105 duration-300">
                            Bestel Nu →
                        </button>
                    </div>
                </div>
                <!-- Menu Item 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition menu-card fade-in" style="animation-delay: 0.4s;">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600" alt="Dish" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-amber-700 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">€24</div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-playfair text-xl font-bold mb-2">Pizza Margherita</h3>
                        <p class="text-stone-600 text-sm mb-4">Huisgemaakte pizza met mozzarella, tomaat en basilicum</p>
                        <button class="w-full bg-amber-700 text-white py-3 rounded-lg hover:bg-amber-800 transition font-semibold transform hover:scale-105 duration-300">
                            Bestel Nu →
                        </button>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12 fade-in">
                <a href="#" class="inline-block border-2 border-amber-700 text-amber-700 px-8 py-4 rounded-full hover:bg-amber-700 hover:text-white transition text-lg font-semibold transform hover:scale-105 duration-300">
                    Bekijk Volledige Menu
                </a>
            </div>
        </div>
    </section>

    <!-- Reservations Section -->
    <section id="reservations" class="py-20 bg-amber-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white slide-left">
                    <p class="text-amber-200 tracking-widest uppercase mb-2">Reserveren</p>
                    <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-6">Reserveer Uw Tafel</h2>
                    <p class="text-amber-100 mb-8 text-lg">
                        Geniet van een onvergetelijke dinerervaring. Reserveer nu en wij zorgen voor de rest.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 transform hover:translate-x-2 transition duration-300">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-2xl">📞</div>
                            <div>
                                <p class="font-semibold">Bel Ons</p>
                                <p class="text-amber-200">+31 20 123 4567</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 transform hover:translate-x-2 transition duration-300">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-2xl">📧</div>
                            <div>
                                <p class="font-semibold">Email</p>
                                <p class="text-amber-200">info@desmaak.nl</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-8 shadow-2xl slide-right">
                    <form id="reservationForm" class="space-y-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-stone-700 font-semibold mb-2">Naam</label>
                                <input type="text" class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700 form-input transition duration-300" placeholder="Uw naam" required>
                            </div>
                            <div>
                                <label class="block text-stone-700 font-semibold mb-2">Telefoon</label>
                                <input type="tel" class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700 form-input transition duration-300" placeholder="06 12345678" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-stone-700 font-semibold mb-2">Datum</label>
                                <input type="date" class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700 form-input transition duration-300" required>
                            </div>
                            <div>
                                <label class="block text-stone-700 font-semibold mb-2">Tijd</label>
                                <select class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700 form-input transition duration-300" required>
                                    <option>17:00</option>
                                    <option>18:00</option>
                                    <option>19:00</option>
                                    <option>20:00</option>
                                    <option>21:00</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-stone-700 font-semibold mb-2">Aantal Personen</label>
                            <select class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700 form-input transition duration-300" required>
                                <option>1 persoon</option>
                                <option>2 personen</option>
                                <option>3 personen</option>
                                <option>4 personen</option>
                                <option>5+ personen</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-stone-700 font-semibold mb-2">Speciale Wensen</label>
                            <textarea class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700 form-input transition duration-300 h-24" placeholder="Allergieën, speciale gelegenheden, etc."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-amber-700 text-white py-3 rounded-lg hover:bg-amber-800 transition font-semibold text-lg transform hover:scale-105 duration-300 shadow-lg">
                            Reservering Bevestigen
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <p class="text-amber-700 tracking-widest uppercase mb-2">Contact</p>
                <h2 class="font-playfair text-4xl md:text-5xl font-bold">Bezoek Ons</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-stone-50 rounded-xl transform hover:scale-105 transition duration-300 hover:shadow-xl fade-in">
                    <div class="w-16 h-16 bg-amber-700 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">📍</div>
                    <h3 class="font-playfair text-xl font-bold mb-2">Adres</h3>
                    <p class="text-stone-600">Hoofdstraat 123<br>1234 AB Amsterdam</p>
                </div>
                <div class="text-center p-8 bg-stone-50 rounded-xl transform hover:scale-105 transition duration-300 hover:shadow-xl fade-in" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 bg-amber-700 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">🕐</div>
                    <h3 class="font-playfair text-xl font-bold mb-2">Openingstijden</h3>
                    <p class="text-stone-600">Ma - Do: 17:00 - 22:00<br>Vr - Za: 17:00 - 23:00<br>Zo: 12:00 - 21:00</p>
                </div>
                <div class="text-center p-8 bg-stone-50 rounded-xl transform hover:scale-105 transition duration-300 hover:shadow-xl fade-in" style="animation-delay: 0.4s;">
                    <div class="w-16 h-16 bg-amber-700 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">📞</div>
                    <h3 class="font-playfair text-xl font-bold mb-2">Contact</h3>
                    <p class="text-stone-600">Tel: +31 20 123 4567<br>Email: info@desmaak.nl</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-stone-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="fade-in">
                    <h3 class="font-playfair text-2xl font-bold text-amber-500 mb-4">De Smaak</h3>
                    <p class="text-stone-400">Ervaar de kunst van fijnproeven in een warme en elegante sfeer.</p>
                </div>
                <div class="fade-in" style="animation-delay: 0.1s;">
                    <h4 class="font-semibold mb-4">Snelle Links</h4>
                    <ul class="space-y-2 text-stone-400">
                        <li><a href="#home" class="hover:text-amber-500 transition transform hover:translate-x-1 inline-block">Home</a></li>
                        <li><a href="#about" class="hover:text-amber-500 transition transform hover:translate-x-1 inline-block">Over Ons</a></li>
                        <li><a href="#menu" class="hover:text-amber-500 transition transform hover:translate-x-1 inline-block">Menu</a></li>
                        <li><a href="#reservations" class="hover:text-amber-500 transition transform hover:translate-x-1 inline-block">Reserveren</a></li>
                    </ul>
                </div>
                <div class="fade-in" style="animation-delay: 0.2s;">
                    <h4 class="font-semibold mb-4">Openingstijden</h4>
                    <ul class="space-y-2 text-stone-400">
                        <li>Ma - Do: 17:00 - 22:00</li>
                        <li>Vr - Za: 17:00 - 23:00</li>
                        <li>Zo: 12:00 - 21:00</li>
                    </ul>
                </div>
                <div class="fade-in" style="animation-delay: 0.3s;">
                    <h4 class="font-semibold mb-4">Volg Ons</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-stone-800 rounded-full flex items-center justify-center hover:bg-amber-700 transition transform hover:scale-110 duration-300">📘</a>
                        <a href="#" class="w-10 h-10 bg-stone-800 rounded-full flex items-center justify-center hover:bg-amber-700 transition transform hover:scale-110 duration-300">📸</a>
                        <a href="#" class="w-10 h-10 bg-stone-800 rounded-full flex items-center justify-center hover:bg-amber-700 transition transform hover:scale-110 duration-300">🐦</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-stone-800 mt-8 pt-8 text-center text-stone-400">
                <p>&copy; 2024 Restaurant De Smaak. Alle rechten voorbehouden.</p>
            </div>
        </div>
    </footer>

    <script>
        // Loading screen
        window.addEventListener('load', function() {
            const loader = document.getElementById('loader');
            setTimeout(() => {
                loader.classList.add('hidden');
            }, 1000);
        });

        // Mobile menu
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileOverlay = document.getElementById('mobileOverlay');
        const closeMobileMenu = document.getElementById('closeMobileMenu');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

        function openMobileMenu() {
            mobileMenu.classList.add('open');
            mobileOverlay.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenuFn() {
            mobileMenu.classList.remove('open');
            mobileOverlay.classList.remove('open');
            document.body.style.overflow = '';
        }

        mobileMenuBtn.addEventListener('click', openMobileMenu);
        closeMobileMenu.addEventListener('click', closeMobileMenuFn);
        mobileOverlay.addEventListener('click', closeMobileMenuFn);
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenuFn);
        });

        // Back to top button
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 500) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in, .slide-left, .slide-right').forEach(el => {
            observer.observe(el);
        });

        // Counter animation for statistics
        const statNumbers = document.querySelectorAll('.stat-number');
        let statsAnimated = false;

        function animateStats() {
            if (statsAnimated) return;
            
            statNumbers.forEach(stat => {
                const target = parseInt(stat.getAttribute('data-target'));
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;

                const counter = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        stat.textContent = target + '+';
                        clearInterval(counter);
                    } else {
                        stat.textContent = Math.floor(current) + '+';
                    }
                }, 16);
            });
            
            statsAnimated = true;
        }

        // Trigger stats animation when about section is visible
        const aboutSection = document.getElementById('about');
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateStats();
                }
            });
        }, { threshold: 0.5 });

        statsObserver.observe(aboutSection);

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const navbarHeight = navbar.offsetHeight;
                    const targetPosition = target.offsetTop - navbarHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Form validation and submission
        const reservationForm = document.getElementById('reservationForm');
        reservationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = this.querySelector('input[type="text"]').value;
            const phone = this.querySelector('input[type="tel"]').value;
            const date = this.querySelector('input[type="date"]').value;
            const time = this.querySelector('select:nth-of-type(2)').value;
            const guests = this.querySelector('select:nth-of-type(3)').value;
            const special = this.querySelector('textarea').value;

            // Simple validation
            if (!name || !phone || !date || !time || !guests) {
                alert('Vul alstublieft alle verplichte velden in.');
                return;
            }

            // Show success message
            alert(`Bedankt voor uw reservering, ${name}!\n\nDatum: ${date}\nTijd: ${time}\nAantal personen: ${guests}\n\nWij nemen binnen 24 uur contact met u op.`);
            this.reset();
        });

        // Add active state to navigation links based on scroll position
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('nav a[href^="#"]');

        window.addEventListener('scroll', function() {
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop - navbar.offsetHeight - 100;
                const sectionHeight = section.clientHeight;
                
                if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('text-amber-700');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('text-amber-700');
                }
            });
        });

        // Parallax effect for hero section (disable on mobile for performance)
        if (window.innerWidth > 768) {
            window.addEventListener('scroll', function() {
                const hero = document.getElementById('home');
                const scrolled = window.scrollY;
                hero.style.backgroundPositionY = scrolled * 0.5 + 'px';
            });
        }
    </script>
</body>
</html>
