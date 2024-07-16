<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Department;
//use App\Models\Certificate_Item;
use App\Models\OfferedCourse;

use App\Models\User\Payment;
use App\Models\User\RegistrationForm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PaymentController extends Controller
{



    public function Addpayment()
    {

        $certificate_item = Certificate_Item::all();
        $formData = RegistrationForm::where('id_number', Auth::user()->student_id)->first();

        // return view('frontend.registration.add_payment', compact('formData', 'certificate_item'));

        return view('frontend.registration.add_payment', compact('formData', 'certificate_item'))->with('success', 'Item created successfully!');

    }





    public function Addpayment()
    {


          $certificate_item = OfferedCourse::all();
        $formData = RegistrationForm::where('student_id', Auth::user()->student_id )->first();



        return view('frontend.registration.add_kayment', compact('formData', 'certificate_item'))->with('success', 'Item created successfully!');

        }







    // Store Payment
    public function Storepayment(Request $request)
    {

        // dd($request->all());
        Payment::insert([

            'user_name' => $request->user_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->department,
            'student_id' => $request->student_id,
            'certificate_type' => $request->certificate_type,
            'expected_time' => $request->expected_time,
            'fee' => $request->fee,
            'payment_method' => $request->payment_method,
            'account_number' => $request->account_number,
            'transaction_id' => $request->transaction_id,
            'created_at' => Carbon::now(),

        ]);


        //  Toastr::success('Banner added successfully:)','Success');
        Session::flash('msg', 'Payment has been added successfully!');
        return redirect('/');
    }

    public function View_payment()
    {

        $payment = Payment::all();

        return view('frontend.registration.view_payment', compact('payment'));
    }






    public function addPaymentHistory()
    {

        return view('frontend.registration.payment_history');

    }







}
