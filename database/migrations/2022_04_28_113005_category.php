<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');//tương đương tự động tăng dần làm khóa chính:
            $table->string('name',150)->unique();
            $table->tinyInteger('status')->default(0);
            $table->timestamp('deleted_at')->nullable(); // được null 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *s
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');

    }
}
