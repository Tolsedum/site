<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enum\ObjectState;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id("subscribers_id");
            $table->string("email")->unique();
            $table->dateTime('date_create'); // Date of creation
            $table->boolean("is_subscribe")->default(0);
            $table->enum("state", ObjectState::getConstValus());
        });

        Schema::create('messages', function (Blueprint $table) {
            $table->id("message_id");
            $table->unsignedBigInteger('subscribers_id');
            $table->foreign('subscribers_id')->references('subscribers_id')->on('subscribers')->onUpdate('cascade')->onDelete("cascade");
            $table->string("message", 500);
            $table->string("hash", 32);
            $table->dateTime('date_create'); // Date of creation
            $table->enum("state", ObjectState::getConstValus());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
        Schema::dropIfExists('messages');
    }
};
