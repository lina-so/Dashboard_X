<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_boxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->string('material_type')->nullable();
            $table->string('material_color')->nullable();
            $table->decimal('paper_thickness',5,2)->nullable();
            $table->decimal('width',5,2)->nullable();
            $table->decimal('height',5,2)->nullable();
            $table->decimal('length',5,2)->nullable();
            $table->string('print_type')->nullable();
            $table->integer('quantity_per_item')->nullable();
            $table->decimal('single_board_width',5,2)->nullable();
            $table->decimal('single_board_height',5,2)->nullable();
            $table->string('solovan_layer')->nullable();
            $table->string('uv_layer')->nullable();
            $table->string('coverage')->nullable();
            $table->string('uom')->nullable();
            $table->string('capacity')->nullable();
            $table->string('effects')->nullable();
            $table->integer('glue_points_number')->nullable();
            $table->string('window_shape')->nullable();
            $table->decimal('window_width',5,2)->nullable();
            $table->decimal('window_height',5,2)->nullable();
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
        Schema::dropIfExists('paper_boxes');
    }
}
