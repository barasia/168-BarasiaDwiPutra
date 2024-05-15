<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// Model
use App\Models\{
    Problem
};

class HomeController extends Controller
{
    public function index()
    {
        $problems = Problem::getList();

        return view('home', compact('problems'));
    }
}
