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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('it_teacher')->default(false);
            $table->boolean('cv_teacher')->default(false);
            $table->boolean('mp_teacher')->default(false);
            $table->boolean('ep_teacher')->default(false);
            $table->boolean('ec_teacher')->default(false);
            $table->boolean('fm_teacher')->default(false);
            $table->string('phone',20)->unique();
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
