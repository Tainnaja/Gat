<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('exams', function (Blueprint $table) {
        //     $table->bigIncrements('id')->unsigned();
        //     $table->string('exam_name');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('historys');
        // Schema::dropIfExists('answers');
        // Schema::dropIfExists('articles');
        // Schema::dropIfExists('exams');
    }
}
