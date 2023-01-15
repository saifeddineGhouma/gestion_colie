<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPasswordToTransitairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transitaires', function (Blueprint $table) {
            $table->string('password')->nullable();
            $table->string('show_password')->nullable();
            $table->string('status')->default(0);
        });
        Schema::table('company_transitaires', function (Blueprint $table) {
            $table->string('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transiatires', function (Blueprint $table) {
            //
        });
    }
}
