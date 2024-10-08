@foreach($products as $product)
    <div class="item">
        <p class="item-img">Изображение</p>
        <p class="item-name">Наименование: {{ $product->name }}</p>
        <p class="item-price">Цена: {{ $product->price }}</p>
        <form method="POST" action="/shopcart">
            <input type="hidden" name="product" value="{{ $product->id }}">
            <input class="item-count" type="number" name="count" min="1" max="999" value="1" placeholder="Количество">
            <input class="item-add" type="submit" value="Добавить в корзину">
            @csrf
        </form>
    </div>
@endforeach
