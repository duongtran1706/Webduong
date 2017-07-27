<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'name',
        'description',
    ];
    protected $table="Category";
    public function link(){
        if($this->slug){
            $this->slug=$this->name;
            $this->save();
        }
        return \URL::to('Category/'.$this->slug);
    }
    public function Topic(){
        return $this->hasMany('App\Topic','category_id','id');
    }
    
}
