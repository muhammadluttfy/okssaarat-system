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
        Schema::create('tracking_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tracking_id');
            $table->string('image'); // tambahkan default value pada field image
            $table->timestamps();

            $table->foreign('tracking_id')->references('id')->on('trackings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracking_images');
    }
};
