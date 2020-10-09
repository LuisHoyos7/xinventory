<?php

use App\Iva;
use Illuminate\Database\Seeder;

class IvasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Iva::class, 2)->create();
    }
}
