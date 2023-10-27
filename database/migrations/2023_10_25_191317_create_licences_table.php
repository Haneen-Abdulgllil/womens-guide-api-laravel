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
        Schema::create('licences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('required_documents');
            $table->string('procedures');
            $table->string('issuing_authority');
            $table->string('fees');
            $table->string('penalties');
            $table->string('notes')->nullable();
            $table->foreignId('department');
            $table->foreign('department')->references('id')->on('departments')->onUpdate('cascade');
            // $table->foreignId('offices_ids');
            // $table->foreign('offices_ids')->references('id')->on('offices')->onUpdate('cascade');
            $table->boolean("status")->default(1);
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
        Schema::dropIfExists('licences');
    }
};
