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
            $table->bigIncrements('id');
            $table->string('name', 200);
            $table->text('description');
            $table->bigInteger('category_id')->unsigned(); //FK de category.
            $table->string('featured_img', 300);
            $table->decimal('price', 8, 2);
            $table->bigInteger('user_id')->unsigned(); //FK de users.
            $table->timestamps(); //Son las columnas created_at y updated_at

            //Crear FK.
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
