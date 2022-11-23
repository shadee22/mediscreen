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
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->string("Rfg com Code No");
            $table->string("First Name");
            $table->string("Last Name");
            $table->string("Serial No");
            $table->string("District");
            $table->string("Sex");
            $table->string("Age");
            $table->string("Status");
            $table->string("Nationality");
            $table->string("Height(cm)");
            $table->string("Weight(cm)");
            $table->string("Passport NO");
            $table->string("Place of Issue");
            $table->string("Position Applied for");
            $table->string("Date");
            $table->string("Recruiting Agency");
            $table->string("Country");
            $table->unsignedBigInteger('medi_id');
            $table->foreign('medi_id')->references('id')->on('medical_details')->onDelete('cascade');
            $table->unsignedBigInteger('labo_id');
            $table->foreign('labo_id')->references('id')->on('labo_details')->onDelete('cascade');
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_details');
    }
};
