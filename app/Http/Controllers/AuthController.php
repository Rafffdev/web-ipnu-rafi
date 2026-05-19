<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    private function getUser(): array {
        return [
            [
                'username' => 'Admin',
                'password' => '$2y$12$AkP0scAKVHQ4faYuWRwUOenKPSxrKN56Uy1LdIVROoFwAHMBJr1Be', // admin123
                'nama' => 'Admin'
            ],
            [
                'username' => 'User',
                'password' => '$2y$12$w1eqsKLXd87eOtlMk/0dY.o1jrXdfx0BLA0aUfFRtcH5fvkMPBTpC', // user123
                'nama' => 'User'
            ]
        ];
    }

    // Halaman login
    public function index() {
        return view('login');
    }

    // Proses login
    public function login(Request $request) {
        $auth = $request->only('username', 'password');

        foreach ($this->getUser() as $user) {
            if ($user['username'] === $auth['username'] && Hash::check($auth['password'], $user['password'])) {
                Session::put('user', $user);
                // arahkan ke dashboard admin
                return redirect()->route('admin.dashboard');
            }
        }

        return back()->withErrors(['login_error' => 'Username atau password salah!']);
    }

    // Logout
    public function logout() {
        Session::forget('user');
        return redirect()->route('login');
    }
}
