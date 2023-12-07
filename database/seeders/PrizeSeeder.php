<?php

namespace Database\Seeders;

use App\Models\Prize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrizeSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prize::create([
            'name' => 'Full House',
            'description' => 'Full House description',
        ]);

        Prize::create([
            'name' => 'Top Line',
            'description' => 'Top Line description',
        ]);

        Prize::create([
            'name' => 'Middle Line',
            'description' => 'Middle Line description',
        ]);

        Prize::create([
            'name' => 'Bottom Line',
            'description' => 'Bottom Line description',
        ]);
    }
}
