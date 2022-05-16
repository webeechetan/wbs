<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class OurWork extends Model
{
    use HasFactory;

    public function setImagesAttribute($value)
    {
        return $this->attributes['images'] = implode(',', $value);
    }

    // public function getImagesAttribute($value){
    //     return $this->attributes['images'] = explode(',', $value);
    // }

    public function getNameAttribute($value){
        return $this->attributes['name'] = ucfirst($value);
    }

    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }
}
