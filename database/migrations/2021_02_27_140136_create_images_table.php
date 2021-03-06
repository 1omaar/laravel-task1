<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('path');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('cascade')
				  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images',function(Blueprint $table){
            $table->dropForeign('images_user_id_foreign');
        });

        
        Schema::dropIfExists('images');
    }
}
