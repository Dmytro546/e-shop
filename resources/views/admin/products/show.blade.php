@extends('layouts.app')

@section('title', 'Деталі товару')

@section('content')
<div class="container mt-4">
    <h2>Деталі товару: {{ $product->name }}</h2>
    
    <div class="card mt-3">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $product->id }}</p>
            <p><strong>Назва:</strong> {{ $product->name }}</p>
            <p><strong>Категорія:</strong> {{ $product->category }}</p>
            <p><strong>Ціна:</strong> {{ $product->price }} грн</p>
            <p><strong>Опис:</strong> {{ $product->description ?? 'Опис відсутній' }}</p>
        </div>
    </div>

    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary mt-3">Повернутися до списку</a>
</div>
@endsection