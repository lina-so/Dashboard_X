<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlasticBagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plastic_bags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('width',5,2)->nullable();
            $table->decimal('height',5,2)->nullable();
            $table->decimal('weight',5,2)->nullable();
            $table->decimal('length',5,2)->nullable();
            $table->decimal('bag_thickness',5,2)->nullable();
            $table->string('base_type')->nullable();
            $table->integer('quantity_per_item')->nullable();
            $table->integer('quantity_per_tons')->nullable();
            $table->string('material_type')->nullable();
            $table->string('material_color')->nullable();
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
        Schema::dropIfExists('plastic_bags');
    }
}
