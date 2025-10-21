<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('name');
            $table->string('role')->default('admin')->after('phone');
            $table->integer('points')->default(0)->after('role');
        });
    }
    public function down(): void
    {

    }
};
