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
            $table->string('name',191)->nullable(false);
            $table->string('description');
            $table->unsignedBigInteger('product_category_id')->nullable(false);
            $table->decimal('price',10,2)->nullable(false);
            $table->unsignedInteger('stock')->nullable(false);
            $table->unsignedInteger('stock_defective')->nullable(false);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign("product_category_id")->references('id')->on('product_categories');

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
