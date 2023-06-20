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
            $table->string('apply_id_image')->nullable();
            $table->string('sponsor_id_image')->nullable();
            $table->string('attachment1')->nullable();
            $table->string('attachment2')->nullable();
            $table->string('husband_wife_name')->nullable();
            $table->string('husband_wife_work')->nullable();
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
            $table->double('salary_deduction');
            $table->text('salary_deduction_detail')->nullable();
            $table->text('personal_loan')->nullable();
            $table->text('mortgages')->nullable();
            $table->string('sponsor_full_name')->nullable();
            $table->string('sponsor_nationality')->nullable();
            $table->string('sponsor_national_id')->nullable();
            $table->string('sponsor_gender')->nullable();
            $table->string('sponsor_address')->nullable();
            $table->string('sponsor_relationship')->nullable();
            $table->string('sponsor_phone')->nullable();
            $table->string('sponsor_work_title')->nullable();
            $table->string('sponsor_work_place')->nullable();
            $table->string('sponsor_work_address')->nullable();
            $table->double('sponsor_salary')->nullable();
            $table->date('sponsor_work_date')->nullable();
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
            $table->string('apply_work_email')->nullable();
            $table->unsignedBigInteger('sponsor_salary_transfer_way_id')->nullable();
            $table->unsignedBigInteger('material_status_id')->nullable();
            $table->unsignedBigInteger('bank_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();
            $table->foreign('category_id')
                ->references('id')
                ->on('services_categories');
            $table->foreign('bank_id')
                ->references('id')
                ->on('form_banks')
                ->onDelete('set null');
            $table->foreign('material_status_id')
                ->references('id')
                ->on('form_material_statuses')
                ->onDelete('set null');
            $table->foreign('sponsor_salary_transfer_way_id')
                ->references('id')
                ->on('salary_transfer_ways')
                ->onDelete('set null');
            $table->foreign('application_type_id')
                ->references('id')
                ->on('apply_form_services')
                ->onDelete('set null');
            $table->unsignedBigInteger('transfer_way_id')->nullable();
            $table->foreign('transfer_way_id')
                ->references('id')
                ->on('salary_transfer_ways')
                ->onDelete('set null');
            $table->unsignedBigInteger('qualification_id')->nullable();
            $table->foreign('qualification_id')
                ->references('id')
                ->on('form_qualifications')
                ->onDelete('set null');
            $table->unsignedBigInteger('sponsor_bank_id')->nullable();
            $table->foreign('sponsor_bank_id')
                ->references('id')
                ->on('form_banks')
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
