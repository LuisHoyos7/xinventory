<?php

use App\ArticleType;
use Illuminate\Database\Seeder;

class ArticleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ArticleType::class)->create(['name' => 'Producto']);
        factory(ArticleType::class)->create(['name' => 'Servicio']);
    }
}
