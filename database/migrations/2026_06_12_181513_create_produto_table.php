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
        Schema::create('produto', function (Blueprint $table) {
            $table->id('produto_id');
            $table->timestamp('criado')->useCurrent();
            $table->timestamp('atualizado')->useCurrent()->useCurrentOnUpdate();
            $table->string('nome');
            $table->integer('estoque')->default(0);
            $table->string('status');
            $table->decimal('valor', total: 8, places: 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
