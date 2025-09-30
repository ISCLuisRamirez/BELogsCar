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
        
Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_account')->nullable();
        $table->unsignedBigInteger('id_role')->nullable();
        $table->string('email', 100)->unique();
        $table->string('username', 75);
        $table->string('password');
        $table->boolean('is_verify')->default(false);
        $table->boolean('is_active')->default(true);
        $table->unsignedBigInteger('id_user_created')->nullable();
        $table->unsignedBigInteger('id_user_updated')->nullable();
        $table->unsignedBigInteger('id_user_deleted')->nullable();
        $table->timestamps();
        $table->softDeletes();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
