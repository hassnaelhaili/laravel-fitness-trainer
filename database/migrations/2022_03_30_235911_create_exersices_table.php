<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exersices', function (Blueprint $table) {
            $table->id();
            $table->integer('program_id');
            $table->unsignedInteger('week_number');
            $table->unsignedInteger('day_number');
            $table->text('exersice_name');
            $table->integer('sets');
            $table->integer('reps');
            $table->integer('rest');
            $table->integer('duration');
            $table->text('note');
            $table->text('order');
            
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
        Schema::dropIfExists('exersices');
    }
};
