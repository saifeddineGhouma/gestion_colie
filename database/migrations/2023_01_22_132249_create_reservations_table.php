<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('offer_id')->unsigned();
            $table->BigInteger('transitaire_id')->unsigned();
            $table->integer('quantity')->nullable();
            $table->integer('longueur')->nullable();
            $table->integer('hauteur')->nullable();
            $table->integer('largeur')->nullable();
            $table->string('type_colis')->nullable();
            $table->integer('poids')->nullable();
            $table->string('accepte_tmp')->nullable();
            $table->string('humidity_rouge')->nullable();
            $table->string('type_avoin')->nullable();
            $table->string('status')->nullable();

            $table->foreign('transitaire_id')->references('id')->on('transitaires');
            $table->foreign('offer_id')->references('id')->on('offers');
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
        Schema::dropIfExists('reservations');
    }
}
