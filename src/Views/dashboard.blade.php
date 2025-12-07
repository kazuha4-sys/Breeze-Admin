<x-breezeadmin::layouts.app title="Dashboard">

    <h2 class="text-3xl font-bold mb-6">
        Painel Administrativo
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <x-breezeadmin::card>
            <h3 class="text-xl font-semibold mb-2">Total de Usuários</h3>
            <p class="text-4xl font-bold">{{ $userCount }}</p>
        </x-breezeadmin::card>

        <x-breezeadmin::card>
            <h3 class="text-xl font-semibold mb-2">Admins</h3>
            <p class="text-4xl font-bold">{{ $adminCount }}</p>
        </x-breezeadmin::card>

        <x-breezeadmin::card>
            <h3 class="text-xl font-semibold mb-2">Visitantes Online</h3>
            <p class="text-4xl font-bold">14</p>
        </x-breezeadmin::card>

    </div>

</x-breezeadmin::layouts.app>
