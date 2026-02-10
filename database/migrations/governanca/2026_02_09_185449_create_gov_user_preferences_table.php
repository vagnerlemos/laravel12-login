<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gov_user_preferences', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('gov_users')
                ->cascadeOnDelete();

            $table->foreignId('app_id')
                ->constrained('gov_apps')
                ->cascadeOnDelete();

            $table->string('visual_profile', 32)->default('light');

            $table->timestamps();

            $table->unique(['user_id', 'app_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gov_user_preferences');
    }
};
