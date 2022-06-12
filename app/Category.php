<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function medicines(){
        return $this->hasMany('App\Medicine','category_id','id');
    }
    public function show(){
        $data = Category::all();
        return view('category.index',compact('datas'));
    }
}
