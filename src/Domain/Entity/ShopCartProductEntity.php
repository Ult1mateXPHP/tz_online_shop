<?php

namespace OnlineShop\Domain\Entity;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShopCartProductEntity extends Model
{
    //use HasFactory;

    protected $table = 'shop_cart_product';

    public $timestamps = false;

    protected $fillable = [
        'user',
        'product',
        'count'
    ];

    public function product_entity() : BelongsTo {
        return $this->belongsTo('OnlineShop\Domain\Entity\ProductEntity', 'product');
    }
}
