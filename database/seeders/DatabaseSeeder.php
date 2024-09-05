<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'email'=> 'asti@gmail.com',
            'name' => 'asti',
            'password'=> bcrypt('12345')
        ]);

        product::create([
            'name'=>'the oridinal',
            'deskripsi'=>'caffeine 30ml',
            'harga'=>'100000',
            'foto'=>'caffeine-30ml.webp',
        ]);
        product::create([
            'name'=>'the oridinal',
            'deskripsi'=>'cleanser 50ml',
            'harga'=>'150000',
            'foto'=>'cleanser-50ml.webp',
        ]);
        product::create([
            'name'=>'the oridinal',
            'deskripsi'=>'balance set',
            'harga'=>'760000',
            'foto'=>'cleanser-50ml.webp',
        ]);
        product::create([
            'name'=>'the oridinal',
            'deskripsi'=>'the bright set',
            'harga'=>'680000',
            'foto'=>'rdn-the-bright-set.webp',
        ]);
        product::create([
            'name'=>'the oridinal',
            'deskripsi'=>'the future set',
            'harga'=>'500000',
            'foto'=>'the-future-set.webp',
        ]);
        product::create([
            'name'=>'the oridinal',
            'deskripsi'=>'2 pcs serum',
            'harga'=>'200000',
            'foto'=>'toner.webp',
        ]);
        product::create([
            'name'=>'the oridinal',
            'deskripsi'=>'milky toner',
            'harga'=>'200000',
            'foto'=>'milky toner.png',
        ]);
        product::create([
            'name'=>'the oridinal',
            'deskripsi'=>'serum 30ml',
            'harga'=>'190000',
            'foto'=>'caffeine-30ml.webpg',
        ]);
        product::create([
            'name'=>'the oridinal',
            'deskripsi'=>'cleanser 150 ml',
            'harga'=>'190000',
            'foto'=>'cleanser-150ml.webpg',
        ]);
        product::create([
            'name'=>'the oridinal',
            'deskripsi'=>'cleanser 50 ml',
            'harga'=>'150000',
            'foto'=>'cleanser-50ml.webp',
        ]);
        product::create([
            'name'=>'the oridinal',
            'deskripsi'=>'milky toner',
            'harga'=>'150000',
            'foto'=>'milky toner.png',
        ]);
        product::create([
            'name'=>'the oridinal',
            'deskripsi'=>'toner',
            'harga'=>'150000',
            'foto'=>'toner.webp',
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

}
