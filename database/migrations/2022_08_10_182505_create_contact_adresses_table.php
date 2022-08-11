<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_adresses', function (Blueprint $table) {
            $table->id();
            $table->string('office')->nullable();
            $table->string('building_name')->nullable();
            $table->string('street_name')->nullable();
            $table->string('city_country')->nullable();
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
        Schema::dropIfExists('contact_adresses');
    }
};
