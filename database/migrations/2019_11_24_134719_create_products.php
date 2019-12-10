<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 255)->nullable(false);
            $table->text('description')->nullable(false);
            $table->integer('price')->nullable(false);
            $table->integer('quantity')->nullable(false)->default(0);
            $table->integer('category_id')->nullable(false);
            $table->tinyInteger('top')->nullable(false)->default(0);
            $table->tinyInteger('best')->nullable(false)->default(0);
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
        Schema::dropIfExists('products');
    }
}
