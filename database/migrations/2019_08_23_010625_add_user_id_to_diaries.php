<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToDiaries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
 {
     Schema::table('diaries', function (Blueprint $table) {
         $table->integer('user_id')->unsigned();

         //外部キーに設定
         $table->foreign('user_id')->references('id')->on('users');
     });
 }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diaries', function (Blueprint $table) {
            //
        });
    }
}
