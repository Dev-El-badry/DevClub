<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelAssignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_assign', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('level_id');
            $table->unsignedInteger('deadline_id');
            $table->unsignedInteger('cat_id');
            $table->unsignedDecimal('cost', 7,2);

            $table->foreign('level_id')->references('id')->on('academic_levels');
            $table->foreign('deadline_id')->references('id')->on('deadlines');
            $table->foreign('cat_id')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('level_assign');
    }
}
