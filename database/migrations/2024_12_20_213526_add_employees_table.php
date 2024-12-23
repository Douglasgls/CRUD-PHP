<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enum\Gender;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id()->autoincrement()->notNullable()->primaryKey();
            $table->string('name');
            $table->string('CPF')->unique();
            $table->date('date_birth');
            $table->string('phone');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn(['id', 'name', 'CPF', 'date_birth', 'phone', 'gender']);
        });
    }
};
