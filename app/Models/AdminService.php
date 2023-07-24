<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class AdminService extends Model
{
    protected $guarded = [];
    public function category(){
        return $this->belongsTo(Category::class,'catagory_id','id');
    }
    use HasFactory;
}
