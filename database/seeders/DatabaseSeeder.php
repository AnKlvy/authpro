<?php

namespace Database\Seeders;

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
        //чтобы создать 10 сгенерированных прошу подметить
        // если не вру пользователей
//         \App\Models\User::factory(10)->create();
        $this->call([UserSeeder::class]);
    }
}
