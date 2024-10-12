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
            $table->string('product_name',128)->Unique()->nullable(false);
            $table->text('description')->nullable(false);
            $table->text('features')->nullable(false);
            $table->tinyInteger('length')->nullable(false);
            $table->tinyInteger('Width')->nullable(false);
            $table->tinyInteger('thickness')->nullable(false);
            $table->tinyInteger('rocker')->nullable(false);
            $table->tinyInteger('review')->nullable(false);
            $table->integer('price')->nullable(false);
            $table->integer('review_number')->nullable(false);
            $table->timestamps();
            $table->softDeletes();
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
