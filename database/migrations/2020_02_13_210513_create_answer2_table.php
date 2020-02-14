<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswer2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answerdews', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();     
            // $table->integer('article_id');
            // $table->string('answer_name');
            $table->string('text1_1')->nullable();;
            $table->string('text1_2')->nullable();;
            $table->string('text1_3')->nullable();;
            $table->string('text1_4')->nullable();;
            $table->string('text1_5')->nullable();;
            $table->string('text1_6')->nullable();;
            $table->string('text1_7')->nullable();;
            $table->string('text1_8')->nullable();;
            $table->string('text1_9')->nullable();;
            $table->string('text1_10')->nullable();
            $table->string('set1_1_1')->nullable();
            $table->string('set1_1_2')->nullable();
            $table->string('set1_1_3')->nullable();
            $table->string('set1_1_4')->nullable();
            $table->string('set1_2_1')->nullable();
            $table->string('set1_2_2')->nullable();
            $table->string('set1_2_3')->nullable();
            $table->string('set1_2_4')->nullable();
            $table->string('set1_3_1')->nullable();
            $table->string('set1_3_2')->nullable();
            $table->string('set1_3_3')->nullable();
            $table->string('set1_3_4')->nullable();
            $table->string('set1_4_1')->nullable();
            $table->string('set1_4_2')->nullable();
            $table->string('set1_4_3')->nullable();
            $table->string('set1_4_4')->nullable();
            $table->string('set1_5_1')->nullable();
            $table->string('set1_5_2')->nullable();
            $table->string('set1_5_3')->nullable();
            $table->string('set1_5_4')->nullable();
            $table->string('set1_6_1')->nullable();
            $table->string('set1_6_2')->nullable();
            $table->string('set1_6_3')->nullable();
            $table->string('set1_6_4')->nullable();
            $table->string('set1_7_1')->nullable();
            $table->string('set1_7_2')->nullable();
            $table->string('set1_7_3')->nullable();
            $table->string('set1_7_4')->nullable();
            $table->string('set1_8_1')->nullable();
            $table->string('set1_8_2')->nullable();
            $table->string('set1_8_3')->nullable();
            $table->string('set1_8_4')->nullable();
            $table->string('set1_9_1')->nullable();
            $table->string('set1_9_2')->nullable();
            $table->string('set1_9_3')->nullable();
            $table->string('set1_9_4')->nullable();
            $table->string('set1_1_-1')->nullable();
            $table->string('set1_1_-2')->nullable();
            $table->string('set1_1_-3')->nullable();
            $table->string('set1_1_-4')->nullable();       
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
        Schema::dropIfExists('answerdews');
    }
}
