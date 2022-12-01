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
            $table->string('product_name');
            $table->decimal('product_unit_price', 8,2);
            $table->string('quantity');
            $table->string('product_image')->nullable();
            $table->string('product_description')->nullable();
            $table->bigInteger('brand_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('unit_id')->unsigned();
            $table->string('vat_type')->nullable();

            $table->foreign('brand_id')->references('id')->on('product_brands')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
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
