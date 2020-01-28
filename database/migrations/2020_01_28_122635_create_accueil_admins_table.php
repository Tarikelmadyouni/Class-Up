<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccueilAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accueil_admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_questionnaire');
            $table->bigInteger('id_surveys');
            $table->bigInteger('id_image_upload');
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
        Schema::dropIfExists('accueil_admins');
    }
}
