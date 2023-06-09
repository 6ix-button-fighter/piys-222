<!DOCTYPE html>
<h1>{{ $category->name }}</h1>

<!-- Фильтр по цене -->
<form action="{{ route('category.show', ['category' => $category->code]) }}" method="GET">
    <label for="min_price">Минимальная цена:</label>
    <input type="number" name="min_price" id="min_price" value="{{ request('min_price') }}">
    
    <label for="max_price">Максимальная цена:</label>
    <input type="number" name="max_price" id="max_price" value="{{ request('max_price') }}">
    
    <button type="submit">Фильтровать</button>
</form>

<!-- Список товаров -->
@foreach ($products as $product)
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <p>Цена: {{ $product->price }}</p>
    <!-- Остальные поля товара -->
@endforeach

<!-- Постраничная навигация -->
{{ $products->appends(request()->query())->links() }}
