<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**cd
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::factory()->count(20)->create();
    }
}
