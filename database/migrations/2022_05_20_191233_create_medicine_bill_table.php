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
        Schema::create('medicine_bill', function (Blueprint $table) {
            $table->id();
            $table->integer('doc_id')->unsigned();
            $table->foreign('doc_id')->references('id')->on('doctor');
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patient');
            $table->integer('prescription_id')->unsigned();
            $table->foreign('prescription_id')->references('id')->on('prescription');
            $table->text('medicines_id');
            $table->decimal('total',9,3);
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
        Schema::dropIfExists('medicine_bill');
    }
};
