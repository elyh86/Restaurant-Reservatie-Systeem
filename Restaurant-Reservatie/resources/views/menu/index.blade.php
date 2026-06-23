<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Restaurant De Smaak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/site.css">
</head>
<body class="bg-stone-50 text-stone-800">
    @include('partials.nav')

    <header class="pt-32 pb-20 bg-gradient-to-br from-amber-50 to-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-amber-700 tracking-widest uppercase mb-2">Onze Specialiteiten</p>
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Menu</h1>
            <p class="text-stone-600 text-lg max-w-2xl mx-auto">Ontdek onze heerlijke gerechten, bereid met verse ingrediënten en passie</p>
        </div>
    </header>

    <main class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
                $categories = [
                    'appetizer' => 'Voorgerechten',
                    'main_course' => 'Hoofdgerechten',
                    'dessert' => 'Nagerechten',
                    'drink' => 'Dranken'
                ];
            @endphp

            @foreach($categories as $key => $label)
                @php $categoryItems = $menus->where('category', $key); @endphp
                @if($categoryItems->isNotEmpty())
                    <section class="mb-16" aria-labelledby="{{ $key }}-heading">
                        <h2 id="{{ $key }}-heading" class="text-3xl font-bold mb-8 text-amber-700">{{ $label }}</h2>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($categoryItems as $menu)
                                <article class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 duration-300">
                                    @if($menu->image)
                                        <img src="{{ $menu->image }}" alt="{{ $menu->name }}" class="w-full h-48 object-cover">
                                    @endif
                                    <div class="p-6">
                                        <div class="flex justify-between items-start mb-2">
                                            <h3 class="text-xl font-bold">{{ $menu->name }}</h3>
                                            <span class="text-amber-700 font-bold">€{{ number_format($menu->price, 2) }}</span>
                                        </div>
                                        <p class="text-stone-600 text-sm">{{ $menu->description }}</p>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </section>
                @endif
            @endforeach

            @if($menus->isEmpty())
                <div class="text-center py-12" role="status">
                    <p class="text-stone-600 text-lg">Er zijn momenteel geen menu-items beschikbaar.</p>
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
