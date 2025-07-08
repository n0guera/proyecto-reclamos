<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->timestamps();
        });
        //Con esto creamos siempre las mismas categorias al correr las migraciones
        DB::table('categorias')->insert([
            ['nombre' => 'Electrotecnia'],
            ['nombre' => 'Gestión Ambiental'],
            ['nombre' => 'Mantenimiento de la Vía Pública'],
            ['nombre' => 'Espacios Verdes'],
            ['nombre' => 'Infraestructura Pluvial'],
        ]);

        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->timestamps();
        });
        DB::table('estados')->insert([
            ['nombre' => 'Pendiente'],
            ['nombre' => 'Parcialmente realizado'],
            ['nombre' => 'Realizado'],
        ]);
        
        Schema::create('reclamos', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_usuarios');
        $table->string('ubicacion', 500);
        $table->string('foto', 255)->nullable();
        $table->text('descripcion');
        $table->unsignedBigInteger('id_categoria');
        $table->unsignedBigInteger('id_estado');
        $table->timestamps();

        $table->foreign('id_usuarios')->references('id')->on('users');
        $table->foreign('id_categoria')->references('id')->on('categorias');
        $table->foreign('id_estado')->references('id')->on('estados');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados_categorias_reclamos');
    }
};
