<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tips_praktis_backends', function (Blueprint $table) {
            $table->id();
            $table->text('item');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tips_praktis_backends');
    }
};