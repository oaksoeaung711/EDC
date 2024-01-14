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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('primaryphonenumber')->nullable();
            $table->string('secondaryphonenumber')->nullable();
            $table->string('worktime')->nullable();
            $table->string('address')->nullable();
            $table->string('facebookurl')->nullable();
            $table->string('googlemapurl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
