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
    /**
     * [GET]
     * Рендер
     * @param ShopCartApi $shopCartApi
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
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

    /**
     * [POST]
     * Добавить товар в корзину
     * @param ShopCartApi $shopCartApi
     * @param ProductApi $productApi
     * @return \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addNew(ShopCartApi $shopCartApi, ProductApi $productApi)
    {
        $shopcart = [
            'product' => (int)Request::input('product'),
            'user' => \auth()->user()->id,
            'count' => (int)Request::input('count'),
        ];
        if ($productApi->validateProduct($shopcart)) {
            $shopCartApi->newShopCartItem($shopcart);
        }
        return redirect("/");
    }
}
