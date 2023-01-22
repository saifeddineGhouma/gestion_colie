<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('num_vol')->nullable();
            $table->string('airport_depart')->nullable();
            $table->string('airport_arrive')->nullable();
            $table->date('day_depart')->nullable();
            $table->string('freq_depart')->nullable();
            $table->integer('poids')->nullable();
            $table->decimal('tarif_en_kg', 8, 2)->nullable();
            $table->integer('capacite_en_text')->nullable();
            $table->integer('commission')->nullable();
            $table->string('type_gerbable')->nullable();
            $table->date('expire_date')->nullable();
            $table->string('service')->nullable();
            $table->integer('longeur')->nullable();
            $table->integer('largeur')->nullable();
            $table->integer('hauteur')->nullable();
            $table->string('type_de_point')->nullable();
            $table->string('type_emballage')->nullable();
            $table->BigInteger('company_air_id')->unsigned();
            $table->foreign('company_air_id')->references('id')->on('company_airs');
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
        Schema::dropIfExists('offers');
    }
}
