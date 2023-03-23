<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKulinersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuliners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('kategori', 255);
            $table->string('address', 255)->nullable();
            $table->string('address_url', 255)->nullable();
            $table->string('foto', 255);
            $table->text('description');
            // $table->unsignedBigInteger('area_id');
            $table->timestamps();

            // $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuliners');
    }
}