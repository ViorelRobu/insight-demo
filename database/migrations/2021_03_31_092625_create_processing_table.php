<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processing', function (Blueprint $table) {
            $table->id();
            $table->foreignId('production_plan_id')->constrained('production_plans');
            $table->double('thickness', 4, 1);
            $table->double('width', 5, 1);
            $table->double('length', 5, 1);
            $table->integer('pcs');
            $table->double('speed', 5, 1);
            $table->double('vol_min', 6, 3);
            $table->double('vol_h', 6, 3);
            $table->double('vol_shift', 6, 3);
            $table->double('no_shifts', 4, 1);
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
        Schema::dropIfExists('processing');
    }
}
