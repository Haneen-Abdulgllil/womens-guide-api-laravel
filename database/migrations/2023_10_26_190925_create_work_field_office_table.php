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
        Schema::create('work_field_office', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_field_id');
            $table->foreign('work_field_id')->references('id')->on('work_fields')->onUpdate('cascade');
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
        Schema::dropIfExists('work_field_office');
    }
};
