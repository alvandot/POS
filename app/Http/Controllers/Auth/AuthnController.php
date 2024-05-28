<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthnController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function login(LoginRequest $request)
    {
        $request->login();

        return json_encode(['message' => 'Login Berhasil']);
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->only('name', 'email', 'bcrypt(password)'));
        Auth::login($user);
        return json_encode(['message' => 'Register Berhasil']);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


}
