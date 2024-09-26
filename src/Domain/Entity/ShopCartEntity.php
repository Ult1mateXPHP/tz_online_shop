<?php

namespace OnlineShop\Domain\Entity;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopCartEntity extends Model
{
    //use HasFactory;

    protected $table = 'shop_cart';

    public $timestamps = false;

    protected $fillable = [
        'user'
    ];
}
