<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.products.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0.01',
            'category' => 'required|string|max:100',
            'description' => 'nullable|string'
        ], [
            'name.required' => 'Назва товару є обов\'язковою.',
            'price.required' => 'Будь ласка, вкажіть ціну.',
            'price.numeric' => 'Ціна має бути числом.',
            'price.min' => 'Ціна має бути більшою за нуль.',
            'category.required' => 'Категорія є обов\'язковою.'
        ]);

        Product::create($validated);

        return redirect()->route('admin.products.index')
                        ->with('success', 'Новий товар успішно додано!');
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index')
                         ->with('success', 'Товар успішно видалено!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }
}
