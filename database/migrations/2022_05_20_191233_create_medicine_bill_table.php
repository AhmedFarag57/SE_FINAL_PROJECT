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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('doc_id');
            $table->foreign('doc_id')->references('id')->on('doctor');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patient');
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
