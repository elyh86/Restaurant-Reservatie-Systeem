<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserveren - Restaurant De Smaak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/site.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-stone-50 text-stone-800">
    <nav class="fixed w-full bg-white/95 backdrop-blur-sm shadow-sm z-50" role="navigation" aria-label="Hoofdnavigatie">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-amber-700">De Smaak</a>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-stone-600 hover:text-amber-700 transition">Home</a>
                    <a href="{{ route('menu.index') }}" class="text-stone-600 hover:text-amber-700 transition">Menu</a>
                    <a href="{{ route('reservations.create') }}" class="text-amber-700 font-semibold" aria-current="page">Reserveren</a>
                </div>
                <div class="flex items-center gap-4">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="hidden md:block text-stone-600 hover:text-amber-700 transition font-semibold">Uitloggen</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="hidden md:block text-stone-600 hover:text-amber-700 transition font-semibold">Inloggen</a>
                        <a href="{{ route('register') }}" class="hidden md:block border-2 border-amber-700 text-amber-700 px-4 py-2 rounded-full hover:bg-amber-700 hover:text-white transition font-semibold">Registreren</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <header class="pt-32 pb-20 bg-gradient-to-br from-amber-50 to-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-amber-700 tracking-widest uppercase mb-2">Reserveren</p>
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Reserveer Uw Tafel</h1>
            <p class="text-stone-600 text-lg max-w-2xl mx-auto">Geniet van een onvergetelijke dinerervaring</p>
        </div>
    </header>

    <main class="py-20">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6" role="alert">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('reservations.store') }}" novalidate>
                    @csrf
                    <div class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="reservation_date" class="block text-stone-700 font-semibold mb-2">Datum en Tijd</label>
                                <input 
                                    type="datetime-local" 
                                    id="reservation_date" 
                                    name="reservation_date" 
                                    required
                                    class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700 transition"
                                    min="{{ now()->format('Y-m-d\TH:i') }}"
                                >
                            </div>
                            <div>
                                <label for="number_of_guests" class="block text-stone-700 font-semibold mb-2">Aantal Personen</label>
                                <select 
                                    id="number_of_guests" 
                                    name="number_of_guests" 
                                    required
                                    class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700 transition"
                                >
                                    <option value="1">1 persoon</option>
                                    <option value="2">2 personen</option>
                                    <option value="3">3 personen</option>
                                    <option value="4">4 personen</option>
                                    <option value="5">5 personen</option>
                                    <option value="6">6 personen</option>
                                    <option value="7">7 personen</option>
                                    <option value="8">8 personen</option>
                                    <option value="9">9 personen</option>
                                    <option value="10">10 personen</option>
                                    <option value="15">11-15 personen</option>
                                    <option value="20">16-20 personen</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="special_requests" class="block text-stone-700 font-semibold mb-2">Speciale Wensen</label>
                            <textarea 
                                id="special_requests" 
                                name="special_requests" 
                                rows="4"
                                class="w-full px-4 py-3 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700 transition"
                                placeholder="Allergieën, speciale gelegenheden, etc."
                            ></textarea>
                        </div>

                        <!-- Availability Check -->
                        <div id="availability-check" class="hidden p-4 rounded-lg mb-4" role="status">
                            <p id="availability-message"></p>
                        </div>

                        <button type="submit"
                            class="w-full bg-amber-700 text-white py-4 rounded-lg hover:bg-amber-800 transition font-semibold text-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
                            Reservering Bevestigen
                        </button>
                    </div>
                </form>

                <div class="mt-8 text-center">
                    <a href="{{ route('reservations.index') }}" class="text-amber-700 hover:text-amber-800 font-semibold">
                        Bekijk uw reserveringen →
                    </a>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-stone-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2024 Restaurant De Smaak. Alle rechten voorbehouden.</p>
        </div>
    </footer>

    <script>
        const dateInput = document.getElementById('reservation_date');
        const availabilityCheck = document.getElementById('availability-check');
        const availabilityMessage = document.getElementById('availability-message');

        dateInput.addEventListener('change', function() {
            const date = this.value;
            if (date) {
                fetch('/api/check-availability', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({ date: date })
                })
                .then(response => response.json())
                .then(data => {
                    availabilityCheck.classList.remove('hidden');
                    if (data.available) {
                        availabilityCheck.classList.remove('bg-red-100', 'text-red-700');
                        availabilityCheck.classList.add('bg-green-100', 'text-green-700');
                        availabilityMessage.textContent = data.message;
                    } else {
                        availabilityCheck.classList.remove('bg-green-100', 'text-green-700');
                        availabilityCheck.classList.add('bg-red-100', 'text-red-700');
                        availabilityMessage.textContent = data.message;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        });
    </script>
</body>
</html>
