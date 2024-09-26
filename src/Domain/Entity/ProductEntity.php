<?php

namespace OnlineShop\Domain\Entity;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEntity extends Model
{
    //use HasFactory;

    protected $table = 'product';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'price',
        'count'
    ];
}
