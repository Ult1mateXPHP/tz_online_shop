<?php

namespace App\Http\Controllers\ShopCart;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use OnlineShop\Application\Product\ProductApi;
use OnlineShop\Application\ShopCart\ShopCartApi;
use OnlineShop\Domain\Entity\ShopCartProductEntity;

class ShopCartController extends Controller
{
    public function index(ShopCartApi $shopCartApi)
    {
        $shopcart = $shopCartApi->getShopCart(Auth::id());
        $total = $shopCartApi->getTotal(Auth::id());
        return view('shopcart.main', [
            'page_name' => 'Корзина',
            'shopcart' => $shopcart,
            'items' => $shopcart->count(),
            'total' => $total,
        ]);
    }

    public function addNew(ShopCartApi $shopCartApi, ProductApi $productApi)
    {
        $shopcart = [
            'product' => (int)Request::input('product'),
            'user' => \auth()->user()->id,
            'count' => (int)Request::input('count'),
        ];
        if ($productApi->validateShopCart($shopcart)) {
            $shopCartApi->newShopCartItem($shopcart);
        }
        return redirect("/");
    }
}
