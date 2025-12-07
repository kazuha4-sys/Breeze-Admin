<div class="min-h-screen bg-gray-900 text-white p-10">

    <h1 class="text-4xl font-bold mb-6">
        Painel Admin 🔥
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Card total de usuários -->
        <div class="bg-gray-800 rounded-xl p-6 border border-gray-700 shadow-lg">
            <h2 class="text-xl font-semibold mb-2">Usuários totais</h2>
            <p class="text-3xl font-bold text-blue-400">
                {{ $userCount }}
            </p>
        </div>

        <!-- Card total admins -->
        <div class="bg-gray-800 rounded-xl p-6 border border-gray-700 shadow-lg">
            <h2 class="text-xl font-semibold mb-2">Admins</h2>
            <p class="text-3xl font-bold text-green-400">
                {{ $adminCount }}
            </p>
        </div>

        <!-- Card usuário logado -->
        <div class="bg-gray-800 rounded-xl p-6 border border-gray-700 shadow-lg">
            <h2 class="text-xl font-semibold mb-2">Logado como</h2>
            <p class="text-lg font-semibold text-purple-400">
                {{ auth()->user()->name }}
            </p>
            <p class="text-sm text-gray-400">
                {{ auth()->user()->email }}
            </p>
        </div>

    </div>

    <div class="mt-10">
        <a href="{{ url('/') }}"
           class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg text-white font-semibold">
            Voltar ao site
        </a>
    </div>

</div>
