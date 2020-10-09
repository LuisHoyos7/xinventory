<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(PersonTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ArticleTypesTableSeeder::class);
        $this->call(MeasureUnitsTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(PaymentTypesTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        $this->call(IvasTableSeeder::class);
    }
}
