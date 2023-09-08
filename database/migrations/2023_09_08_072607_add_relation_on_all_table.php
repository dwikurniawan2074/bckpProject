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
        Schema::table('materials', function (Blueprint $table) {
            $table->foreignUuid('operational_id')->references('id')->on('operationals')->cascadeOnDelete();
        });
        Schema::table('milestones', function (Blueprint $table) {
            $table->foreignUuid('project_id')->references('id')->on('projects')->cascadeOnDelete();
        });
        Schema::table('customer_contacts', function (Blueprint $table) {
            $table->foreignUuid('customerContact_id')->references('id')->on('customers')->cascadeOnDelete();
        });
        Schema::table('materials', function (Blueprint $table) {
            $table->foreignUuid('material_id')->references('id')->on('materials')->cascadeOnDelete();
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->foreignUuid('customer_id')->references('id')->on('customers')->cascadeOnDelete();
        });
        Schema::table('operationals', function (Blueprint $table) {
            $table->foreignUuid('project_id')->references('id')->on('projects')->cascadeOnDelete();
        });
        Schema::table('production_cost', function (Blueprint $table) {
            $table->foreignUuid('project_id')->references('id')->on('projects')->cascadeOnDelete();
        });
        Schema::table('operational_expense', function (Blueprint $table) {
            $table->foreignUuid('operational_id')->references('id')->on('operationals')->cascadeOnDelete();
        });
        Schema::table('operational_agenda', function (Blueprint $table) {
            $table->foreignUuid('operational_id')->references('id')->on('operationals')->cascadeOnDelete();
        });
        Schema::table('operational_team', function (Blueprint $table) {
            $table->foreignUuid('operational_id')->references('id')->on('operationals')->cascadeOnDelete();
            $table->foreignUuid('technicianTeam_id')->references('id')->on('technician_team')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
