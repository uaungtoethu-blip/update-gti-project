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
    Schema::table('it_student_attendances', function (Blueprint $table) {
        $table->string('department')->after('excel_file_id');
    });
}

public function down(): void
{
    Schema::table('it_student_attendances', function (Blueprint $table) {
        $table->dropColumn('department');
    });
}

};
