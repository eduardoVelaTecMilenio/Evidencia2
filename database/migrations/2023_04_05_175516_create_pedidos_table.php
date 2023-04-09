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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->bigIncrements("id");
            $table->bigInteger("productoId")->unsigned();
            $table->integer("cantidad");
            $table->string("estatusDelPedido");
            $table->timestamps();

            $table->foreign("productoId")->references("id")->on("productos")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
