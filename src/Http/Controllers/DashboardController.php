<?php

namespace Kazuha\BreezeAdmin\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Debug para ver se está vendo as viwes
        // dd(view()->exists('breezeadmin::dashboard'));
        return view('breezeadmin::dashboard', [
            'userCount'  => \App\Models\User::count(),
            'adminCount' => \App\Models\User::where('is_admin', 1)->count(),
            'search' => null,
            'users'      => User::select('id', 'name', 'email', 'created_at')->get(),
        ]);
    }
}
