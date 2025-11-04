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
        Schema::create('colis', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->unique();
            $table->string('description')->nullable();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->string('colis_type')->nullable();
            $table->foreignId('entrepot_id')->nullable()->constrained('entrepots')->nullOnDelete();
            $table->decimal('price', 12, 2)->default(0);
            $table->enum('statut', ['en_depot', 'livre', 'endommagé', 'perdu'])->default('en_depot');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colis');
    }
};
