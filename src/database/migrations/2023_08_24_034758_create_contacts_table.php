<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',255);
            $table->boolean('gender')->unsigned()->comment('1:男性2:女性');
            $table->string('email',255);
            $table->char('postcode',8);
            $table->string('address',255);
            $table->string('building_name',255)->nullable();
            $table->text('opinion',120);
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
        Schema::dropIfExists('contacts');
    }
}
