<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::table('products', function (Blueprint $table) {
    //         //
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::table('products', function (Blueprint $table) {
    //         //
    //     });
    // }


    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('is_eco_friendly')->default(0)->change(); // ensure its boolean and the defualt is FALSE
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('is_eco_friendly')->change(); // rollback the changes
        });
    }










};
