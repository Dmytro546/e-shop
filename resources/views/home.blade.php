@extends('layouts.app')

@section('title', 'Головна сторінка')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Вітаємо у E-Shop!</h1>
            <p class="col-md-8 fs-4">Інтернет магазин сформований за темою до курсової роботи: Проектування бази даних для автоматизованої інформаційної системи Інтернет-магазину</p>
            <a href="/products" class="btn btn-primary btn-lg">Перейти до каталогу</a>
        </div>
    </div>
@endsection