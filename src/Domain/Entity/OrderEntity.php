<?php

namespace OnlineShop\Domain\Entity;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
