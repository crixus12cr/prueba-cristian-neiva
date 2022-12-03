<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('consecutivo')->nullable();
            $table->date('fecha')->format('Y-m-d');
            $table->time('hora_inicio')->isoFormat('H:mm:ss A');
            $table->time('hora_final')->isoFormat('H:mm:ss A');

            /* relaciones */
            $table->foreignId('users_id')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('derechos_culturales_id')
            ->constrained('derechos_culturales')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('nacs_id')
            ->constrained('derechos_culturales')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('experticias_id')
            ->constrained('experticias')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}
