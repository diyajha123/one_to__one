<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'number', 'course', 'gender', 'hobbies', 'joindate'];


    function getcontact():HasOne
    {
        return $this->hasOne(Phone::class,'phone_id');
     }

public function setHobbiesAttribute($value)
{
    $this->attributes['hobbies']= implode(',',(array)$value);
}

}
