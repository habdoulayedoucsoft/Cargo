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
        Schema::create('perte_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perte_id')->constrained('pertes')->cascadeOnDelete();
            $table->foreignId('colis_id')->constrained('colis')->cascadeOnDelete();
            $table->decimal('montant', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perte_items');
    }
};
