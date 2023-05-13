<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable=['phone_id','name','number','email','pincode','country'];

    // public function course()
    // {
    //     return $this->belongsTo(Course::class);
    // }
}
