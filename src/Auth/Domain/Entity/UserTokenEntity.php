<?php

namespace Domain\Entity;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTokenEntity extends Model
{
    protected $table = 'user_token';

    public $timestamps = false;

    protected $fillable = [
        'token',
        'userid'
    ];
}
