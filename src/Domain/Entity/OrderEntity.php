<?php

namespace OnlineShop\Domain\Entity;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

// В РАЗРАБОТКЕ

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

    public function products() : HasMany {
        return $this->hasMany('OnlineShop\Domain\Entity\OrderProductEntity', 'id', 'order');
    }
}
