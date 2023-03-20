<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('kategori',[
                'History & Heritage',
                'Museum',
                'Religi',
                'Outdoor & Nature',
                'Pusat Perbelanjaan',
                'Pasar Tradisional',
                'Kampung Wisata',
                'Sport',
                'Cagar Budaya',
                'City Park',
                'Monumen & Landmark'
            ]);
            $table->text('description');
            $table->string('address', 255)->nullable();
            $table->string('address_url', 255)->nullable();
            $table->string('foto', 255);
            $table->unsignedBigInteger('area_id');
            $table->timestamps();

            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
}