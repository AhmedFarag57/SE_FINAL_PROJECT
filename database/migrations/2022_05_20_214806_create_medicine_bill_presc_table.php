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
        Schema::create('medicine_bill_presc', function (Blueprint $table) {
            $table->foreignId('medicine_bill_id');
            //$table->foreign('medicine_bill_id')->references('id')->on('medicine_bills');
            $table->foreignId('prescription_id');
            //$table->foreign('prescription_id')->references('id')->on('prescriptions');
            $table->primary(['prescription_id', 'medicine_bill_id'],'id');
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
        Schema::dropIfExists('medicine_bill_presc');
    }
};
