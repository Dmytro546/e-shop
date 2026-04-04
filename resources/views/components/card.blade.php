@props(['product', 'id'])

<div class="card h-100 shadow-sm">
    <div class="card-body">
        <h5 class="card-title">{{ $product['name'] }}</h5>
        <h6 class="card-subtitle mb-2 text-primary">{{ $product['price'] }} грн</h6>
        <p class="card-text text-muted"><small>Категорія: {{ $product['category'] }}</small></p>
    </div>
    <div class="card-footer bg-transparent border-top-0">
        <a href="/products/{{ $id }}" class="btn btn-outline-dark w-100">Детальніше</a>
    </div>
</div>