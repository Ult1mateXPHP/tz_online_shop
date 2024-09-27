<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use OnlineShop\Application\ShopCart\ShopCartApi;

class OrderController extends Controller
{
    public function index(ShopCartApi $shopCartApi)
    {
        $shopcart = $shopCartApi->getShopCart(auth()->user()->id)->count();
        return view('order.main', [
            'page_name' => 'Заказы',
            'shopcart' => $shopcart
        ]);
    }
}
