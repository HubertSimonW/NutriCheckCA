<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBrandIdNullableOnProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Brand id to be nullable
            $table->unsignedBigInteger('brand_id')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // Brand id to be not nullable
            $table->unsignedBigInteger('brand_id')->nullable(false)->change();
        });
    }
}
