<?php

use Illuminate\Database\Seeder;

class Topicseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /**
     * user create values
//    */
//    public function run()
//    {
//        /*insert category*/
//        DB::table('topic')->insert(array(
//            [
//                'name'=>'FontEnd',
//                'namedescript'=>'FontEnd',
//                'Description'=>'Front-end và back-end là các thuật ngữ chỉ các giai đoạn bắt đầu và kết thúc của một quá trình xử lý. Khái niệm này thường sử dụng trong lĩnh vực phát triển phần mềm. Trong thiết kế phần mềm, front-end là một phần của hệ thống phần mềm, tương tác trực tiếp với người sử dụng.',
//                'Display'=>1,
//                'parent_id'=>null,
//            ],
//            [
//                'name'=>'BackEnd',
//                'namedescript'=>'BackEnd',
//                'Description'=> 'Front-end và back-end là các thuật ngữ chỉ các giai đoạn bắt đầu và kết thúc của một quá trình xử lý. Khái niệm này thường sử dụng trong lĩnh vực phát triển phần mềm. Trong thiết kế phần mềm, front-end là một phần của hệ thống phần mềm, tương tác trực tiếp với người sử dụng.',
//                'Display'=>1,
//                'parent_id'=>null,
//            ],
//            [
//                'name'=>'DataBase',
//                'namedescript'=>'DataBase',
//                'Description'=>'Một Database (Cơ sở dữ liệu) là một tập hợp dữ liệu đã được tổ chức sắp xếp. Mục đích chính của Database là để tổ chức một lượng lớn thông tin bằng việc lưu trữ, thu thập, và quản lý. Ngày này, só nhiều Dynamic Website trên thế giới đang được xử lý thông qua Database',
//                'Display'=>1,
//                'parent_id'=>null,
//            ],
//            [
//                'name'=>'Android',
//                'namedescript'=>'Android',
//                'Description'=>'Android là một Hệ điều hành mã nguồn mở và là một hệ điều hành dựa trên Linux cho các thiết bị mobile như Smartphone và máy tính bảng. Ban đầu Android được phát triển bởi Công ty Android với sự hỗ trợ tài chính từ Google, sau đó được Google mua lại vào năm 2005.',
//                'Display'=>1,
//                'parent_id'=>null,
//            ],
//            [
//                'name'=>'IOS',
//                'namedescript'=>'IOS',
//                'Description'=>'',
//                'Display'=>1,
//                'parent_id'=>null,
//            ],
//            [
//                'name'=>'Công nghệ khác',
//                'namedescript'=>'CongNgheKhac',
//                'Description'=>'',
//                'Display'=>1,
//                'parent_id'=>null,
//            ]
//        ));
//    }
   /* public function run()
    {
        DB::table('topic')->insert(array(
            [
                'name'=>'HTML5&CSS3',
                'namedescript'=>'html_css',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>1,
            ],
            [
                'name'=>'Javascript',
                'namedescript'=>'Javascript',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>1,
            ],
            [
                'name'=>'Bootstrap',
                'namedescript'=>'Bootstrap',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>1,
            ],
            [
                'name'=>'Laravel',
                'namedescript'=>'Laravel',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>2,
            ],
            [
                'name'=>'Javascript',
                'namedescript'=>'Javascript_backend',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>2,
            ],
            [
                'name'=>'MYSQl',
                'namedescript'=>'MYSQl',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>3,
            ],
            [
                'name'=>'JSON',
                'namedescript'=>'JSON',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>3,
            ],
            [
                'name'=>'XML',
                'namedescript'=>'XML',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>3,
            ],
            [
                'name'=>'Android Cơ bản',
                'namedescript'=>'Android_CB',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>4,
            ],
            [
                'name'=>'Android Nâng cao',
                'namedescript'=>'Android_NC',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>4,
            ],
            [
                'name'=>'Lập Trình Switf',
                'namedescript'=>'LT_Swift',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>5,
            ],
            [
                'name'=>'Lập Trình IOS',
                'namedescript'=>'LT_IOS',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>5,
            ],
            [
                'name'=>'Ajax',
                'namedescript'=>'Ajax',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>6,
            ],
            [
                'name'=>'Nodejs',
                'namedescript'=>'Nodejs',
                'Description'=>null,
                'Display'=>1,
                'parent_id'=>6,
            ]
        ));
    }*/
 public function run(){
     factory(App\Topic::class,60)->create();
 }
}
