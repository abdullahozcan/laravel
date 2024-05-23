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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->default(0);
            $table->string('name');
            $table->string('mail');
            $table->string('phone');
            $table->string('tax_number');
            $table->string('tax_administrator');
            $table->text('address');
            $table->integer('country');
            $table->integer('province');
            $table->integer('county');
            $table->integer('company_contact_user_id');
            $table->boolean('status')->default(0);
            $table->text('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
