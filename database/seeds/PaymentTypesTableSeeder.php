<?php

use App\PaymentType;
use Illuminate\Database\Seeder;

class PaymentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PaymentType::class)->create(['name' => 'Efectivo']);
        factory(PaymentType::class)->create(['name' => 'Transferencia bancaria']);
        factory(PaymentType::class)->create(['name' => 'Cheque']);
        factory(PaymentType::class)->create(['name' => 'Tarjeta débito']);
        factory(PaymentType::class)->create(['name' => 'Tarjeta crédito']);
    }
}
