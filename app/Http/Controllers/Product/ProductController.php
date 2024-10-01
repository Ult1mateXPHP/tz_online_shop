<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use OnlineShop\Application\Product\ProductApi;
use OnlineShop\Domain\Entity\ProductEntity;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductController extends Controller
{
    public function index()
    {
        //...
    }

    /**
     * [GET]
     * Запрос на генерацию товаров
     * @param int $count
     * @param ProductApi $productApi
     * @return RedirectResponse
     */
    public function generate(int $count, ProductApi $productApi) : RedirectResponse {
        if($count > 0) {
            $productApi->generateProduct($count);
        }
        return redirect('/');
    }
}
