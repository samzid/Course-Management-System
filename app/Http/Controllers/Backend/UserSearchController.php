<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\User\Payment;
use App\Models\User\RegistrationForm;


class UserSearchController extends Controller
{

    //User View
    //Student ID wise search
    public function studentIdWise(Request $request)
    {

        $request->validate([

            'student_id' => 'required',

            // 'project_id' => 'required',
        ]);

        //For Employee Search
        $id = $request->student_id;

        $item = User::where('student_id', $id)->first();
        // dd($task);
        // dd($item);
        if ($item != null) {
            return view('search.show_user_search', compact('item'));
        } else {

            //  return redirect()->back();
            return redirect('user/list')->withErrors(['No ID is matching here', 'The Message']);
        }
    }

    //End



    //Form View
    //Student ID wise search
    public function studentIdWiseForm(Request $request)
    {

        $request->validate([

            'student_id' => 'required',

        ]);

        //For Employee Search
        $id = $request->student_id;

        $searched_registration_form = RegistrationForm::where('id_number', $id)->first();
        // dd($task);
        // dd($item);
        if ($searched_registration_form != null) {
            return view('search.show_form_user_search', compact('searched_registration_form'));
        } else {
            // return redirect()->back();
            return redirect('registration/form/dataview')->withErrors(['No ID is matching here', 'The Message']);
        }
    }

    //End



    //Payment View
    //Student ID wise search
    public function studentIdWisePayment(Request $request)
    {

        $request->validate([

            'student_id' => 'required',
        ]);

        //For Employee Search
        $id = $request->student_id;

        $payments = Payment::where('student_id', $id)->first();

        if ($payments != null) {
            return view('search.show_payment_search', compact('payments'));
        } else {

            return redirect('view_payment/data')->withErrors(['No ID is matching here', 'The Message']);
        }
    }

    //End



}
