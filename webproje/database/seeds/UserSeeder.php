<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('123');

        $users = [
            ['name' => 'uye', 'password' => $password, 'email' => 'uye@uye','id'=>'3','email_verified_at'=>'','yetki'=>'2','remembertoken'=>'','created_at'=>'2020-06-28 12:29:13','updated_at'=>'2020-06-28 12:29:13'],
        ];

        DB::table('User')->insert($users);
    }
}
