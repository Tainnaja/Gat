<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArticleIdToAnswer2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('answerdews', function (Blueprint $table) {
            $table->bigInteger('article_id')->unsigned()->nullable(); //foreign key from article
            $table->foreign('article_id')
            ->references('id')
            ->on('articles')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Answerdew', function (Blueprint $table) {
            //
        });
    }
}
