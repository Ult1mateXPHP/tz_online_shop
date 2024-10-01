<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use OnlineShop\Domain\Entity\ProductEntity;

class ProductEntityFactory extends Factory
{
    protected $model = ProductEntity::class;

    public function definition(): array
    {
        return [
            'name' => 'Товар: '.$this->faker->randomDigitNotZero(),
            'price' => $this->faker->randomDigitNotZero(),
            'count'=> $this->faker->randomDigitNotZero()
        ];
    }
}
