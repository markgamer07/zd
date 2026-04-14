<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    public function up(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->integer('age')->nullable();
        $table->integer('salary')->default(0);
    });
}

public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['age', 'salary']);
    });
}
}
