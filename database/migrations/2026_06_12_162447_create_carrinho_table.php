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
        Schema::create('carrinho', function (Blueprint $table) {
            $table->id('carrinho_id');
            $table->timestamp('criado')->useCurrent();
            $table->timestamp('atualizado')->useCurrent()->useCurrentOnUpdate();
            $table->decimal('sub_total', total: 8, places: 2);
            $table->integer('quantidade');
            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('produto_id');

            $table->foreign('pedido_id')->references('pedido_id')->on('pedido');
            $table->foreign('produto_id')->references('produto_id')->on('produto');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrinho');
    }
};
