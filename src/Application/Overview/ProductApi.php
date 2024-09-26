<?php

namespace OnlineShop\Application\Overview;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use OnlineShop\Domain\Entity\ProductEntity;

class ProductApi
{
    public function getProducts() : Collection {
        $products = ProductEntity::all();
        return $products;
    }
}
