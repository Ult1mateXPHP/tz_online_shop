<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use OnlineShop\Domain\Entity\ProductEntity;

class ProductEntityDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductEntity::factory(1);
    }
}
