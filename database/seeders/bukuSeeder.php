<?php

namespace Database\Seeders;

use App\Models\buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Database\Factories\bukuFactory;

class bukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        buku::factory(5)->create();
    }
}
