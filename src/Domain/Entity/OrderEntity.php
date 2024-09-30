<?php

namespace OnlineShop\Domain\Entity;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class OrderEntity extends Model
{
    //use HasFactory;

    protected $table = 'order';

    public $timestamps = false;

    protected $fillable = [
        'user',
        'price',
        'status'
    ];

    public function products() : HasManyThrough {
        return $this->hasManyThrough(
            'OnlineShop\Domain\Entity\ProductEntity' ,
            'OnlineShop\Domain\Entity\OrderProductEntity',
            'order',
            'id',
            'id',
            'product'
        );
    }
}
