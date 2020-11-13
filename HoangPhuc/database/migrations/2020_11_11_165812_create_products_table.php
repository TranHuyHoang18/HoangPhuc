<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->text('name');
            $table->text('slug');
            $table->text('barcode');
            $table->integer('star');
            $table->integer('id_category');
            $table->text('images');
            $table->text('country');
            $table->text('intro');
            $table->text('desc');
            $table->bigInteger('cost');
            $table->bigInteger('price');
            $table->bigInteger('quantity');
            $table->bigInteger('id_tag');
            $table->text('seo_title');
            $table->text('seo_keyword');
            $table->text('seo_desc');
            $table->text('status');
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
