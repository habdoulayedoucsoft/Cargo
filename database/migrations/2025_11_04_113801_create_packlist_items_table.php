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
        Schema::create('packlist_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('packlist_id')->constrained('packlists')->cascadeOnDelete();
            $table->foreignId('customer_id')->nullable()->constrained('customers')->nullOnDelete();
            $table->string('tel_no')->nullable();
            $table->string('cargo_bills')->nullable();
            $table->string('bale_no')->nullable();
            $table->string('description')->nullable();
            $table->string('goods')->nullable();
            $table->decimal('cbm', 10, 2)->nullable();
            $table->decimal('unit_price', 12, 2)->nullable();
            $table->decimal('amount', 12, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packlist_items');
    }
};
