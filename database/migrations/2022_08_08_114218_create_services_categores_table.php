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
        Schema::create('services_categores', function (Blueprint $table) {
            $table->id();
            $table->string('service_title')->nullable();
            $table->string('image')->nullable();
            $table->text('service_subtitle')->nullable();
            $table->text('service_text')->nullable();
            $table->unsignedBigInteger('services_id');
            $table->foreign('services_id')
                ->references('id')
                ->on('services')
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
        Schema::dropIfExists('services_categores');
    }
};
