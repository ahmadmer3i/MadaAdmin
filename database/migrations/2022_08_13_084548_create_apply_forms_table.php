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
        Schema::create('apply_forms', function (Blueprint $table) {
            $table->id();
            $table->string('apply_full_name');
            $table->string('apply_gender');
            $table->string('apply_nationality');
            $table->string('apply_national_id');
            $table->string('apply_address');
            $table->string('apply_phone');
            $table->date('apply_birthdate');
            $table->string('apply_email');
            $table->string('material_status');
            $table->string('husband_wife_name')->nullable();
            $table->string('husband_wife_work')->nullable();
            $table->string('qualification');
            $table->integer('dependents');
            $table->string('relative_one_name');
            $table->string('relative_one_relation');
            $table->string('relative_one_work_title');
            $table->string('relative_one_work_place');
            $table->string('relative_one_phone');
            $table->string('relative_two_name');
            $table->string('relative_two_relation');
            $table->string('relative_two_work_title');
            $table->string('relative_two_work_place');
            $table->string('relative_two_phone');
            $table->string('apply_work_place');
            $table->string('apply_work_title');
            $table->string('apply_work_website')->nullable();
            $table->string('apply_work_phone');
            $table->string('apply_work_address');
            $table->date('apply_work_date');
            $table->double('apply_salary');
            $table->string('apply_salary_transfer_way');
            $table->double('salary_deduction');
            $table->text('salary_deduction_detail')->nullable();
            $table->text('personal_loan')->nullable();
            $table->text('mortgages')->nullable();
            $table->string('sponsor_full_name');
            $table->string('sponsor_nationality');
            $table->string('sponsor_national_id');
            $table->string('sponsor_gender');
            $table->string('sponsor_address');
            $table->string('sponsor_relationship');
            $table->string('sponsor_phone');
            $table->string('sponsor_work_title');
            $table->string('sponsor_work_place');
            $table->string('sponsor_work_address');
            $table->double('sponsor_salary');
            $table->string('sponsor_salary_transfer_way');
            $table->date('sponsor_work_date');
            $table->unsignedBigInteger('application_type_id')->nullable();
            $table->timestamp('application_date')->default(\Illuminate\Support\Carbon::now());
            $table->boolean('approved')->nullable();
            $table->string('service_requested')->nullable();
            $table->string('service_type')->nullable();
            $table->string('payment_period')->nullable();
            $table->string('procedure_value')->nullable();
            $table->double('profit_ratio')->nullable();
            $table->double('total_amount')->nullable();
            $table->double('first_payment')->nullable();
            $table->double('installment_value')->nullable();
            $table->foreign('application_type_id')
                ->references('id')
                ->on('apply_form_services')
                ->onDelete('set null');
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
        Schema::dropIfExists('apply_forms');
    }
};
