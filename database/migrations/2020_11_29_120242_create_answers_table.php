<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            
            // La pregunta
            $table->bigInteger("question_id")->unsigned();
            $table->foreign("question_id")->references("id")->on("questions");  

            // El usuario (por el momento no)
            //$table->bigInteger("user_id")->unsigned();
            //$table->foreign("user_id")->references("id")->on("users");  

            // El valor de la respuesta
            $table->integer("value");

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
        Schema::dropIfExists('respuestas');
    }
}
