<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('id_type')->unsigned();
            $table->string('description');
            $table->string('detail_description');
            $table->string('price');
            $table->string('weight');
            $table->string('height');
            $table->string('material');
            $table->string('origin');
            $table->float('unit');
            $table->string('avatar');
            $table->integer('guarantee');
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
        Schema::dropIfExists('products');
    }
}
