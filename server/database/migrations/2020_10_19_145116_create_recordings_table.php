<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recordings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('chapter');
            $table->string('difficulty');

            for($i = 1; $i <= 3; $i++) {
                $table->integer("cut{$i}")->unsigned();
                $table->foreign("cut{$i}")
                      ->references('id')->on('attributes')
                      ->onDelete('cascade')
                      ->onUpdate('cascade');
            }

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
        Schema::dropIfExists('recordings');
    }
}
