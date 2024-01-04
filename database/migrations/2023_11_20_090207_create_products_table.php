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
            $table->String('name');
            $table->String('type');
            $table->String('brand');
            $table->String('buy_price');
            $table->String('sale_price');
            $table->String('category');
            $table->text('details');
            $table->String('photo1');
            $table->String('photo2');
            $table->String('photo3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
