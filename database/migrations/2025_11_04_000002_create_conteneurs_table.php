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
        Schema::create('conteneurs', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->unique();
            $table->decimal('capacite', 10, 2)->nullable();
            $table->enum('statut', ['en_transit', 'au_port', 'en_depot'])->default('en_transit');
            $table->date('date_arrivee')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conteneurs');
    }
};
