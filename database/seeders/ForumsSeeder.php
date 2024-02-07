<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Forums;

class ForumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Forums::insert(
            [
                [
                    'id' => 1,
        	        'forumName' => 'Contoh Forum',
        	        'forumContent' => 'Ini contoh isi forum yang ada'
                ]
            ]
        );
    }
}
