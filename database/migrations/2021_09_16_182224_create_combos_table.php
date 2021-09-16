<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Foundation\Console\Presets\None;
use phpDocumentor\Reflection\Types\Null_;

class CreateCombosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('fighter');
            $table->integer('damage')->nullable();
            $table->string('version');
            $table->integer('favorite_count')->default(0);
            $table->integer('adoption_count')->default(0);
            $table->string('starting');
            $table->string('place')->default('どこでも');
            $table->integer('magic_circuit')->default(0);
            $table->integer('moon')->default(0);
            $table->string('recipe');
            $table->string('explain')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
            // 外部キー制約
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
        Schema::dropIfExists('combos');
    }
}
