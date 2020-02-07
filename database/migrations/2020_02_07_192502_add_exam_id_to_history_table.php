<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExamIdToHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('historys', function (Blueprint $table) {
            $table->bigInteger('exam_id')->unsigned(); 
            $table->foreign('exam_id')
            ->references('id')
            ->on('exams'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historys', function (Blueprint $table) {
            //
        });
    }
}
