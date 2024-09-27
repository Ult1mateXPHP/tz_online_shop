@if($items == 0)
<h3>Корзина пуста</h3>
@else
@foreach($shopcart as $item)
    <div class="item">
        <p class="item-img">Изображение</p>
        <p class="item-name">Наименование: {{ $item->product_entity->name }}</p>
        <p class="item-price">Цена: {{ $item->product_entity->price }}</p>
        <p class="item-count">Количество: {{ $item->count }}</p>
    </div>
@endforeach
<h3>Итого: {{ $total }}</h3>
@endif
