<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresarialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresariales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser');
            $table->string('title');
            $table->string('summary');
            $table->string('dir_image');
            $table->text('content');
            $table->timestamp('fechaPublicacion')->nullable();
            $table->integer('estado');
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
        Schema::dropIfExists('empresarial');
    }
}
