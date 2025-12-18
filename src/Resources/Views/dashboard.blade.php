<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Painel Admin
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                {{-- Usuários totais --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-sm font-medium text-gray-500">
                            Usuários totais
                        </h3>
                        <p class="mt-2 text-3xl font-bold text-gray-800">
                            {{ $userCount }}
                        </p>
                    </div>
                </div>

                {{-- Admins --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-sm font-medium text-gray-500">
                            Admins
                        </h3>
                        <p class="mt-2 text-3xl font-bold text-gray-800">
                            {{ $adminCount }}
                        </p>
                    </div>
                </div>

                {{-- Usuário logado --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-sm font-medium text-gray-500">
                            Logado como
                        </h3>
                        <p class="mt-2 text-lg font-semibold text-gray-800">
                            {{ auth()->user()->name }}
                        </p>
                        <p class="text-sm text-gray-500">
                            {{ auth()->user()->email }}
                        </p>
                    </div>
                </div>

            </div>

            {{-- Ações --}}
            <div class="mt-8">
                <a href="{{ url('/dashboard') }}"
                   class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md
                          font-semibold text-xs text-white uppercase tracking-widest
                          hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Voltar ao site
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
