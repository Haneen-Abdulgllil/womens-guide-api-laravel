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
        Schema::create('licence_office', function (Blueprint $table) {
            $table->id();
            $table->foreignId('licence_id');
            $table->foreign('licence_id')->references('id')->on('licences')->onUpdate('cascade');
            $table->foreignId('office_id');
            $table->foreign('office_id')->references('id')->on('offices')->onUpdate('cascade');
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
        Schema::dropIfExists('licence_office');
    }
};
