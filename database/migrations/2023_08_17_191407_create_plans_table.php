<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('title',255);
            $table->string('service1',255)->nullable();
            $table->string('service2',255)->nullable();
            $table->string('service3',255)->nullable();
            $table->string('service4',255)->nullable();
            $table->string('service5',255)->nullable();
            $table->string('service6',255)->nullable();
            $table->integer('price');
            $table->integer('discount');
            $table->string('priceDesc',255);
            $table->integer('clicks')->default(0);
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
        Schema::dropIfExists('plans');
    }
};
