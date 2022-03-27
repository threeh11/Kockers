<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Rule\Parameters;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function loginStore(Request $request){
        $validated = $request->validate([
            'login' => 'string | required | max:20 | min:4',
            'password' => 'string | required | min:6 | max:16',
        ]);

        if(auth()->attempt($validated)){
            return redirect('/');
        };
    }

    public function registerStore(Request $request){
        // dd($request->all()['login']);
        $validated = $request->validate([
            'login' => 'string | required | max:20 | min:4 | unique:users,login',
            'email' => 'string | required | min:6 | email | unique:users,email',
            'password' => 'string | required | min:6 | max:16 | confirmed',
        ]);

        if ($user = User::create($validated)){
            auth()->login($user);
            return redirect('/');
        }
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
