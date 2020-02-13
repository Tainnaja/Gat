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
            $table->string('text1-1')->nullable();;
            $table->string('text1-2')->nullable();;
            $table->string('text1-3')->nullable();;
            $table->string('text1-4')->nullable();;
            $table->string('text1-5')->nullable();;
            $table->string('text1-6')->nullable();;
            $table->string('text1-7')->nullable();;
            $table->string('text1-8')->nullable();;
            $table->string('text1-9')->nullable();;
            $table->string('text1-10')->nullable();
            $table->string('set1-1-1')->nullable();
            $table->string('set1-1-2')->nullable();
            $table->string('set1-1-3')->nullable();
            $table->string('set1-1-4')->nullable();
            $table->string('set1-2-1')->nullable();
            $table->string('set1-2-2')->nullable();
            $table->string('set1-2-3')->nullable();
            $table->string('set1-2-4')->nullable();
            $table->string('set1-3-1')->nullable();
            $table->string('set1-3-2')->nullable();
            $table->string('set1-3-3')->nullable();
            $table->string('set1-3-4')->nullable();
            $table->string('set1-4-1')->nullable();
            $table->string('set1-4-2')->nullable();
            $table->string('set1-4-3')->nullable();
            $table->string('set1-4-4')->nullable();
            $table->string('set1-5-1')->nullable();
            $table->string('set1-5-2')->nullable();
            $table->string('set1-5-3')->nullable();
            $table->string('set1-5-4')->nullable();
            $table->string('set1-6-1')->nullable();
            $table->string('set1-6-2')->nullable();
            $table->string('set1-6-3')->nullable();
            $table->string('set1-6-4')->nullable();
            $table->string('set1-7-1')->nullable();
            $table->string('set1-7-2')->nullable();
            $table->string('set1-7-3')->nullable();
            $table->string('set1-7-4')->nullable();
            $table->string('set1-8-1')->nullable();
            $table->string('set1-8-2')->nullable();
            $table->string('set1-8-3')->nullable();
            $table->string('set1-8-4')->nullable();
            $table->string('set1-9-1')->nullable();
            $table->string('set1-9-2')->nullable();
            $table->string('set1-9-3')->nullable();
            $table->string('set1-9-4')->nullable();
            $table->string('set1-10-1')->nullable();
            $table->string('set1-10-2')->nullable();
            $table->string('set1-10-3')->nullable();
            $table->string('set1-10-4')->nullable();       
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
