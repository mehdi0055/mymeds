<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabinetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabinets', function (Blueprint $table) {
            $table->id();
            $table->string('name_cabinet',50)->nullable();
            $table->string('email_cabinet',50)->unique();
            $table->string('phone_cabinet',14)->nullable();
            $table->string('address_cabinet')->nullable();
            $table->string('logo_cabinet')->default('cabinet1.png');
            $table->string('theme_cabinet')->default('theme-cyan');

            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('type_cabinets')->onDelete('cascade');
            $table->bigInteger('doctor_id')->unsigned();
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
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
        Schema::dropIfExists('cabinets');
    }
}
