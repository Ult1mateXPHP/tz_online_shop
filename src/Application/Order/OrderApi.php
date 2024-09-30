<?php

namespace OnlineShop\Application\Order;

use Illuminate\Database\Eloquent\Collection;
use OnlineShop\Domain\Entity\OrderEntity;

// В РАЗРАБОТКЕ
class OrderApi
{
    public function getOrders($user) {
        return $this->_get($user);
    }

    public function newOrder($order) : void {
        $this->_add($order);
    }

    private function _get($user) : Collection|null {
        return OrderEntity::with('products')->where('user', '=', $user)->get();
    }

    private function _add($order) : void {
        $entity = new OrderEntity();
        $entity->user = $order['user'];
        $entity->price = $order['price'];
        $entity->status = $order['status'];
        $entity->save();
    }
}
