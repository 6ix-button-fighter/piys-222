<!DOCTYPE html>
<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Цена: {{ $product->price }}</p>
<p>Количество на складе: {{ $product->stock_quantity }}</p>
<img src="{{ $product->image }}" alt="{{ $product->name }}" width="200" height="200">

@foreach ($products as $product)
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <p>Цена: {{ $product->price }}</p>
    <!-- Остальные поля товара -->
@endforeach

{{ $products->links() }}