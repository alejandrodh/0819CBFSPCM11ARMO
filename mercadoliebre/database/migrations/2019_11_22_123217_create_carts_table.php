<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 200);
            $table->string('featured_img', 300);
            $table->smallInteger('quantity');
            $table->decimal('price', 8, 2);
            $table->decimal('subtotal', 8,2);
            $table->bigInteger('user_id')->unsigned(); //FK de users. Es el comprador.
            $table->smallInteger('status')->default(0); //0 carrito abierto. 1 carrito cerrado.
            $table->bigInteger('order_number'); //Todos los items asociados a la compra (a mi carrito que acabo de cerrar).
            $table->timestamps();

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
        Schema::dropIfExists('carts');
    }
}
