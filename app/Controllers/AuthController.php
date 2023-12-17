<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class AuthController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        if (! $this->request->is('post')) {
            return view('login');
        }

        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];
        $errors = [
            'email' => [
                'required' => 'Kolom email harus diisi!',
            ],
            'password' => [
                'required' => 'Kolom password harus diisi!',
            ],
        ];

        if (! $this->validate($rules, $errors)) {
            return view('login');
        }
        
        $validData = $this->validator->getValidated();
        return $this->login($validData['email'], $validData['password']);
    }

    protected function login(string $email, string $password) {
        $userModel = model(User::class);
        if ($userModel->validatePassword($email, $password)) {
            session()->set('user_token', 1);
            return redirect('/')->with('success', 'Login berhasil!');
        }
        return redirect('login')->with('error', 'Login gagal!');
    }

    public function logout() {
        session()->destroy();
        return redirect('/')->with('success', 'Logout berhasil!');
    }
}
