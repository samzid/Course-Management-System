<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class TakenCourse extends Model
{
    use HasFactory;

    protected $guarded = [];






    public function user()
    {
        // return $this->belongsTo('Course'); // links this->course_id to courses.id

        return $this->hasMany(User::class);


    }


}
