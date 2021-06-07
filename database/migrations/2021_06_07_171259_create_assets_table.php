<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('category');
            $table->unsignedBigInteger('supplier_id')->index();
            $table->unsignedBigInteger('storage_id')->index();
            $table->double('total_stocks');
            $table->timestamps();
            $table->foreign('supplier_id')->references('id')->on('supplier');  
            $table->foreign('storage_id')->references('id')->on('storage');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
