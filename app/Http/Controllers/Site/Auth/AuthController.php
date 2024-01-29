<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('Site.Auth.register');
    }

    public function register(StoreUserRequest $request)
    {
        $userData = $request->validated();
        $userData['password'] = Hash::make($userData['password']);
        $newUser = User::create($userData);
        Auth::login($newUser);
        
        return redirect()->route('home');
    }

    public function loginForm()
    {
        return view('Site.Auth.login');
    }

    public function login(Request $request)
    {
        $userData = $request->only('phone', 'password');
        $validator = Validator::make($userData, [
            'phone' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (is_numeric($userData['phone'])) {
            $credentials = ['phone' => $userData['phone'], 'password' => $userData['password']];
        } else {
            $credentials = ['email' => $userData['phone'], 'password' => $userData['password']];
        }

        if ($request->has('remember_me')){
            $remember = true;
        } else {
            $remember = false;
        }

        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();

            return redirect('/');
        }else{
            return redirect()->back()->with('fail', 'Wrong Credentials');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
