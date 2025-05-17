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
        Schema::create('job_requests', function (Blueprint $table) {
            $table->id();
            // 1. General Project Information
            $table->string('project_title')->nullable();
            $table->text('project_description')->nullable();
            $table->string('client_company')->nullable();
            $table->enum('project_location', ['onsite', 'remote', 'hybrid'])->nullable();
            $table->date('project_start_date')->nullable();
            $table->date('project_end_date')->nullable();
            $table->integer('duration')->nullable();
            $table->enum('duration_unit', ['day', 'month', 'year'])->nullable();

            // 2. Position & Skill Requirements
            $table->string('position_title')->nullable();
            $table->integer('number_of_resources')->nullable();
            $table->enum('job_level', ['junior', 'mid', 'senior'])->nullable();
            $table->text('skill_required')->nullable();
            $table->text('job_description')->nullable();
            $table->text('nice_to_have_skills')->nullable();

            // 3. Work Arrangement & Contract
            $table->enum('work_type', ['onsite', 'remote', 'hybrid'])->nullable();
            $table->text('work_location')->nullable();
            $table->enum('rate_type', ['hourly', 'daily', 'monthly'])->nullable();
            $table->string('budget_range')->nullable();
            $table->enum('contract_type', ['project based', 'time based', 'full time outsourcing'])->nullable();

            // 4. Screening & Interview
            $table->boolean('interview_required')->default(false);
            $table->enum('interview_method', ['online', 'offline', 'by vendor'])->nullable();
            $table->dateTime('interview_slots')->nullable();

            // 5. Internal Notes / Attachments
            $table->text('internal_notes')->nullable();
            $table->string('attachment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_requests');
    }
};
