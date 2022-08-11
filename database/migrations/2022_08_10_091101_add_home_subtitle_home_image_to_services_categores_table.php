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
        Schema::table('services_categores', function (Blueprint $table) {
            $table->string('home_title')->nullable();
            $table->string('home_subtitle')->nullable();
            $table->string('home_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services_categores', function (Blueprint $table) {
            $table->dropColumn('home_title');
            $table->dropColumn('home_subtitle');
            $table->dropColumn('home_image');
        });
    }
};
