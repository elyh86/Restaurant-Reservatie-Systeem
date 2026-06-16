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
    </style>
</head>
<body class="font-lato bg-stone-50 text-stone-800">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white/95 backdrop-blur-sm shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="font-playfair text-2xl font-bold text-amber-700">De Smaak</div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-stone-600 hover:text-amber-700 transition">Home</a>
                    <a href="#about" class="text-stone-600 hover:text-amber-700 transition">Over Ons</a>
                    <a href="#menu" class="text-stone-600 hover:text-amber-700 transition">Menu</a>
                    <a href="#reservations" class="text-stone-600 hover:text-amber-700 transition">Reserveren</a>
                    <a href="#contact" class="text-stone-600 hover:text-amber-700 transition">Contact</a>
                </div>
                <button class="bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition">
                    Tafel Reserveren
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen flex items-center justify-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1920');">
        <div class="text-center text-white px-4">
            <p class="text-amber-300 tracking-widest uppercase mb-4">Welkom bij</p>
            <h1 class="font-playfair text-5xl md:text-7xl font-bold mb-6">Restaurant De Smaak</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto font-light">
                Ervaar de kunst van fijnproeven in een warme en elegante sfeer
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#menu" class="bg-amber-700 text-white px-8 py-3 rounded-full hover:bg-amber-800 transition text-lg">
                    Bekijk Menu
                </a>
                <a href="#reservations" class="border-2 border-white text-white px-8 py-3 rounded-full hover:bg-white hover:text-stone-800 transition text-lg">
                    Reserveren
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
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
                        <div class="text-center">
                            <p class="font-playfair text-4xl font-bold text-amber-700">25+</p>
                            <p class="text-stone-600">Jaar Ervaring</p>
                        </div>
                        <div class="text-center">
                            <p class="font-playfair text-4xl font-bold text-amber-700">50+</p>
                            <p class="text-stone-600">Gerechten</p>
                        </div>
                        <div class="text-center">
                            <p class="font-playfair text-4xl font-bold text-amber-700">15k+</p>
                            <p class="text-stone-600">Tevreden Gasten</p>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800" alt="Restaurant interior" class="rounded-lg shadow-2xl">
                    <div class="absolute -bottom-6 -left-6 bg-amber-700 text-white p-6 rounded-lg shadow-xl">
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
            <div class="text-center mb-16">
                <p class="text-amber-700 tracking-widest uppercase mb-2">Onze Specialiteiten</p>
                <h2 class="font-playfair text-4xl md:text-5xl font-bold">Populaire Gerechten</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Menu Item 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?w=600" alt="Dish" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-amber-700 text-white px-3 py-1 rounded-full text-sm">€28</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-playfair text-xl font-bold mb-2">Zalm Filet</h3>
                        <p class="text-stone-600 text-sm mb-4">Verse zalm met citroen-dillesaus en seizoensgroenten</p>
                        <button class="text-amber-700 font-semibold hover:text-amber-800 transition">Bestel Nu →</button>
                    </div>
                </div>
                <!-- Menu Item 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600" alt="Dish" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-amber-700 text-white px-3 py-1 rounded-full text-sm">€32</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-playfair text-xl font-bold mb-2">Biefstuk</h3>
                        <p class="text-stone-600 text-sm mb-4">Malse biefstuk met pepersaus en gebakken aardappelen</p>
                        <button class="text-amber-700 font-semibold hover:text-amber-800 transition">Bestel Nu →</button>
                    </div>
                </div>
                <!-- Menu Item 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600" alt="Dish" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-amber-700 text-white px-3 py-1 rounded-full text-sm">€24</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-playfair text-xl font-bold mb-2">Pizza Margherita</h3>
                        <p class="text-stone-600 text-sm mb-4">Huisgemaakte pizza met mozzarella, tomaat en basilicum</p>
                        <button class="text-amber-700 font-semibold hover:text-amber-800 transition">Bestel Nu →</button>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="#" class="inline-block border-2 border-amber-700 text-amber-700 px-8 py-3 rounded-full hover:bg-amber-700 hover:text-white transition text-lg">
                    Bekijk Volledige Menu
                </a>
            </div>
        </div>
    </section>

    <!-- Reservations Section -->
    <section id="reservations" class="py-20 bg-amber-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <p class="text-amber-200 tracking-widest uppercase mb-2">Reserveren</p>
                    <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-6">Reserveer Uw Tafel</h2>
                    <p class="text-amber-100 mb-8 text-lg">
                        Geniet van een onvergetelijke dinerervaring. Reserveer nu en wij zorgen voor de rest.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">📞</div>
                            <div>
                                <p class="font-semibold">Bel Ons</p>
                                <p class="text-amber-200">+31 20 123 4567</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">📧</div>
                            <div>
                                <p class="font-semibold">Email</p>
                                <p class="text-amber-200">info@desmaak.nl</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-8 shadow-2xl">
                    <form class="space-y-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-stone-700 font-semibold mb-2">Naam</label>
                                <input type="text" class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700" placeholder="Uw naam">
                            </div>
                            <div>
                                <label class="block text-stone-700 font-semibold mb-2">Telefoon</label>
                                <input type="tel" class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700" placeholder="06 12345678">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-stone-700 font-semibold mb-2">Datum</label>
                                <input type="date" class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700">
                            </div>
                            <div>
                                <label class="block text-stone-700 font-semibold mb-2">Tijd</label>
                                <select class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700">
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
                            <select class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700">
                                <option>1 persoon</option>
                                <option>2 personen</option>
                                <option>3 personen</option>
                                <option>4 personen</option>
                                <option>5+ personen</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-stone-700 font-semibold mb-2">Speciale Wensen</label>
                            <textarea class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700 h-24" placeholder="Allergieën, speciale gelegenheden, etc."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-amber-700 text-white py-3 rounded-lg hover:bg-amber-800 transition font-semibold text-lg">
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
            <div class="text-center mb-16">
                <p class="text-amber-700 tracking-widest uppercase mb-2">Contact</p>
                <h2 class="font-playfair text-4xl md:text-5xl font-bold">Bezoek Ons</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-stone-50 rounded-xl">
                    <div class="w-16 h-16 bg-amber-700 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">📍</div>
                    <h3 class="font-playfair text-xl font-bold mb-2">Adres</h3>
                    <p class="text-stone-600">Hoofdstraat 123<br>1234 AB Amsterdam</p>
                </div>
                <div class="text-center p-8 bg-stone-50 rounded-xl">
                    <div class="w-16 h-16 bg-amber-700 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">🕐</div>
                    <h3 class="font-playfair text-xl font-bold mb-2">Openingstijden</h3>
                    <p class="text-stone-600">Ma - Do: 17:00 - 22:00<br>Vr - Za: 17:00 - 23:00<br>Zo: 12:00 - 21:00</p>
                </div>
                <div class="text-center p-8 bg-stone-50 rounded-xl">
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
                <div>
                    <h3 class="font-playfair text-2xl font-bold text-amber-500 mb-4">De Smaak</h3>
                    <p class="text-stone-400">Ervaar de kunst van fijnproeven in een warme en elegante sfeer.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Snelle Links</h4>
                    <ul class="space-y-2 text-stone-400">
                        <li><a href="#home" class="hover:text-amber-500 transition">Home</a></li>
                        <li><a href="#about" class="hover:text-amber-500 transition">Over Ons</a></li>
                        <li><a href="#menu" class="hover:text-amber-500 transition">Menu</a></li>
                        <li><a href="#reservations" class="hover:text-amber-500 transition">Reserveren</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Openingstijden</h4>
                    <ul class="space-y-2 text-stone-400">
                        <li>Ma - Do: 17:00 - 22:00</li>
                        <li>Vr - Za: 17:00 - 23:00</li>
                        <li>Zo: 12:00 - 21:00</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Volg Ons</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-stone-800 rounded-full flex items-center justify-center hover:bg-amber-700 transition">📘</a>
                        <a href="#" class="w-10 h-10 bg-stone-800 rounded-full flex items-center justify-center hover:bg-amber-700 transition">📸</a>
                        <a href="#" class="w-10 h-10 bg-stone-800 rounded-full flex items-center justify-center hover:bg-amber-700 transition">🐦</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-stone-800 mt-8 pt-8 text-center text-stone-400">
                <p>&copy; 2024 Restaurant De Smaak. Alle rechten voorbehouden.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission handling
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Bedankt voor uw reservering! Wij nemen binnen 24 uur contact met u op.');
            this.reset();
        });
    </script>
</body>
</html>
