<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
        /* $this->call(user::class);*/
        /* $this->call(Categoryseed::class);
        $this->call(Topicseed::class);*/
        $this->call(postseed::class);
         Model::reguard();
    }
}
