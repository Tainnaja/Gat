<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {            

            $table->bigIncrements('id')->unsigned();            
            $table->integer('round_number');
            $table->float('total_skill');
            $table->float('skill_A');
            $table->float('skill_D');
            $table->float('skill_F');
            $table->float('skill_99H');            
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
        Schema::dropIfExists('skills');
    }
}
