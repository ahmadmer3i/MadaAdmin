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
    public function up(): void
    {
        Schema::create('contact_adresses', function (Blueprint $table) {
            $table->id();
            $table->string('office')->nullable();
            $table->string('building_name')->nullable();
            $table->string('street_name')->nullable();
            $table->string('city_country')->nullable();
            $table->string('address_icon')->nullable();
            $table->string('title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_adresses');
    }
};
