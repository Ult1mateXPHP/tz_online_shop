<?php

namespace OnlineShop\Application\Product;

use OnlineShop\Domain\Entity\ProductEntity;

class ProductApi
{
    public function getProduct($product) {
        return $this->_get($product);
    }

    private function _get($id) : ProductEntity {
        return ProductEntity::query()->find($id)->first();
    }

    private function _add($product) : void {
        $product = new ProductEntity();
        $product->name = $product['name'];
        $product->price = $product['price'];
        $product->count = $product['count'];
    }
}
