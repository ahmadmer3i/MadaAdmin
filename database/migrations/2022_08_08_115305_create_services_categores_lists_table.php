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
        Schema::create('services_categores_lists', function (Blueprint $table) {
            $table->id();
            $table->string('service_item')->nullable();
            $table->unsignedBigInteger('services_categores_id');
            $table->foreign('services_categores_id')
                ->references('id')
                ->on('services_categores')
                ->onDelete('cascade');
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
        Schema::dropIfExists('services_categores_lists');
    }
};
