<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use OnlineShop\Application\Order\OrderApi;
use OnlineShop\Application\ShopCart\ShopCartApi;

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

    public function addNew(ShopCartApi $shopCartApi, OrderApi $orderApi) {
        $products = $shopCartApi->getShopCart(auth()->user()->id);
        $total = $shopCartApi->getTotal(auth()->user()->id);
        $order = [
            'user' => auth()->user()->id,
            'price' => $total,
            'status' => 0
        ];
        $orderApi->newOrder($order, $products);
        return redirect("/");
    }
}
