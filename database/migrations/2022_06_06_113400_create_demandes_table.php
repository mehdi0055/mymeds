<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('lname',50);
            $table->string('fname',50);
            $table->string('email',50)->unique();
            $table->string('phone',14)->unique();
            $table->string('cin',10)->unique();
            $table->string('code_doctor',50)->unique();
            $table->string('state',50)->nullable();
            $table->string('city',50)->nullable();
            $table->string('zipcode',10)->nullable();
            $table->string('address')->nullable();
            $table->string('name_cabinet',50)->nullable();
            $table->string('phone_cabinet',14)->nullable();
            $table->string('email_cabinet',50)->unique();
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('type_cabinets')->onDelete('cascade');
            $table->string('address_cabinet')->nullable();
            $table->string('logo_cabinet')->default('cabinet1.png');
            $table->bigInteger('delete')->default(0);
            $table->bigInteger('status')->default(0);
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
        Schema::dropIfExists('demandes');
    }
}
