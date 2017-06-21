<?php

use Illuminate\Database\Seeder;

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
            'name' => 'admin1',
            'email' => 'alexbenys8@gmail.com',
            'password' => bcrypt('KidsLife2017'),
        ]);
        DB::table('users')->insert([
            'name' => 'admin2',
            'email' => 'alex-beny@hotmail.com',
            'password' => bcrypt('KidsLife2017'),
        ]);
    }
}
