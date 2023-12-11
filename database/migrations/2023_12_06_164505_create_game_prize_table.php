<?php

use App\Models\Game;
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
        Schema::create('game_prize', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignIdFor(Game::class);
            $table->foreignIdFor(Prize::class);
            $table->unsignedInteger('prize_amount')->nullable();
            $table->unsignedInteger('qty')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_prize');
    }
};
