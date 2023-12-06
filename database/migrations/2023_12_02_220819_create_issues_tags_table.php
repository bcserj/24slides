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
        Schema::create('issues_tags', function (Blueprint $table) {
            $table->foreignId('issue_id')->constrained('issues');
            $table->foreignId('tag_id')->constrained('tags');
            $table->primary(['issue_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues_tags');
    }
};
