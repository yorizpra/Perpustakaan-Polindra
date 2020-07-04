<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home()
    {
        return view('index', ['nama' => 'Yoga Rizki Pratama']);
    }
    
    public function admin()
    {
        return view('admin');
    }

    public function user()
    {
        return view('user');
    }

    public function about()
    {
        return view('about');
    }

    
}
