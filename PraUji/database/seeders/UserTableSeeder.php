<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Piksi301',
                'email' => 'piksi@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('piksi301')
            ],
            [
                'name' => 'Assalaam Bandung',
                'email' => 'assalaam1@gmail.com',
                'role' => 'user',
                'password' => bcrypt('assalaam12345')
            ],
        ];
        DB::table('users')->insert($users);
    }
}
