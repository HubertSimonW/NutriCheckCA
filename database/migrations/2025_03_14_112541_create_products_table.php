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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->nullable(); // Make the brand id nullable
            $table->string('name');
            $table->string('size');
            $table->integer('carbs');
            $table->integer('fat');
            $table->integer('protein');
            $table->integer('cal');
            $table->timestamps();

            // FK UPDATED to allow nullable brand idd
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
