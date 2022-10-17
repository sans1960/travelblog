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
        Schema::create('page_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('trait')->nullable();
            $table->string('name');
            $table->string('page');
            $table->string('tag');
            $table->string('surname');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('city')->nullable();
            $table->string('legal');
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
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
        Schema::dropIfExists('page_contacts');
    }
};
