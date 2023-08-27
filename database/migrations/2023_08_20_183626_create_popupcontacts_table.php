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
        Schema::create('popupcontacts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 50);
            $table->string('email');
            $table->string('phone', 50);
            $table->string('c_market', 50);
            $table->string('h_about', 50);
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
        Schema::dropIfExists('popupcontacts');
    }
};
