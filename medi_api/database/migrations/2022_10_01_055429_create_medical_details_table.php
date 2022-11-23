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
        Schema::create('medical_details', function (Blueprint $table) {
            $table->id();
            $table->string('Left_Eye');
            $table->string('Right_Eye');
            $table->string('Left_Ear');
            $table->string('Right_Ear');
            $table->string('Systemetic_Examination');
            $table->string('Blood_pressure');
            $table->string('Heart');
            $table->string('Lungs');
            $table->string('Abdomen');
            $table->string('Hernia');
            $table->string('Vericose_veins');
            $table->string('Extremites');
            $table->string('Skin');
            $table->string('Venerial_Diseases');
            $table->string('Others');
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
        Schema::dropIfExists('medical_details');
    }
};
