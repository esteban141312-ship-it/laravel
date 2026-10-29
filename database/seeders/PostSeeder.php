<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->updateOrInsert(
            ['id' => 1],
            [
                'title' => 'Blog 1',
                'body' => 'Este es el contenido del blog 1.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('posts')->updateOrInsert(
            ['id' => 2],
            [
                'title' => 'Blog 2',
                'body' => 'Este es el contenido del blog 2.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
