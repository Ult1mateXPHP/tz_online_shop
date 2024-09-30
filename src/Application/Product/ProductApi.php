<?php

namespace OnlineShop\Application\Product;

use OnlineShop\Domain\Entity\ProductEntity;

class ProductApi
{
    public function getProduct($product) {
        return $this->_get($product);
    }

    public function validateShopCart($shopcart)
    {
        $product = $this->_get($shopcart['product']);
        if(isset($product->id)) {
            return true;
        }
        return false;
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
