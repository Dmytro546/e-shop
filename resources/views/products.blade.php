@extends('layouts.app')

@section('title', 'Каталог товарів')

@section('content')
    <h2 class="mb-4">Наші товари</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($products as $id => $product)
            <div class="col">
                <x-card :product="$product" :id="$id" />
            </div>
        @endforeach
    </div>
@endsection