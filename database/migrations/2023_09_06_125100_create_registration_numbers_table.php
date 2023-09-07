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
        Schema::create('registration_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('source')->default('Kiosk');
            $table->integer('order_number')->default('2010001');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('status')->default('Đang chờ');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_numbers');
    }
};
