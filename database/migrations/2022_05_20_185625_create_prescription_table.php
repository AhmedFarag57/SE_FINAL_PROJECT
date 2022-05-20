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
        Schema::create('prescription', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id')->unsigned();
            $table->integer('doc_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patient');
            $table->foreign('doc_id')->references('id')->on('doctor');
            $table->string('diagnosis');
            $table->integer('medicine_bill_id')->unsigned();
            $table->foreign('medicine_bill_id')->references('id')->on('medicine_bill');
            $table->timestamp('described_in');
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
        Schema::dropIfExists('prescription');
    }
};
