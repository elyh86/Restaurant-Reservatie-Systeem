<!-- Navigation partial: mobile overlay, mobile menu, and primary nav -->
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
        <div class="mt-8 space-y-4">
            @auth
                <a href="{{ route('reservations.index') }}" class="block w-full text-center text-stone-700 hover:text-amber-700 transition font-semibold mobile-nav-link">Mijn Reserveringen</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-center text-stone-700 hover:text-amber-700 transition font-semibold mobile-nav-link">Uitloggen</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block w-full text-center text-stone-700 hover:text-amber-700 transition font-semibold mobile-nav-link">Inloggen</a>
                <a href="{{ route('register') }}" class="block w-full border-2 border-amber-700 text-amber-700 text-center py-3 rounded-full hover:bg-amber-700 hover:text-white transition font-semibold mobile-nav-link">Registreren</a>
            @endauth
            <a href="{{ route('reservations.create') }}" class="block w-full bg-amber-700 text-white text-center py-3 rounded-full hover:bg-amber-800 transition font-semibold mobile-nav-link">Tafel Reserveren</a>
        </div>
    </div>
</div>

<!-- Primary Navigation -->
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
                @auth
                    <a href="{{ route('reservations.index') }}" class="hidden md:block text-stone-600 hover:text-amber-700 transition font-semibold">Mijn Reserveringen</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="hidden md:block text-stone-600 hover:text-amber-700 transition font-semibold">Uitloggen</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="hidden md:block text-stone-600 hover:text-amber-700 transition font-semibold">Inloggen</a>
                    <a href="{{ route('register') }}" class="hidden md:block border-2 border-amber-700 text-amber-700 px-4 py-2 rounded-full hover:bg-amber-700 hover:text-white transition font-semibold">Registreren</a>
                @endauth
                <a href="{{ route('reservations.create') }}" class="hidden md:block bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition">Tafel Reserveren</a>
                <button id="mobileMenuBtn" class="md:hidden text-stone-600 hover:text-amber-700 transition">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
