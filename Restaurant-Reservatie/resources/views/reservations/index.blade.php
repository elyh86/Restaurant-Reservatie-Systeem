<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Reserveringen - Restaurant De Smaak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/site.css">
</head>
<body class="bg-stone-50 text-stone-800">
    <nav class="fixed w-full bg-white/95 backdrop-blur-sm shadow-sm z-50" role="navigation" aria-label="Hoofdnavigatie">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-amber-700">De Smaak</a>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-stone-600 hover:text-amber-700 transition">Home</a>
                    <a href="{{ route('menu.index') }}" class="text-stone-600 hover:text-amber-700 transition">Menu</a>
                    <a href="{{ route('reservations.create') }}" class="text-stone-600 hover:text-amber-700 transition">Reserveren</a>
                    <a href="{{ route('reservations.index') }}" class="text-amber-700 font-semibold" aria-current="page">Mijn Reserveringen</a>
                </div>
                <div class="flex items-center gap-4">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="hidden md:block text-stone-600 hover:text-amber-700 transition font-semibold">Uitloggen</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <header class="pt-32 pb-20 bg-gradient-to-br from-amber-50 to-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-amber-700 tracking-widest uppercase mb-2">Mijn Account</p>
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Mijn Reserveringen</h1>
            <p class="text-stone-600 text-lg max-w-2xl mx-auto">Beheer uw restaurant reserveringen</p>
        </div>
    </header>

    <main class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($reservations->isEmpty())
                <div class="bg-white rounded-xl shadow-lg p-12 text-center" role="status">
                    <h2 class="text-2xl font-bold mb-2">Geen reserveringen</h2>
                    <p class="text-stone-600 mb-6">U heeft nog geen reserveringen gemaakt.</p>
                    <a href="{{ route('reservations.create') }}" class="inline-block bg-amber-700 text-white px-6 py-3 rounded-full hover:bg-amber-800 transition font-semibold focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
                        Maak uw eerste reservering
                    </a>
                </div>
            @else
                <div class="space-y-6" role="list">
                    @foreach($reservations as $reservation)
                        <article class="bg-white rounded-xl shadow-lg p-6 md:p-8">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                <div>
                                    <div class="flex items-center gap-3 mb-2">
                                        <span class="px-3 py-1 rounded-full text-sm font-semibold
                                            @if($reservation->status === 'confirmed') bg-green-100 text-green-700
                                            @elseif($reservation->status === 'pending') bg-yellow-100 text-yellow-700
                                            @else bg-red-100 text-red-700 @endif">
                                            {{ ucfirst($reservation->status) }}
                                        </span>
                                        <span class="text-stone-500 text-sm">
                                            {{ $reservation->created_at->format('d-m-Y') }}
                                        </span>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">
                                        {{ $reservation->reservation_date->format('d F Y \o\m H:i') }}
                                    </h3>
                                    <p class="text-stone-600">
                                        <span class="font-semibold">{{ $reservation->number_of_guests }}</span> personen
                                    </p>
                                    @if($reservation->special_requests)
                                        <p class="text-stone-500 text-sm mt-2">
                                            <span class="font-semibold">Speciale wensen:</span> {{ $reservation->special_requests }}
                                        </p>
                                    @endif
                                </div>
                                @if($reservation->status === 'pending')
                                    <form method="POST" action="{{ route('reservations.cancel', $reservation->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 border border-red-500 text-red-500 rounded-lg hover:bg-red-50 transition text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                            Annuleren
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </main>

    <footer class="bg-stone-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2024 Restaurant De Smaak. Alle rechten voorbehouden.</p>
        </div>
    </footer>
</body>
</html>
