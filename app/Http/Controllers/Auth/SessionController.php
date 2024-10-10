<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');

    }

    public function home()
    {
        if (Auth::guest())
        {
            return redirect()->route('login');
        }

        return view("dashboard");
    }

    public function  store()
    {
        $attribute=request()->validate([
            'email'=>['required' ,'email'],
            'password'=>['required']
        ]);

        if (! Auth::attempt($attribute))
        {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.'
            ]);
            
        }else
        {
        request()->session()->regenerate();

        return redirect('/');}

    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
