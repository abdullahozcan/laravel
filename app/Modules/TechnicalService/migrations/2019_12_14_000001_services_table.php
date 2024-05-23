<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id');
            $table->integer('brand_id');
            $table->integer('model_id');
            $table->integer('type_id');
            $table->text('registration_number');
            $table->text('from_user_information')->nullable();
            $table->text('for_company_information')->nullable();
            $table->text('from_technical_employee_information')->nullable();
            $table->integer('technical_employee_id')->nullable();
            $table->integer('customer_relation_employee_id')->nullable();
            $table->integer('status_id');
            $table->text('status_name')->nullable();
            $table->timestamp('finished_datetime')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
