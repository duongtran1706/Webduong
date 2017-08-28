<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       /* factory(App\User::class,4)->create();*/
        DB::table('users')->insert([
            'name'=>'duongtran',
            'username' => 'admin',
            'displayname' => 'Super Admin',
            'Avatar'=>'http://lorempixel.com/640/480/?51461',
            'Lastlogin'=>'2017-07-22',
            'Birthday'=>'1995-04-21',
            'email' => 'thanhduong@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
