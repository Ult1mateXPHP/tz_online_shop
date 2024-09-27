<?php

namespace OnlineShop\Application\ShopCart;

use Illuminate\Database\Eloquent\Collection;
use OnlineShop\Domain\Entity\ShopCartProductEntity;

class ShopCartApi
{
    public function getShopCart($shopcart) {
        return $this->_get($shopcart);
    }

    public function newShopCartItem($shopcart) : void {
        $this->_add($shopcart);
    }

    public function getTotal($user) {
        $items = $this->_get($user);
        $total = 0;
        foreach($items as $item) {
            $total = $total + ($item->count*$item->product_entity->price);
        }
        return $total;
    }

    private function _get($user) : Collection|null {
        return ShopCartProductEntity::with('product_entity')->where('user', '=', $user)->get();
    }

    private function _add($shopcart) : void {
        $entity = new ShopCartProductEntity();
        $entity->user = $shopcart['user'];
        $entity->product = $shopcart['product'];
        $entity->count = $shopcart['count'];
        $entity->save();
    }
}
