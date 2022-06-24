<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->integer('quantity');
            $table->char('state',1);
            $table->float('price');
            $table->float('discount_price');
            $table->string('image');
            $table->integer('amount_sales')->nullable();
            $table->timestamps();
            $table->text('information');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete("cascade");
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
