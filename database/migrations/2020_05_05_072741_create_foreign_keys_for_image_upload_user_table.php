<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForImageUploadUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('image_upload_user', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('image_upload_id')->references('id')->on('image_uploads')->onDelete('cascade');
            $table->foreign('reception_id')->references('id')->on('receptions')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('image_upload_user', function(Blueprint $table) {

            $table->dropForeign('image_upload_user_user_id_foreign');
            $table->dropForeign('image_upload_user_image_upload_id_foreign');
            $table->dropForeign('image_upload_user_reception_id_foreign');
        });
    }
}
