<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('number_invoice');
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id')->on('people');
            $table->unsignedBigInteger('payment_type_id');
            $table->integer('estado_id')->unsigned();
            $table->date('date');
            $table->string('invoice_type')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
