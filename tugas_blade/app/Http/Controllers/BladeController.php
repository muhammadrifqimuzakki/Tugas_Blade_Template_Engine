<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index()
    {
        $fruits = array(
            0 => 'magga', 
            1 => 'pisang', 
            2 => 'anggur', 
            3 => 'gedang', 
        );

        $name = array(
            0 => 'Rifqi'
        );

        return view('pages.home', compact('name', 'fruits'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
