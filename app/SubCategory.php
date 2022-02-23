<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['cat_id', 'sub_cat', 'status'];

    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }


}
