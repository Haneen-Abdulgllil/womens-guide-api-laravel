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
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('address');
            $table->string('google_map')->nullable();
            $table->string('required_actions');
            $table->string('notes')->nullable();
            $table->string('website_url');
            $table->string('logo')->default('default_logo.webp');
            $table->string('facebook_account')->nullable();
            $table->string('linkedin_account')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number');
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
        Schema::dropIfExists('offices');
    }
};
