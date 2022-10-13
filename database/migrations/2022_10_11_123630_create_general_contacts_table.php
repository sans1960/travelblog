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
        Schema::create('general_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('trait')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('phone');
            $table->string('email');
            $table->string('city');
            $table->string('legal');
            $table->string('state');
            $table->string('zipcode')->nullable();
            $table->string('duration')->nullable();
            $table->string('season')->nullable();
            $table->string('travelers')->nullable();
            $table->string('children')->nullable();
            $table->string('type')->nullable();
            $table->string('romantic')->nullable();
            $table->string('mobility')->nullable();
            $table->text('message')->nullable();
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
        Schema::dropIfExists('general_contacts');
    }
};
