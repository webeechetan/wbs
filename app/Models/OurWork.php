<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Carbon\Carbon;

class OurWork extends Model
{
    use HasFactory;

    public function getNameAttribute($value){
        return $this->attributes['name'] = ucfirst($value);
    }

    public function category(){
        return Category::whereIn('id',explode(',',$this->cat_id))->get();
    }

    public function getPublishAtAttribute($value){
        return Carbon::parse($value)->format('Y-m-d');
    }
}


