<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return "Проектування бази даних для автоматизованої інформаційної системи Інтернет-магазину"; 
    }
}