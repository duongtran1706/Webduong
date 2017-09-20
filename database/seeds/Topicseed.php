<?php

use Illuminate\Database\Seeder;

class Topicseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topic')->insert(array(
            [
                'name'=>'HTML5&CSS3',
                'namedescript'=>'html_css',
                'Description'=>null,
                'category_id'=>1,
                'Display'=>1,
            ],
            [
                'name'=>'Javascript',
                'namedescript'=>'Javascript',
                'Description'=>null,
                'category_id'=>1,
                'Display'=>1,
            ],
            [
                'name'=>'Bootstrap',
                'namedescript'=>'Bootstrap',
                'Description'=>null,
                'category_id'=>1,
                'Display'=>1,
            ],
            [
                'name'=>'Laravel',
                'namedescript'=>'Laravel',
                'Description'=>null,
                'category_id'=>2,
                'Display'=>1,
            ],
            [
                'name'=>'Javascript',
                'namedescript'=>'Javascript_backend',
                'Description'=>null,
                'category_id'=>2,
                'Display'=>1,
            ],
            [
                'name'=>'MYSQl',
                'namedescript'=>'MYSQl',
                'Description'=>null,
                'category_id'=>3,
                'Display'=>1,
            ],
            [
                'name'=>'JSON',
                'namedescript'=>'JSON',
                'Description'=>null,
                'category_id'=>3,
                'Display'=>1,
            ],
            [
                'name'=>'XML',
                'namedescript'=>'XML',
                'Description'=>null,
                'category_id'=>3,
                'Display'=>1,
            ],
            [
                'name'=>'Android Cơ bản',
                'namedescript'=>'Android_CB',
                'Description'=>null,
                'category_id'=>4,
                'Display'=>1,
            ],
            [
                'name'=>'Android Nâng cao',
                'namedescript'=>'Android_NC',
                'Description'=>null,
                'category_id'=>4,
                'Display'=>1,
            ],
            [
                'name'=>'Lập Trình Switf',
                'namedescript'=>'LT_Swift',
                'Description'=>null,
                'category_id'=>5,
                'Display'=>1,
            ],
            [
                'name'=>'Lập Trình IOS',
                'namedescript'=>'LT_IOS',
                'Description'=>null,
                'category_id'=>5,
                'Display'=>1,
            ],
            [
                'name'=>'Ajax',
                'namedescript'=>'Ajax',
                'Description'=>null,
                'category_id'=>6,
                'Display'=>1,
            ],
            [
                'name'=>'Nodejs',
                'namedescript'=>'Nodejs',
                'Description'=>null,
                'category_id'=>6,
                'Display'=>1,
            ]
        ));
    }
}
