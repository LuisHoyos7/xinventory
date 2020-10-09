<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained();
            $table->foreignId('invoice_id')->constrained();
            $table->foreignId('iva_id')->constrained();
            $table->integer('amount_article');
            $table->decimal('price_article', 18, 2);
            $table->decimal('discount', 18, 2);
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
        Schema::dropIfExists('article_invoices');
    }
}
