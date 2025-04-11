<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }
    
    public function logout()
    {
        return view('logout');
    }
    
    public function loginSubmit(Request $request)
    {
        $request ->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ],
        [
            'email.required' => 'E-mail é obrigatório',
            'email.email' => 'E-mail inválido',
            'password.required' => 'Senha é obrigatória',
            'password.min' => 'Senha deve ter no mínimo 6 caracteres',
            'password.max' => 'Senha deve ter no máximo 12 caracteres',
        ]);

        echo $request->input('email');
        echo $request->input('password');
        
        $email = $request->input('email');
        $password = $request->input('password');

        echo 'OK!';
    }
}
