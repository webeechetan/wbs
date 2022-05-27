<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Carbon\Carbon;

class Blog extends Model
{
    use HasFactory;

    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->format('d M Y');
    }
}
