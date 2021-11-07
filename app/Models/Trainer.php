<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 
    protected $collection = 'trainers';
}
