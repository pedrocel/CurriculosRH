<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{

    public function getLogin()
    {
        return view('login.index');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('cpf', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/');

        }else{

            return redirect()->back()->withErrors('Credenciais Inválidas');

        }

    }

    public function getLogout()
    {

        auth()->logout();

        return redirect()->route('login');

    }
}
