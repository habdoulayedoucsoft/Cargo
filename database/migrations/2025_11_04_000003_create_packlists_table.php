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
        Schema::create('packlists', function (Blueprint $table) {
            $table->id();
            $table->string('shipping_company')->nullable();
            $table->string('container_numero');
            $table->string('seal_numero')->nullable();
            $table->string('consignee_name')->nullable();
            $table->string('port')->nullable();
            $table->date('loaded_date')->nullable();
            $table->date('date_of_arrive')->nullable();
            $table->string('tel')->nullable();
            $table->foreignId('container_id')->constrained('conteneurs')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packlists');
    }
};
