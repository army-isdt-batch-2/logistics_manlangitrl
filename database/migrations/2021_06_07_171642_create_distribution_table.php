<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribution', function (Blueprint $table) {
            $table->id();
            $table->string('requestor_name');
            $table->integer('requestor_contact');
            $table->string('purpose');
            $table->unsignedBigInteger('asset_id')->index();
            $table->double('quantity');
            $table->enum('status',['processing','declined','distributed']);
            $table->timestamps();
            $table->foreign('asset_id')->references('id')->on('assets');  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distribution');
    }
}
