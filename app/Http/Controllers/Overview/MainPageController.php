<?php

namespace App\Http\Controllers\Overview;

use App\Http\Controllers\Controller;
use OnlineShop\Application\Overview\ProductApi;
use OnlineShop\Application\ShopCart\ShopCartApi;

class MainPageController extends Controller
{
    public function index(ProductApi $productApi, ShopCartApi $shopCartApi)
    {
        $products = $productApi->getProducts();
        $shopcart = $shopCartApi->getShopCart(auth()->user()->id)->count();
        return view('overview.main', [
            'page_name' => 'Каталог',
            'products' => $products,
            'shopcart' => $shopcart
        ]);
    }
}
