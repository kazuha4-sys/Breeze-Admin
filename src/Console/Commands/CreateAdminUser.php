<?php

namespace Kazuha\BreezeAdmin\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateAdminUser extends Command
{
    protected $signature = 'breezeadmin:make-admin';
    protected $description = 'Cria o usuário.';

    public function handle()
    {
        $email = "admin@breeze.com";

        if (User::where('email', $email)->exists()) {
            $this->info("Admin já existe.");
            return;
        }

        User::create([
            'name' => 'Admin Master',
            'email' => $email,
            'password' => Hash::make('admin123'),
            'is_admin' => 1,
        ]);

        $this->info("Admin criado com sucesso!");
        $this->info("Email: admin@breeze.com");
        $this->info("Senha: admin123");
    }
}
