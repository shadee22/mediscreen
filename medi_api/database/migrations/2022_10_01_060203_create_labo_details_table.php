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
        Schema::create('labo_details', function (Blueprint $table) {
            $table->id();
            $table->string('Suger');
            $table->string('Albumin');
            $table->string('Pregnancy');
            $table->string('Helmenthes');
            $table->string('Salmonella/Shigella');
            $table->string('VCholera');
            $table->string('Giardia');
            $table->string('Hemoglobin');
            $table->string('Malaria Film');
            $table->string('Micro Filaria');
            $table->string('FBS/RBS');
            $table->string('VDRL');
            $table->string('LFTS');
            $table->string('Creatinine');
            $table->string('Urea');
            $table->string('TPHA');
            $table->string('AntiHCV');
            $table->string('HIVTeST(HIBI-II)');
            $table->string('HbsAg');
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
        Schema::dropIfExists('labo_details');
    }
};
