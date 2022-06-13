<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us_admins', function (Blueprint $table) {
            $table->id();
            $table->string('nameContact')->nullable();
            $table->text('subjectContact')->nullable();
            $table->string('emailContact')->nullable();
            $table->string('phoneContact')->nullable();
            $table->longText('message')->nullable();
            $table->boolean('archive')->nullable()->default(0);
            $table->boolean('trash')->nullable()->default(0);
            $table->boolean('read')->nullable()->default(0);
            $table->boolean('delete')->nullable()->default(0);
            $table->boolean('start')->nullable()->default(0);
            $table->boolean('permenant')->nullable()->default(0);
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
        Schema::dropIfExists('contact_us_admins');
    }
}
