
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
    Schema::create('tareas', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->text('descripcion')->nullable();
        $table->unsignedBigInteger('proyecto_id');
        $table->unsignedBigInteger('empleado_id');
        $table->date('fecha_inicio');
        $table->date('fecha_fin')->nullable();
        $table->string('estado');
        $table->timestamps();

        $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
        $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
