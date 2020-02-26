<?php

use App\User;
use App\Model\Like;
use App\Model\Reply;
use App\Model\Category;
use App\Model\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(ReplyTableSeeder::class);    
    }
}
