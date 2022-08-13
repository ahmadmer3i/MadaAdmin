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
        Schema::table('apply_forms', function (Blueprint $table) {
            $table->unsignedBigInteger('transfer_way_id')->nullable();
            $table->foreign('transfer_way_id')
                ->references('id')
                ->on('salary_transfer_ways')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('apply_forms', function (Blueprint $table) {
            //
        });
    }
};
