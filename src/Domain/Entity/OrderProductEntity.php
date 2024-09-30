<?php

namespace OnlineShop\Domain\Entity;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderProductEntity extends Model
{
    //use HasFactory;

    protected $table = 'order_product';

    public $timestamps = false;

    protected $fillable = [
        'order',
        'product',
        'count'
    ];
}
