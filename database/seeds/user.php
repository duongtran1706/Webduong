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

        DB::table('users')->insert(array(
            [
            'name'=>'duongtran',
            'username' => 'admin',
            'displayname' => 'Super Admin',
            'Avatar'=>'http://lorempixel.com/640/480/?51461',
            'Lastlogin'=>'2017-07-22',
            'Birthday'=>'1995-04-21',
            'email' => 'thanhduong@gmail.com',
                'level'=>1,
            'password' => bcrypt('12345678'),
                'biography'=>'Tiểu sử là bản mô tả chi tiết về một giai đoạn hoặc cuộc đời của một cá nhân, thường được xuất bản dưới dạng một quyển sách hoặc một bài luận, hoặc một vài dạng khác, như phim. Tự truyện là tiểu sử của cá nhân do chính người đó viết. Tiểu sử không chỉ là một danh sách những hoạt động cá nhân (học hành, làm việc, quan hệ, chết) mà còn nói lên trải nghiệm của trải nghiệm của cá thể trong những sự kiện đó.',
                'remember_token'=>str_random(),
            ],
            [
            'name'=>'admin',
            'username' => 'duongtt',
            'displayname' => 'người dùng',
            'Avatar'=>'http://lorempixel.com/640/480/?51461',
            'Lastlogin'=>'2017-07-22',
            'Birthday'=>'1995-04-21',
            'email' => 'thanhduong@gmail.com',
            'level'=>0,
            'password' => bcrypt('12345678'),
                'biography'=>'Tiểu sử là bản mô tả chi tiết về một giai đoạn hoặc cuộc đời của một cá nhân, thường được xuất bản dưới dạng một quyển sách hoặc một bài luận, hoặc một vài dạng khác, như phim. Tự truyện là tiểu sử của cá nhân do chính người đó viết. Tiểu sử không chỉ là một danh sách những hoạt động cá nhân (học hành, làm việc, quan hệ, chết) mà còn nói lên trải nghiệm của trải nghiệm của cá thể trong những sự kiện đó.',
            'remember_token'=>str_random(),
        ]));

    }
}
