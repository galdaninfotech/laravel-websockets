<?php

use App\Models\Game;
use App\Models\Number;
use App\Models\Prize;
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
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });

        Schema::create('games_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignIdFor(Game::class);
            $table->foreignIdFor(Number::class);
            $table->timestamps();
        });

        Schema::create('games_prizes', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignIdFor(Game::class);
            $table->foreignIdFor(Prize::class);
            $table->unsignedInteger('prize_amount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
