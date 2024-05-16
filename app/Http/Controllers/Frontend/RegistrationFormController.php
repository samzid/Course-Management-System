<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
//use App\Models\Certificate_Item;
use App\Models\OfferedCourse;

use App\Models\TakenCourse;
use App\Models\User;

use App\Models\User\RegistrationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationFormController extends Controller
{

    public function RegistrationFormView()


    {
        $course_names=[];
        $repeatless_courses = TakenCourse::where('std_id', Auth::user()->student_id )->distinct('name')->select('course_name')->get();

        foreach ($repeatless_courses as $repeatless_course){
            array_push($course_names,$repeatless_course->course_name);
        }
        $data = OfferedCourse::where('department', Auth::user()->department)->whereNotIn('name',$course_names)->get();

        return view('frontend.registration.add_registration',compact('data'));
    }

    ////////////////////Project table data Inserting start/////////////////////////////////////////////////

    public function RegistrationFormStore(Request $request)
    {


         $length = count($request->course_name);

         //dd($request);


         $total_credit=0;
        for($i=0; $i<$length;$i++){
            $data=$request->course_name[$i];
            $total_credit=$total_credit+$data['credit'];
        }



        if($total_credit<=18){

        $registration_form = new RegistrationForm();
        $registration_form->student_name = $request->student_name;
        $registration_form->student_id = $request->student_id;
        $registration_form->department = $request->department;
        $registration_form->batch = $request->batch;
        $registration_form->section = $request->section;
        $registration_form->email = $request->email;
        $registration_form->phone = $request->phone;
        $registration_form->semester = $request->semester;
        $registration_form->status = 1;

        $registration_form->save();

        foreach ($request->course_name as $key => $course) {

            $expenseItemData = array(
                'std_id' => $registration_form->student_id,
                'course_semester' => $registration_form->semester,
                'course_name' => $course['course_name'],
                'credit' => $course['credit'],
                'type' => $course['type'],
                'course_batch' => $course['course_batch'],
                'allow_status' => 0,
            );

            $bfdgb = TakenCourse::create($expenseItemData);
        }

        return redirect()->to('/');


        }
else

    return redirect()->to('/registration/form');



    }

    ////////////////////Project table data Inserting End/////////////////////////////////////////////////

    public function RegistrationFormDataView()
    {
       // $registration_form = RegistrationForm::all();
        $registration_form = RegistrationForm::orderBy('created_at', 'desc')->get();

        return view('frontend.registration.view_registration', compact('registration_form'));
    }

    // Registration General View
    public function RegistrationGeneralView($student_id, $semester_name)
    {

//dd($student_id);



$user_info = User::where('student_id', $student_id)->first();


//dd($user_info);



        // $registrationForm_takenCourse = RegistrationForm::join('taken_courses', 'registration_forms.student_id', '=', 'taken_courses.std_id')->get()->unique('semester');

          $registrationForm_takenCourse = TakenCourse::where('std_id', $student_id)->where('course_semester', @$semester_name)->get()->unique('course_name');;



       //dd($registrationForm_takenCourse);


       // $registration_generalView = RegistrationForm::findOrFail($id);

        return view('frontend.registration.general_view_registration', compact( 'registrationForm_takenCourse','user_info'));
    }

    //Delete Registration Form
    public function RegistrationFormDelete($id)
    {

        // User::find($id)->delete();

        RegistrationForm::find($id)->delete();
        // return back();

        return redirect('/registration/form/dataview');
    }

    //Exam Office
    public function ExamOfficeFormDataView()
    {
        $registration_form = RegistrationForm::where('status', 4)->orderBy('id', 'DESC')->get();
        return view('frontend.registration.view_registration', compact('registration_form'));
    }



    //Register Office
    public function RegisterOfficeFormDataView()
    {
        $registration_form = RegistrationForm::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.registration.view_registration', compact('registration_form'));
    }

    //Register Office Pending Data View
    public function RegisterOfficePendingDataView()
    {
        $registration_form = RegistrationForm::where('status', 11)->orderBy('id', 'DESC')->get();
        return view('frontend.registration.view_registration', compact('registration_form'));
    }

   //Return Register Office Data View
    public function Return_RegisterOfficeFormDataView()
    {
        $registration_form = RegistrationForm::where('status', 3)->orderBy('id', 'DESC')->get();
        return view('frontend.registration.view_registration', compact('registration_form'));
    }

    //Return Register Office Pending Data View
    public function Return_RegisterOfficePendingDataView()
    {
        $registration_form = RegistrationForm::where('status', 13)->orderBy('id', 'DESC')->get();
        return view('frontend.registration.view_registration', compact('registration_form'));
    }

    //AccountOfficePendingDataView
    public function AccountOfficePendingDataView()
    {
        $registration_form = RegistrationForm::where('status', 12)->orderBy('id', 'DESC')->get();
        return view('frontend.registration.view_registration', compact('registration_form'));
    }

    //Account Office
    public function AccountOfficeFormDataView()
    {
        $registration_form = RegistrationForm::where('status', 2)->orderBy('id', 'DESC')->get();
        return view('frontend.registration.view_registration', compact('registration_form'));
    }

    //Return Registration Office
    public function ReturnRegistrationOfficeFormDataView()
    {
        $registration_form = RegistrationForm::where('status', 3)->orderBy('id', 'DESC')->get();
        return view('frontend.registration.view_registration', compact('registration_form'));
    }




    //Return Registration Office pending data view
    public function ReturnRegistrationOfficePendingFormDataView()
    {
        $registration_form = RegistrationForm::where('status', 13)->orderBy('id', 'DESC')->get();
        return view('frontend.registration.view_registration', compact('registration_form'));
    }





    public function TrackRegistration()
    {
        $form = RegistrationForm::where('email', Auth::user()->email)->first();
        if ($form) {
            $status = $form->status;
            return view('frontend.registration.tracking_registration', compact('status'));
        }
        return view('frontend.registration.tracking_registration');
    }

    ///////////////////////////////View Register form for Exam///////////////////////////////////////////////////




    /////////////////////////////////////////Start Status Updating//////////////////////////////////////////////////////////////



 // confirm Register to Account Office
 public function Confirm_For_AccountOffice($id)
 {
     RegistrationForm::findOrFail($id)->update([
         'status' => 2,
         // 'confirmed_date' => Carbon::now()
     ]);
     return redirect()->route('view.registerOffice_form_data');
     // return redirect()->route('view.accountOffice_form_data');
 }




    // confirm Account Office to Return register
    public function Confirm_For_Register_Back($id)
    {
        RegistrationForm::findOrFail($id)->update([
            'status' => 3,
            // 'confirmed_date' => Carbon::now()
        ]);

        return redirect()->route('view.accountOffice_form_data');
    }



    // confirm return register to Exam Office
    public function Confirm_For_ExamOffice($id)
    {
        RegistrationForm::findOrFail($id)->update([
            'status' => 4,
            // 'confirmed_date' => Carbon::now()
        ]);
        return redirect()->route('view.return_registerOffice_data');
    }


    /////////////////////////////////////////End Status Updating//////////////////////////////////////////////////////////////



    /////////////////////////////////////////Start Pending Status Updating//////////////////////////////////////////////////////////////

    //1//////////// confirm Register Pending
    public function Confirm_registerOffice_pending($id)
    {
        RegistrationForm::findOrFail($id)->update([
            'status' => 11,
            // 'confirmed_date' => Carbon::now()
        ]);

        return redirect()->route('view.registerOffice_form_data');
    }


 //1//////////// Register Pending to Register


 public function Back_Pending_to_RegisterOffice($id)
 {
     RegistrationForm::findOrFail($id)->update([
         'status' => 1,
         // 'confirmed_date' => Carbon::now()
     ]);

     return redirect()->route('view.registerOffice_pending_data');

 }





    //2//// Confirm_AccountOffice_pending
    public function Confirm_AccountOffice_pending($id)
    {
        RegistrationForm::findOrFail($id)->update([
            'status' => 12,
            // 'confirmed_date' => Carbon::now()
        ]);

        return redirect()->route('view.accountOffice_form_data');
    }





    public function Back_Pending_to_AccountOffice($id)
    {
        RegistrationForm::findOrFail($id)->update([
            'status' => 2,
            // 'confirmed_date' => Carbon::now()
        ]);

        return redirect()->route('view.accountOffice_pending_data');

    }










    //3////////////RegisterOffice return to register office return pending
    public function Confirm_RegisterOffice_Back_Pending($id)
    {
        RegistrationForm::findOrFail($id)->update([
            'status' => 13,
            // 'confirmed_date' => Carbon::now()
        ]);

        return redirect()->route('view.returnRegistrationOffice');
    }




    //3////////////register office return pending to RegisterOffice return to
    public function Back_Pending_to_RegisterOffice_Return($id)
    {
        RegistrationForm::findOrFail($id)->update([
            'status' => 3,
            // 'confirmed_date' => Carbon::now()
        ]);

        return redirect()->route('view.returnRegistrationOffice_pending_data');
    }








    /////////////////////////////////////////End Pending Status Updating//////////////////////////////////////////////////////////////

    //confirm check checked University IdCard
    public function allow_courseId($id)
    {
        TakenCourse::findOrFail($id)->update([

            'allow_status' => 1,

        ]);

        return redirect()->back();
    }








}
