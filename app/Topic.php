<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
   protected $table="Topic";
    public function Post(){
        return $this->hasMany('App\post','topic_id','id');
    }

}
