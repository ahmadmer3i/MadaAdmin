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
            $table->unsignedBigInteger('sponsor_bank_id')->nullable();
            $table->foreign('sponsor_bank_id')
                ->references('id')
                ->on('form_banks')
                ->onDelete('set null');
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
            $table->dropColumn('sponsor_bank_id');
        });
    }
};
