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
        Schema::create('attendance_records', function (Blueprint $table) {
             $table->id();
        $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
        $table->date('date');
        $table->time('in_time')->nullable();
        $table->time('out_time')->nullable();
        $table->enum('status', ['present', 'absent', 'leave'])->default('present');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_records');
    }
};
