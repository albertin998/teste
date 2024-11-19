<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('usuarios', function (Blueprint $table) {
        $table->id(); // Cria o campo 'id' como chave primária
        $table->string('nome'); // Nome do usuário
        $table->string('email')->unique(); // Email do usuário, único
        $table->string('numero_cadastro')->unique(); // Número de cadastro, único
        $table->timestamps(); // Campos 'created_at' e 'updated_at'
    });
}

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
