@foreach($products as $product)
    <div class="item">
        <p class="item-img">Изображение</p>
        <p class="item-name">Наименование: {{ $product->name }}</p>
        <p class="item-price">Цена: {{ $product->price }}</p>
    </div>
@endforeach
