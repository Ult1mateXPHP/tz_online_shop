<?php

namespace App\Http\Controllers\Overview;

use App\Http\Controllers\Controller;
use OnlineShop\Application\Overview\ProductApi;

class MainPageController extends Controller
{
    public function index(ProductApi $api)
    {
        $products = $api->getProducts();
        return view('overview.main', ['page_name' => 'Overview', 'products' => $products]);
    }
}
