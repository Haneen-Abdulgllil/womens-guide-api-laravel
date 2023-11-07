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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            // about app
            $table->string('project_name');
            $table->string('project_logo');
            $table->text('about_application');
            $table->text('application_service');
            // about funder
            $table->string('funder_name');
            $table->string('funder_logo');
            $table->text('funder_description');
            // about implementing
            $table->string('implementing_entity_name');
            $table->string('implementing_entity_logo');
            $table->text('implementing_entity_description');
            // about coord943wtrinating
            $table->string('coordinating_entity_name');
            $table->string('coordinating_entity_logo');
            $table->text('coordinating_entity_description');
            // contact info
            $table->string('email')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('phone_number');
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
        Schema::dropIfExists('settings');
    }
};
