<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('backend_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('item_1')->nullable();
            $table->text('item_2')->nullable();
            $table->string('cta_label')->nullable();
            $table->string('cta_link')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('backend_contents');
    }
};