<?php

namespace OnlineShop\Application\Order;

use Illuminate\Database\Eloquent\Collection;
use OnlineShop\Application\ShopCart\ShopCartApi;
use OnlineShop\Domain\Entity\OrderEntity;
use OnlineShop\Domain\Entity\OrderProductEntity;

class OrderApi
{
    /**
     * Получаем все заказы
     * @param $user
     * @return Collection|null
     */
    public function getOrders($user) {
        return $this->_get($user);
    }

    /**
     * Создаем заказ
     * @param $order
     * @param $products
     * @return void
     */
    public function newOrder($order ,$products) : void {
        $order_id = $this->_add($order);
        foreach($products as $product) {
            $this->_addOrderProduct($order_id, $product->product_entity->id, $product->count);
        }
        $api = new ShopCartApi();
        $api->clearShopCart(auth()->user()->id);
    }

    private function _get($user) : Collection|null {
        return OrderEntity::with('products')->where('user', '=', $user)->get();
    }

    private function _add($order) {
        $entity = OrderEntity::query()->create($order);
        return $entity->id;
    }

    private function _addOrderProduct($order, $product, $count) : void {
        $entity = new OrderProductEntity();
        $entity->order = $order;
        $entity->product = $product;
        $entity->count = $count;
        $entity->save();
    }
}
