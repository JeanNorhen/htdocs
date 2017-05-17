<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();      
            $table->date('data');      
            $table->string('anotacao');
            $table->integer('prontuario_id')->unsigned();            
            $table->foreign('prontuario_id')->
                references('id')->
                on('prontuarios')->
                onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('itens');
    }
}
