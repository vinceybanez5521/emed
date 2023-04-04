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
        Schema::table('patients', function (Blueprint $table) {
            $table->string('first_name')->nullable()->change();
            $table->string('middle_name')->nullable()->change();
            $table->string('last_name')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('gender')->nullable()->change();
            $table->string('civil_status')->nullable()->change();
            $table->string('date_of_birth')->nullable()->change();
            $table->string('phone_number')->nullable()->change();
            $table->string('photo')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            //
        });
    }
};
