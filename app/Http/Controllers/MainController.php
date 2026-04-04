<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return "Вітаємо у нашому Інтернет-магазині!";
    }

    public function about()
    {
        return "Цей проєкт розроблено в рамках курсової роботи: Проектування бази даних для автоматизованої інформаційної системи Інтернет-магазину";
    }
}