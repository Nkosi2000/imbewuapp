<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }
        return view('user.dashboard');
    }
}
