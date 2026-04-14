<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersProfileTable extends Migration
{
    public function up(): void
{
    Schema::create('users_profile', function (Blueprint $table) {
        $table->id();
        $table->string('first_name');
        $table->string('last_name');
        $table->date('birth_date');
        $table->timestamp('created_at');
    });
}

public function down(): void
{
    Schema::dropIfExists('users_profile');
}
}
