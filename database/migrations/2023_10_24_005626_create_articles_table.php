<?php

use App\Enum\ArticleState;
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
        Schema::create('articles', function (Blueprint $table) {
            $table->id("articles_id");
            $table->dateTime('date_create'); // Date of creation
            $table->string("path", 250); // Path to the folder with translation files
            $table->string("file_name", 250); // File name, no extension
            $table->enum("state", ArticleState::getConstValus());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
