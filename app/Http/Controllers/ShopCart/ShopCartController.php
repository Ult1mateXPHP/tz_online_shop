<?php

namespace App\Http\Controllers\ShopCart;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use OnlineShop\Application\Product\ProductApi;
use OnlineShop\Application\ShopCart\ShopCartApi;

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
            'total' => $total
        ]);
    }

    public function addNew(Request $request, ShopCartApi $api) {
        $shopcart = [
            'product' => (int) Request::input('product'),
            'user' => \auth()->user()->id,
            'count' => (int) Request::input('count'),
        ];
        if($this->validate($shopcart)) {
            $api->newShopCartItem($shopcart);
        }
        return redirect("/");
    }

    private function validate($shopcart)
    {
        $api = new ProductApi();
        $product = $api->getProduct($shopcart['product']);
        if(isset($product->id)) {
            return true;
        }
        return false;
    }
}
