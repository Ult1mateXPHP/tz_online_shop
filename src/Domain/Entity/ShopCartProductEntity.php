<?php

namespace OnlineShop\Domain\Entity;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopCartProductEntity extends Model
{
    //use HasFactory;

    protected $table = 'shop_cart_product';

    public $timestamps = false;

    protected $fillable = [
        'shopcart',
        'product',
        'count'
    ];
}
