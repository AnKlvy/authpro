<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            //Eto nepomnyu zachem
//            $table->unsignedBigInteger('product_id');
            $table->string("cusname");

            //rudimenti, vmesto etogo ispolozavalas tablica user napryavuyu
//            (dlya tablici)
//            $table->foreignId('user_id')->constrained('users');
//            $table->foreignId('product_id')->constrained('products');

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
        Schema::dropIfExists('customers');
    }
}
