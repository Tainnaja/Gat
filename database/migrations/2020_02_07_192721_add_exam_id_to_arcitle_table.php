<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExamIdToArcitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('articles', function (Blueprint $table) {
        //     $table->bigInteger('exam_id')->unsigned(); 
        //     $table->foreign('exam_id')
        //     ->references('id')
        //     ->on('exams')
        //     ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('articles', function (Blueprint $table) {
        //     //
        // });
    }
}
