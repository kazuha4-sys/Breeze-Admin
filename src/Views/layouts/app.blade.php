<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Admin' }} - Breeze Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 text-gray-900">

    <!-- NAV -->
    <nav class="bg-white shadow-sm px-6 py-4 flex justify-between items-center">
        <h1 class="font-semibold text-xl">Breeze Admin</h1>

        <ul class="flex items-center gap-4">
            <li>
                <a href="{{ route('breezeadmin.dashboard') }}" 
                   class="text-gray-700 hover:text-black">
                    Dashboard
                </a>
            </li>

            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-red-600 hover:text-red-700 font-medium">
                        Sair
                    </button>
                </form>
            </li>
        </ul>
    </nav>

    <main class="max-w-6xl mx-auto mt-8 px-4">
        {{ $slot }}
    </main>

</body>
</html>
