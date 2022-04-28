<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->float('price');
            $table->float('sale_price')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->integer('category_id')->unsigned();
            $table->tinyInteger('status')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');

    }
}