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
            
            /* Add additional fields */
            $table->text('title');  // product title
            $table->text('description')->nullable();   // description
            $table->text('short_notes')->nullable();   // short notes
            $table->decimal('price', 10, 2)->default(0); // price
            $table->text('image')->nullable(); // product image
            $table->text('slug')->nullable(); // product slug         
            
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
