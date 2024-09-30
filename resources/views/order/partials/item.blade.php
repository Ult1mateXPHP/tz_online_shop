@if($count == 0)
    <h3>Список заказов пуст</h3>
@endif
@foreach($orders as $order)
    <div class="order">
        <p class="order-id">Номер Заказа: {{ $order->id }}</p>
        <div class="order-items">
            <p>Состав заказа</p>
            @foreach($order->products as $product)
                <p class="order-item-name">Товар: {{ $product->name }}</p>
                <p class="order-item-count">Количество: {{ $product->count }}</p>
                <p class="order-item-price">Цена: {{ $product->price }}</p>
            @endforeach
        </div>
        <p class="order-total">Итого: {{ $order->price }}</p>
    </div>
@endforeach
