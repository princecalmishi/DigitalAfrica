<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('appname');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('logo');
            $table->string('contactemail');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('pinterest');
            $table->string('skype');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
