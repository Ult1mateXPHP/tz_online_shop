<?php

namespace OnlineShop\Application\ShopCart;

use Illuminate\Database\Eloquent\Collection;
use OnlineShop\Application\Product\ProductApi;
use OnlineShop\Domain\Entity\ShopCartProductEntity;

class ShopCartApi
{
    /**
     * Получаем пользовательствую корзину
     * @param $user
     * @return Collection|null
     */
    public function getShopCart($user) {
        return $this->_getByUser($user);
    }

    /**
     * Добавляем товар в корзину
     * @param $shopcart
     * @return void
     */
    public function newShopCartItem($shopcart) : void {
        $this->_add($shopcart);
    }

    /**
     * Получаем общую стоимость товаров
     * @param $user
     * @return float|int|mixed
     */
    public function getTotal($user) {
        $shopcart = $this->_getByUser($user);
        $total = 0;
        foreach($shopcart as $item) {
            $total = $total + ($item->product_entity->price*$item->count);
        }
        return $total;
    }

    /**
     * Очищаем корзину пользователя
     * (вызывается если пользотель сделал заказ)
     * @param $user
     * @return void
     */
    public function clearShopCart($user) : void {
        $this->_clear($user);
    }

    private function _getByUser($user) : Collection|null {
        return ShopCartProductEntity::with('product_entity')->where('user', '=', $user)->get();
    }

    private function _add($shopcart) : void {
        $entity = new ShopCartProductEntity();
        $entity->user = $shopcart['user'];
        $entity->product = $shopcart['product'];
        $entity->count = $shopcart['count'];
        $entity->save();
    }

    private function _clear($user) : void {
        ShopCartProductEntity::query()->where('user', '=', $user)->delete();
    }
}
