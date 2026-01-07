<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserMessage;
use App\Models\user_my;
class UserMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = collect([
            UserMessage::create([
                'message' => 'Hello, how are you?',
                'user_my_id' => user_my::inRandomOrder()->value('id')
            ]),
            UserMessage::create([
                'message' => 'I will be back you',
                'user_my_id' => user_my::inRandomOrder()->value('id')
            ]),
            UserMessage::create([
                'message' => 'Shut Up mf',
                'user_my_id' => user_my::inRandomOrder()->value('id')
            ]),
        ]);
    }
}
