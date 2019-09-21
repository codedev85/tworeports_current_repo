<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rank_name');
            $table->date('date');
            $table->string('twitter');
            $table->string('add_sub_twit');
            $table->string('instagram');
            $table->string('add_sub_inst');
            $table->string('facebook');
            $table->string('add_sub_fb');
            $table->string('total');
            $table->smallInteger('category-id');
            $table->dateTime('deleted_at')->nullable();
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
        Schema::dropIfExists('ranks');
    }
}
