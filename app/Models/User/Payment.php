<?php

namespace App\Models\User;

use App\Models\Admin\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function department(){
        return $this->belongsTo(Department::class,'department','id');
    }




}
