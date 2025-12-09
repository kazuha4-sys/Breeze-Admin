<?php

namespace Kazuha\BreezeAdmin\Http\Controllers;

use Illuminate\Http\Request;
use Kazuha\BreezeAdmin\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController
{
    public function list(Request $request)
    {
        $query = User::query();
        $search = $request->input('search');

        if ($search) {

            // Busca por ID -> id:5
            if (preg_match('/^id:(\d+)$/', $search, $match)) {
                $query->where('id', $match[1]);
            }

            // Busca email exato -> email:gmail.com
            else if (preg_match('/^email:(.+)$/', $search, $match)) {
                $query->where('email', 'LIKE', '%' . $match[1] . '%');
            }

            // Qualquer email com @
            else if (str_contains($search, '@')) {
                $query->where('email', 'LIKE', '%' . $search . '%');
            }

            // Busca por nome
            else {
                $query->where('name', 'LIKE', '%' . $search . '%');
            }
        }

        $users = $query->orderBy('id', 'asc')->get();

        return view('breezeadmin::users.index', compact('users', 'search'));
    }

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
