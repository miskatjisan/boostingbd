<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobapply extends Model
{
    use HasFactory;
    protected $fillable = ['name','education', 'nid', 'resume','jobTopic','joinType','workType'];
}
