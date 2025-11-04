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
        Schema::create('operation_transports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicule_id')->constrained('vehicules')->cascadeOnDelete();
            $table->foreignId('conteneur_id')->nullable()->constrained('conteneurs')->nullOnDelete();
            $table->decimal('cout_transport', 12, 2)->default(0);
            $table->decimal('revenu_transport', 12, 2)->default(0);
            $table->date('date_operation');
            $table->enum('statut', ['Planifié', 'En cours', 'Terminé'])->default('Planifié');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation_transports');
    }
};
