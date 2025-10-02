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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_membership')->nullable();
            $table->unsignedBigInteger('id_country')->nullable();
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('id_user_created');
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
        Schema::dropIfExists('accounts');
    }
};
