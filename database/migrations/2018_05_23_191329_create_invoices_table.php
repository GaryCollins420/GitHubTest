<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('street', 55);
            $table->string('house_number', 11);
            $table->string('zipcode', 11);
            $table->string('city', 55);
            $table->integer('tax_number');
            $table->integer('kvk_number');
            $table->date('date');
            $table->unsignedInteger('product_id');
            $table->integer('amount');
            $table->integer('price');
            $table->integer('tax_percentage');
            $table->integer('tax_price');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');
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
