<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPUnit\Framework\once;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_doctor', function (Blueprint $table) {
            $table->unsignedBigInteger('doc_id');
            $table->unsignedBigInteger('nur_id');
            $table->foreign('doc_id')->references('id')->on('doctor');
            $table->foreign('nur_id')->references('id')->on('nurse');
            $table->primary(['doc_id', 'nur_id']);
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
        Schema::dropIfExists('nurse_doctor');
    }
};
