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
        Schema::create('it_student_attendances', function (Blueprint $table) {
        $table->id();
        $table->foreignId('excel_file_id')->constrained()->cascadeOnDelete();
        $table->string('student_id');
        $table->string('roll_number');
        $table->string('student_name');

        $table->integer('attendance_month');
        $table->integer('attendance_total');

        $table->decimal('attendance_percent_month', 5, 2);
        $table->decimal('attendance_percent_total', 5, 2);

        $table->string('student_signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('it_student_attendances');
    }
};
