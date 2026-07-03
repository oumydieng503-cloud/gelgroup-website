<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (session('admin_authenticated')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string'],
        ]);

        $adminPassword = config('gelgroup.admin_password');

        if (! $adminPassword) {
            return back()->withErrors(['password' => 'Mot de passe admin non configuré. Définissez ADMIN_PASSWORD dans le fichier .env']);
        }

        if (! hash_equals($adminPassword, $request->password)) {
            return back()->withErrors(['password' => 'Mot de passe incorrect.']);
        }

        $request->session()->put('admin_authenticated', true);

        return redirect()->route('admin.dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin_authenticated');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
