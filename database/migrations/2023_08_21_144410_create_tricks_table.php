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
        Schema::create('tricks', function (Blueprint $table) {
            $table->id();
            $table->foreignID('user_id')->constrained();
            $table->foreignID('question_id')->constrained()->nullable(true); # 外部キー制約
            $table->text('title')->nullable(false);
            $table->text('body')->nullable(false);
            $table->integer('good_count')->nullable(false)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tricks');
    }
};
