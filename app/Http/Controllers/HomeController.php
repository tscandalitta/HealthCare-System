<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        $user = Auth::user();
        if($user->hasRole('admin'))
            return redirect()->route('admin');
        elseif ($user->hasRole('medico') || $user->hasRole('secretaria')) 
            return redirect()->route('home');
        else
            return redirect()->route('profile');
    }
}
