<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use OnlineShop\Application\Order\OrderApi;
use OnlineShop\Application\ShopCart\ShopCartApi;

// В РАЗРАБОТКЕ

class OrderController extends Controller
{
    public function index(ShopCartApi $shopCartApi, OrderApi $orderApi)
    {
        $shopcart = $shopCartApi->getShopCart(auth()->user()->id)->count();
        $order = $orderApi->getOrders(auth()->user()->id);
        return view('order.main', [
            'page_name' => 'Заказы',
            'shopcart' => $shopcart,
            'orders' => $order,
            'count' => $order->count()
        ]);
    }
}
