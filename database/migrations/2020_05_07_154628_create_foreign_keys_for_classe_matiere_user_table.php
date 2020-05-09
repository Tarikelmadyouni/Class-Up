<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForClasseMatiereUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('classe_matiere_user', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('classe_matiere_id')->references('id')->on('classe_matieres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classe_matiere_user', function(Blueprint $table) {

            $table->dropForeign('classe_matiere_user_user_id_foreign');
            $table->dropForeign('classe_matiere_user_classe_matiere_id_foreign');
        });
    }
}
