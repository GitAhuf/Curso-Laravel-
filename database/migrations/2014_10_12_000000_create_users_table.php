<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('id')
            //       ->autoIncrement();

            // $table->string('name');
                  
            // $table->primary(['id', 'name']); asignar llave primaria compuesta

            // crear indices para hacer mas rapidas las consultas

            // $table->string('name')->index();
            // $table->index('name');

            // Agregar indice fulltext
            $table->string('name')->fulltext();
            $table->dropFullText('name');

            $table->string('email')->unique();
            // $table->unique('email'); definir el campo y luego asignando un valor de tipo unico
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
