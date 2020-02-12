<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            //$table->unsignedBigInteger('graphique_students_id');
            //$table->unsignedBigInteger('matieres_id');
            //$table->unsignedBigInteger('matiere_customers_id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('classe');
            $table->string('ecole');
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
