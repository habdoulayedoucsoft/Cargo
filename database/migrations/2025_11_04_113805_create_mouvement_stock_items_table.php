<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mouvement_stock_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mouvement_stock_id')->constrained('mouvement_stocks')->cascadeOnDelete();
            $table->foreignId('colis_id')->constrained('colis')->cascadeOnDelete();
            $table->integer('quantite')->default(1);
            $table->decimal('price', 12, 2)->default(0);
            $table->decimal('montant', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mouvement_stock_items');
    }
};
