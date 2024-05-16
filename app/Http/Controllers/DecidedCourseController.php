<?php

namespace App\Http\Controllers;

use App\Models\DecidedCourse;
use Illuminate\Http\Request;

class DecidedCourseController extends Controller
{




    public function DecidedCourseFormStore(Request $request)
    {



        // $registration_form = new RegistrationForm();
        // $registration_form->student_name = $request->student_name;
        // $registration_form->student_id = $request->student_id;
        // $registration_form->department = $request->department;
        // $registration_form->batch = $request->batch;
        // $registration_form->section = $request->section;
        // $registration_form->email = $request->email;
        // $registration_form->phone = $request->phone;
        // $registration_form->semester = $request->semester;
        // $registration_form->status = 1;
        // $registration_form->save();



        foreach ($request->course_code as $key => $course) {

            $expenseItemData = array(
                'std_id' =>auth()->user()->id,
                'course_code' => $course['course_code'],
            );

            $bfdgb = DecidedCourse::create($expenseItemData);
        }

        return redirect()->to('/registration/form');
    }










}
