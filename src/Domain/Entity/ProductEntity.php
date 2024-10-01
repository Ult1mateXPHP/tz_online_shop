<?php

namespace OnlineShop\Domain\Entity;

use Database\Factories\ProductEntityFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEntity extends Model
{
    use HasFactory;

    protected $table = 'product';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'price',
        'count'
    ];

    protected static function newFactory() : Factory
    {
        return ProductEntityFactory::new();
    }
}
