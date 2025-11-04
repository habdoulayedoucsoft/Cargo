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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->foreignId('colis_id')->nullable()->constrained('colis')->nullOnDelete();
            $table->decimal('montant_paye', 12, 2);
            $table->decimal('taxe_payement', 12, 2)->default(0);
            $table->date('date_paiement')->nullable();
            $table->date('date_limite_paiement')->nullable();
            $table->enum('mode_paiement', ['espèces', 'mobile_money', 'virement'])->default('espèces');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
