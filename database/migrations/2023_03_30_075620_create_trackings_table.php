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
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->string('po_number');
            $table->string('employee_id')->nullable();
            $table->string('progress_po_id')->nullable();

            $table->string('departement_id')->nullable();
            $table->string('production_po_id')->nullable();
            $table->string('finance_po_id')->nullable();
            $table->string('marketing_po_id')->nullable();

            $table->string('status_id')->nullable();
            $table->string('date')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trackings');
    }
};
