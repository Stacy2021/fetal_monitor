<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterDoctor extends Controller
{
    public function create()
    {
        return view('auth.doctor');

    }
    public function store()
    {
        $attributes = request()->validate([
           'name'=>['required'],
           'last_name'=>['required'],
           'email' =>['required' ,'email'],
            'password' =>['required' , Password::min(6) , 'confirmed'],
            'phonenumber' => ['required' , 'numeric']
        ]);
        
        $user = User::create($attributes);
        Auth::login($user);
        return redirect('/');
    }
}
