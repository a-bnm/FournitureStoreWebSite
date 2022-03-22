<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourniture extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name','price','small_description','description','quantity','image1','image2','image3'];
}
