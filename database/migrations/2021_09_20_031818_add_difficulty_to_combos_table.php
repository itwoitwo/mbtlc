<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDifficultyToCombosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('combos', function (Blueprint $table) {
            $table->string('difficulty')->default('difficult');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('combos', function (Blueprint $table) {
            $table->dropColumn('difficulty');
        });
    }
}
