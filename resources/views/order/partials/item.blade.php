@if($count == 0)
    <h3>Список заказов пуст</h3>
@endif
@foreach($orders as $order)
    <div class="item">
        <p class="item-img">Изображение</p>
        <p class="item-name">Наименование: {{ $order->id }}</p>
        <p class="item-price">Цена: {{ $order->price }}</p>
        <div>
            <p class="order-item">{{ $order->product->name }}</p>
            <p class="order-item">{{ $order->product->count }}</p>
            <p class="order-item">{{ $order->product->price }}</p>
        </div>
    </div>
@endforeach
