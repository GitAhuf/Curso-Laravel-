<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('slug')
                  ->after('name')
                  ->nullable()
                  ->unique();

            $table->integer('index')//-1,-2,-3,-4,-5 a 1,2,3,4,5,6
                //   ->autoIncrement()
                //   ->default(5);
                  ->unsigned(); //1,2,3,4,5,6
            
                $table->timestamp('fecha_actual');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
