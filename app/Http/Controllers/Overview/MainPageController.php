<?php

namespace App\Http\Controllers\Overview;

use App\Http\Controllers\Controller;
use OnlineShop\Application\Order\OrderApi;
use OnlineShop\Application\Product\ProductApi;
use OnlineShop\Application\ShopCart\ShopCartApi;

class MainPageController extends Controller
{
    /**
     * [GET]
     * Рендер
     * @param ProductApi $productApi
     * @param ShopCartApi $shopCartApi
     * @param OrderApi $orderApi
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index(ProductApi $productApi, ShopCartApi $shopCartApi, OrderApi $orderApi)
    {
        $products = $productApi->getProducts();
        $shopcart = $shopCartApi->getShopCart(auth()->user()->id)->count();
        $orders = $orderApi->getOrders(auth()->user()->id)->count();
        return view('overview.main', [
            'page_name' => 'Каталог',
            'products' => $products,
            'shopcart' => $shopcart,
            'orders' => $orders
        ]);
    }
}
