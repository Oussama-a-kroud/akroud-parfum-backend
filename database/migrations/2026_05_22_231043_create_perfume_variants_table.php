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
        Schema::create('perfume_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perfume_id')->constrained('perfumes')->onDelete('cascade');
            $table->string('size');
            $table->string('type');
            $table->decimal('price', 8, 2);
            $table->integer('stock_quantity')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfume_variants');
    }
};
