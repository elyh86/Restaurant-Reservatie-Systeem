<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen - Restaurant De Smaak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/site.css">
</head>
<body class="bg-gradient-to-br from-amber-50 to-orange-50 min-h-screen flex items-center justify-center">
    <main class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md" role="main">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-amber-700 mb-2">Restaurant De Smaak</h1>
            <p class="text-stone-600">Log in op uw account</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
                <span>{{ $errors->first() }}</span>
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}" novalidate>
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-stone-700 text-sm font-semibold mb-2">E-mail</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required
                    autocomplete="email"
                    class="w-full px-3 py-2 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700 focus:border-transparent"
                    placeholder="uw@email.nl"
                >
            </div>

            <div class="mb-4">
                <label for="password" class="block text-stone-700 text-sm font-semibold mb-2">Wachtwoord</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required
                    autocomplete="current-password"
                    class="w-full px-3 py-2 border border-stone-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-700 focus:border-transparent"
                    placeholder="••••••••"
                >
            </div>

            <div class="mb-6">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" name="remember" id="remember" class="mr-2 accent-amber-700">
                    <span class="text-sm text-stone-600">Onthoud mij</span>
                </label>
            </div>

            <button type="submit"
                class="w-full bg-amber-700 hover:bg-amber-800 text-white font-semibold py-3 px-4 rounded-lg transition duration-300 mb-4 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
                Inloggen
            </button>
        </form>

        <div class="text-center">
            <p class="text-stone-600 mb-4">Nog geen account?</p>
            <a href="{{ route('register') }}"
                class="inline-block bg-white border-2 border-amber-700 text-amber-700 hover:bg-amber-50 font-semibold py-2 px-6 rounded-lg transition duration-300 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
                Registreren
            </a>
        </div>
    </main>
</body>
</html>
