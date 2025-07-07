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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });

        DB::table('categorias')->insert([
            ['nombre' => 'Electrotecnia'],
            ['nombre' => 'Gestión Ambiental'],
            ['nombre' => 'Mantenimiento de la Vía Pública'],
            ['nombre' => 'Espacios Verdes'],
            ['nombre' => 'Infraestructura Pluvial']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
