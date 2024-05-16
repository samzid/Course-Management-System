<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Department;
//use App\Models\Certificate_Item;

use App\Models\OfferedCourse;
use App\Models\TakenCourse;
use App\Models\User\RegistrationForm;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Toastr;
use Illuminate\Support\Facades\Auth;


class Certificate_ItemController extends Controller
{



    //Course View  (admin section)
    public function Certificate_ItemView()
    {


        $courseView = OfferedCourse::all();


        return view('backend.course.view_certificate_item', compact('courseView'));
    }



    //All Course View  (user section)
    public function CourseView()
    {
        $courseView = OfferedCourse::all();
        return view('frontend.course.view_course', compact('courseView'));
    }





    //Offered Course View for batch (user section)
    public function OfferedCourse_forBatch()
    {

        return view('frontend.course.offered_course_batch');
    }




    //Offered Course View for Department (user section)
    public function OfferedCourse_forDepartment()
    {

        return view('frontend.course.offered_course_department');
    }





    //Offered Course View  (user section)
    public function OfferedCourseView()
    {

        return view('frontend.course.offered_course_batch');
    }






    //Taken Course View  (user section)
    public function TakenCourseView()
    {
        $courseView = TakenCourse::all();


        // $courseView= TakenCourse::orderBy('created_at')->wherer('created_at' is ==)->get();

        // dd($courseView);
        return view('frontend.course.see_taken_course', compact('courseView'));
    }




    //Taken Course General View  (user section)
    public function TakenCourseGeneralView($id)
    {
        $courseGeneralView = TakenCourse::findOrFail($id);


        //   dd($courseGeneralView);
        return view('frontend.course.taken_course_generalView', compact('courseGeneralView'));
    }






    // Certificate_ItemStore
    public function Certificate_ItemStore(Request $request)
    {
        $request->validate([

            // 'image' => 'required',

        ]);



        OfferedCourse::insert([
            'name' => $request->name,
            'type' => $request->type,
            'credit' => $request->credit,
            'fee' => $request->fee,
            'duration' => $request->duration,


            'department' => $request->department,
            'batch' => $request->batch,
            'section' => $request->section,
            'teacher_name' => $request->teacher_name,

            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Slider added successfully:)', 'Success');
        return Redirect()->back();
    }



    // edit Certificate
    public function Certificate_ItemEdit($id)
    {
        $certificate_itemEdit = OfferedCourse::findOrFail($id);
        return view('backend.certificate.edit_certificate_item', compact('certificate_itemEdit'));
    }




    public function Certificate_ItemUpdate(Request $request)
    {

        $id = $request->id;
        // $old_img = $request->old_img;


        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(870, 370)->save('uploads/slider/' . $name_gen);
        $save_url = 'uploads/slider/' . $name_gen;

        OfferedCourse::findOrFail($id)->update([
            'name' => $request->name,
            'type' => $request->type,
            'fee' => $request->fee,
            'duration' => $request->duration,
            'description' => $request->description,


            'image' => $save_url,
            'updated_at' => Carbon::now(),
        ]);

        Toastr::success('Slider updated successfully:)', 'Success');
        return Redirect()->route('all.certificate_item');
    }




    //delete
    public function Certificate_ItemDelete($id)
    {
        $certificate_itemDelete = OfferedCourse::find($id)->delete();
        return redirect()->back();
    }




    //Course update for marks
    public function CourseUpdate(Request $request, $student_id, $course_name, $semester_name)
    {



        //  dd($semester_name);


        $taken_course_id = TakenCourse::select('id')->where('std_id', $student_id)->where('course_name', $course_name)->where('course_semester', $semester_name)->get();



        // dd($taken_course_id);









        TakenCourse::findOrFail($taken_course_id)->first()->fill($request->all())->save();





        //    $data= TakenCourse::findOrFail($taken_course_id)->Update([
        //         'marks' => $request->marks,
        //         'updated_at' => Carbon::now(),
        //     ]);

        //     $data->save();



        Toastr::success('User updated successfully :)', 'Success');



        return redirect()->back();
    }




    public function TakenCourse(Request $request, $id)
    {
        // Find the record based on the provided ID
        $record = TakenCourse::findOrFail($id);

        // Update the null column with the new value from the form input
        $record->update([
            'marks' => $request->input('marks'),
        ]);

        return redirect()->back()->with('success', 'Column updated successfully!');
    }



    public function CompletedCourseView()
    {

        $completed_course = TakenCourse::where('std_id', Auth::user()->student_id)->where('marks', '>', 40)->get();

        return view('frontend.course.view_completed_course', compact('completed_course'));

        //dd($completed_course);

    }

    // resources\views\frontend\course\see_taken_course.blade.php



    public function RetakeCourseView()
    {

        $retake_course = TakenCourse::where('std_id', Auth::user()->student_id)->where('marks', '<', 40)->get();

        return view('frontend.course.view_retake_course', compact('retake_course'));

        //dd($completed_course);

    }





}
