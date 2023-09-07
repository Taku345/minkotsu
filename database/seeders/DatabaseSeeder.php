<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Question;
use App\Models\Trick;
use App\Models\Reply;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //recycleで親テーブルのインスタンスを渡すことで、存在する値からランダムに外部キーが設定される。
        //Factoryファイルの方での設定を忘れずに
        $tags = Tag::factory(20)->create();

        // $users = User::factory(10)
        //             ->hasAttached($tags)
        //             ->create();

        $users = User::factory(10)
                    ->create()
                    ->each(fn ($user) =>
                        $user
                        ->tags()
                        ->attach($tags->random(random_int(1, 10)))
                    );

        $questions = Question::factory(50)
                    ->recycle($users)
                    ->create();

        // $tricks = Trick::factory(100)
        //             ->recycle($users)
        //             ->recycle($questions)
        //             ->hasAttached($tags)
        //             ->create();

        $tricks = Trick::factory(100)
                    ->recycle($users)
                    ->recycle($questions)
                    ->create()
                    ->each(fn ($trick) =>
                        $trick
                        ->tags()
                        ->attach($tags->random(random_int(1, 5)))
                    );

        Reply::factory(200)
                    ->recycle($users)
                    ->recycle($tricks)
                    ->create();

        // \App\Models\Question::factory(100)->create();
        // \App\Models\Trick::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(UserSeeder::class);
        // $this->call(QuestionSeeder::class);
    }
}
