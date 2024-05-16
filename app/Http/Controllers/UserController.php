<?php

namespace App\Http\Controllers;
use App\Models\User;
use Carbon\Carbon;
use Toastr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    


    public function RegisterView(){


        return view('frontend.registration.register_user');
        
        
            }
        
            // $table->string('student_id')->unique();
            // $table->string('name');
            // $table->string('department');
            // $table->string('batch');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('address')->nullable();
            // $table->string('password');


            public function RegisterStore(Request $request){

                User::insert([
                    'student_id' => $request->student_id,
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'department' => $request->department,
                    'batch' => $request->batch,
                    'section' => $request->section,
                    'password' => Hash::make($request->password),
                    
                    'created_at' => Carbon::now(),
                ]);
            
                Toastr::success('User added successfully:)', 'Success');
                // return Redirect()->back();

                return redirect('/admin/dashboard');
            
            }
        



}
