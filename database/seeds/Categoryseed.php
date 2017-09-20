<?php

use Illuminate\Database\Seeder;

class Categoryseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert(array(
            [
                'name'=>'FontEnd',
                'namedescript'=>'FontEnd',
                'Description'=>'Front-end và back-end là các thuật ngữ chỉ các giai đoạn bắt đầu và kết thúc của một quá trình xử lý. Khái niệm này thường sử dụng trong lĩnh vực phát triển phần mềm. Trong thiết kế phần mềm, front-end là một phần của hệ thống phần mềm, tương tác trực tiếp với người sử dụng.',
                'Display'=>1

            ],
            [
                'name'=>'BackEnd',
                'namedescript'=>'BackEnd',
                'Description'=> 'Front-end và back-end là các thuật ngữ chỉ các giai đoạn bắt đầu và kết thúc của một quá trình xử lý. Khái niệm này thường sử dụng trong lĩnh vực phát triển phần mềm. Trong thiết kế phần mềm, front-end là một phần của hệ thống phần mềm, tương tác trực tiếp với người sử dụng.',
                'Display'=>1
            ],
            [
                'name'=>'DataBase',
                'namedescript'=>'DataBase',
                'Description'=>'Một Database (Cơ sở dữ liệu) là một tập hợp dữ liệu đã được tổ chức sắp xếp. Mục đích chính của Database là để tổ chức một lượng lớn thông tin bằng việc lưu trữ, thu thập, và quản lý. Ngày này, só nhiều Dynamic Website trên thế giới đang được xử lý thông qua Database',
                'Display'=>1
            ],
            [
                'name'=>'Android',
                'namedescript'=>'Android',
                'Description'=>'Android là một Hệ điều hành mã nguồn mở và là một hệ điều hành dựa trên Linux cho các thiết bị mobile như Smartphone và máy tính bảng. Ban đầu Android được phát triển bởi Công ty Android với sự hỗ trợ tài chính từ Google, sau đó được Google mua lại vào năm 2005.',
                'Display'=>1
            ],
            [
                'name'=>'IOS',
                'namedescript'=>'IOS',
                'Description'=>'',
                'Display'=>1
            ],
            [
                'name'=>'Công nghệ khác',
                'namedescript'=>'CongNgheKhac',
                'Description'=>'',
                'Display'=>1
            ]
        ));
    }
}
