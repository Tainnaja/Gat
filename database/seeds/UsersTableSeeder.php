<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [   'first_name' => 'wanrat',
                'last_name' => 'limpra...',
                'user_name' => 'wanrat',
                'email' => 'wanrat@example.com',
                'image' => "user_images/default.png",
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'password' => bcrypt('123456'),
                'remember_token' => "1",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'role_id' => '1'],
            [   'first_name' => 'admin',
                'last_name' => 'admin',
                'user_name' => 'admin',
                'email' => 'admin@example.com',
                'image' => "user_images/default.png",
                'email_verified_at' =>Carbon::now()->format('Y-m-d H:i:s'),
                'password' => bcrypt('123456'),
                'remember_token' => "1",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'role_id' => '2'],
            ]);
    }
}
