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
        Schema::create('funders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('our_products')->nullable();
            $table->text('funding_conditions')->nullable();
            $table->text('required_documents')->nullable();
            $table->text('our_features')->nullable();
            $table->text('guarantees')->nullable();
            $table->text('financing_ceilings')->nullable();
            $table->string('facebook_account')->nullable();
            $table->string('linkedin_account')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number');
            $table->foreignId('funder_resource_id');
            $table->foreign('funder_resource_id')->references('id')->on('funder_resources')->onUpdate('cascade');
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
        Schema::dropIfExists('funders');
    }
};
