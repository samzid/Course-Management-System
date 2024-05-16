<?php

namespace App\Models\User;

use App\Models\TakenCourse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationForm extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class, 'student_id ', 'id');
    }




    public function taken_course()
    {
        return $this->belongsTo(TakenCourse::class,'std_id','student_id');
    }




}



