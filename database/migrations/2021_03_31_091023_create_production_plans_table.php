<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_plans', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->double('raw_thickness', 4, 1);
            $table->double('raw_width', 5, 1);
            $table->double('raw_length', 5, 1);
            $table->double('raw_volume', 7, 3);
            $table->double('finished_thickness', 4, 1);
            $table->double('finished_width', 5, 1);
            $table->double('finished_length', 5, 1);
            $table->integer('pcs_per_full_width');
            $table->double('finished_volume', 7, 3);
            $table->double('theoretical_loss', 4, 2);
            $table->integer('shift_time');
            $table->double('wip_length_no_defects', 5, 1);
            $table->double('wip_overlength', 5, 1);
            $table->double('wip_overwidth', 5, 1);
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
        Schema::dropIfExists('production_plans');
    }
}
