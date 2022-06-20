<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('lname');
            $table->string('fname');
            $table->enum('gender', ['female', 'male'])->default('male');
            $table->date('date_birth')->nullable();
            $table->string('cin')->unique();
            $table->string('phone_personel')->unique()->nullable();
            $table->string('email_personel')->unique()->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('address')->nullable();
            $table->string('profession')->nullable();
            $table->date('date_embauche')->nullable();
            $table->double('salaire')->nullable();
            $table->bigInteger('has_account')->default(0);
            $table->bigInteger('active')->default(0);
            $table->bigInteger('delete')->default(0);
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
        Schema::dropIfExists('personnels');
    }
}
