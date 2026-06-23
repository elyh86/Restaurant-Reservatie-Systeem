<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren - Restaurant De Smaak</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-orange-50 to-red-50 min-h-screen flex items-center justify-center">
    <main class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md" role="main">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Restaurant De Smaak</h1>
            <p class="text-gray-600">Maak een nieuw account</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.submit') }}" novalidate>
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Naam</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required
                    autocomplete="name"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="Uw volledige naam"
                >
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-mail</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required
                    autocomplete="email"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="uw@email.nl"
                >
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Telefoonnummer (optioneel)</label>
                <input 
                    type="tel" 
                    id="phone" 
                    name="phone"
                    autocomplete="tel"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="+31 6 12345678"
                >
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Wachtwoord</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required
                    autocomplete="new-password"
                    minlength="8"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="Minimaal 8 tekens"
                    aria-describedby="password-help"
                >
                <p id="password-help" class="text-xs text-gray-500 mt-1">Minimaal 8 tekens</p>
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Bevestig wachtwoord</label>
                <input 
                    type="password" 
                    id="password_confirmation" 
                    name="password_confirmation" 
                    required
                    autocomplete="new-password"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="••••••••"
                >
            </div>

            <button type="submit"
                class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-4 rounded-lg transition duration-300 mb-4 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                Registreren
            </button>
        </form>

        <div class="text-center">
            <p class="text-gray-600 mb-4">Heeft u al een account?</p>
            <a href="{{ route('login') }}"
                class="inline-block bg-white border-2 border-orange-500 text-orange-500 hover:bg-orange-50 font-bold py-2 px-6 rounded-lg transition duration-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                Inloggen
            </a>
        </div>
    </main>
</body>
</html>
