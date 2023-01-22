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
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->string('niveau');
            $table->foreignId('element_module_id')->references('id')->on('element_modules');
            $table->foreignId('prof_id')->references('id')->on('profs');
            $table->string('prof');
            $table->string('element_module');
            $table->string('type');
            $table->integer('misemestre');
            $table->integer('jour');
            $table->integer('temps');
            $table->string('salle');
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
        Schema::dropIfExists('seances');
    }
};
