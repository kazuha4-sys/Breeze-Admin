<?php

namespace Kazuha\BreezeAdmin\Http\Controllers;

use Illuminate\Http\Request;
use Kazuha\BreezeAdmin\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController
{
    public function index()
    {
        return User::select('id', 'name', 'email', 'created_at')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return [
            'message' => 'Usuário criado com sucesso!',
            'user' => $user
        ];
    }
}
