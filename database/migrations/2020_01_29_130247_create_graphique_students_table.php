<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraphiqueStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graphique_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customers_id');
            $table->bigInteger('notes');
            $table->string('mois');
            $table->string('matiere');
            $table->string('date');
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
        Schema::dropIfExists('graphique_students');
    }
}
