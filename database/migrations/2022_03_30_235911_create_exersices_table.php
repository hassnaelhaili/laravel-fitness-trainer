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
            $table->integer('week_number');
            $table->enum('day_number',[1,2,3,4,5,6,7]);
            $table->text('exersice_name');
            $table->integer('sets')->nullable();
            $table->integer('reps')->nullable();
            $table->integer('rest')->nullable();
            $table->integer('duration')->nullable();
            $table->text('note')->nullable();
            $table->integer('tartib');
            
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
