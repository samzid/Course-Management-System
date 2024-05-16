<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Account;
use Carbon\Carbon;
use Toastr;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function RegisterView(){


return view('frontend.registration.register_teacher');


    }


    public function RegisterStore(Request $request){

        Account::insert([
            'teacher_id' => $request->teacher_id,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'department' => $request->department,
            'designation' => $request->designation,
            'password' => Hash::make($request->password),
            
            'created_at' => Carbon::now(),
        ]);
    
        Toastr::success('Teacher added successfully:)', 'Success');
        return Redirect()->back();
    
    }

  



}
