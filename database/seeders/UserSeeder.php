<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::create([
            'name'=>'admin',
            'email'=>'andreyklimov.ver2@gmail.com',
            'password'=> Hash::make('password')
        ]);

        $user2= User::create([
            'name'=>'user',
            'email'=>'a@gmail.com',
            'password'=> Hash::make('password')
        ]);

        $role = Role::create([
            'name'=>'admin',
            'slug'=>'admin'
        ]);

        $role2 = Role::create([
            'name'=>'user',
            'slug'=>'user'
        ]);

        DB::table('user_roles')->insert([
            'user_id'=>$user->id,
            'role_id' =>$role->id
        ]);

        DB::table('user_roles')->insert([
            'user_id'=>$user2->id,
            'role_id' =>$role2->id
        ]);
    }
}
