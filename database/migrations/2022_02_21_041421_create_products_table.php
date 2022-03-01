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
        Schema::create('Medicines', function (Blueprint $table) {
            $table->id('id');
            $table->string('Generic_Name');
            $table->string('Form');
            $table->string('Restriction_Formula');
            $table->string('Forms');
            $table->string('Faskes_TK1');
            $table->string('Faskes_TK2');
            $table->string('Faskes_TK3');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Medicines');
    }
}
