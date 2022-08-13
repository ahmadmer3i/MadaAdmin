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
        Schema::create('contact_phone_lists', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->unsignedBigInteger('contact_phone_id');
            $table->foreign('contact_phone_id')
                ->references('id')
                ->on('contact_phones')
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
        Schema::dropIfExists('contact_phone_lists');
    }
};
