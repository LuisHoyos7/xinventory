<?php

use App\MeasureUnit;
use Illuminate\Database\Seeder;

class MeasureUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MeasureUnit::class, 5)->create();
    }
}
