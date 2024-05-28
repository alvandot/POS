<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthnController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        $request->login();

        return json_encode(['message' => 'Login Berhasil']);
    }

    public function logout(LoginRequest $request)
    {
        $request->logout();
        return redirect('/');
    }
}
