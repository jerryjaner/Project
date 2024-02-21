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
        Schema::create('family_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->date('birthdate')->nullable();
            $table->integer('age')->nullable();
            $table->string('civil_status')->nullable();
            $table->decimal('monthly_income',10,2)->nullable();
            $table->string('occupation')->nullable();
            $table->string('educational_level')->nullable();
            $table->string('spouse_name')->nullable();
            $table->integer('spouse_age')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('spouse_educational_level')->nullable();
            $table->decimal('spouse_monthly_income',10,2)->nullable();
            $table->string('households_members')->nullable();
            // $table->string('households_members_name')->nullable();
            // $table->string('households_members_age')->nullable();
            // $table->string('households_members_sex')->nullable();
            // $table->string('households_members_age')->nullable();
            // $table->string('households_members_relationship')->nullable();
            // $table->string('households_members_educ_level')->nullable();
            // $table->string('households_members_occupation')->nullable();
            $table->integer('no_households')->nullable();
            $table->string('occupancy_status')->nullable();
            $table->string('occupany_period')->nullable();
            $table->date('interview_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_profiles');
    }
};
