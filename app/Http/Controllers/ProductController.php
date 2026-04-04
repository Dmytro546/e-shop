<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        1 => ['name' => 'Ноутбук ASUS VivoBook 15', 'price' => 25000, 'category' => 'Електроніка'],
        2 => ['name' => 'Смартфон Redmi Note 14', 'price' => 12000, 'category' => 'Смартфони'],
        3 => ['name' => 'Геймпад Sony DualSense', 'price' => 3000, 'category' => 'Аксесуари'],
    ];

    public function index()
    {
        return $this->products;
    }

    public function show($id)
    {
        if (isset($this->products[$id])) {
            return $this->products[$id];
        }

        return "Товар з ID {$id} не знайдено.";
    }
}