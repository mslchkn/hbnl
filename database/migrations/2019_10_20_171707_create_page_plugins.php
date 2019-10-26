<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagePlugins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_plugins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('page_id')->nullable(false);
            $table->integer('plugin_id')->nullable(false);
            $table->json('settings')->nullable(false);
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
        Schema::dropIfExists('page_plugins');
    }
}
