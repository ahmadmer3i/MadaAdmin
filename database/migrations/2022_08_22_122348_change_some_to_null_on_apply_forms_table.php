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
        Schema::table('apply_forms', function (Blueprint $table) {
            $table->string('sponsor_full_name')->nullable()->change();
            $table->string('sponsor_nationality')->nullable()->change();
            $table->string('sponsor_national_id')->nullable()->change();
            $table->string('sponsor_gender')->nullable()->change();
            $table->string('sponsor_address')->nullable()->change();
            $table->string('sponsor_relationship')->nullable()->change();
            $table->string('sponsor_phone')->nullable()->change();
            $table->string('sponsor_work_title')->nullable()->change();
            $table->string('sponsor_work_place')->nullable()->change();
            $table->string('sponsor_work_address')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apply_forms', function (Blueprint $table) {
            //
        });
    }
};
