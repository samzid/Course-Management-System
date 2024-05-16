<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Department;
use Illuminate\Http\Request;
use App\Models\Admin\MultiImg;
use App\Models\Admin\slider;
//use App\Models\Certificate_Item;
use App\Models\OfferedCourse;

use App\Models\User\Payment;
use App\Models\User\RegistrationForm;
use Illuminate\Support\Facades\Auth;
use Toastr;


class IndexController extends Controller
{
    public function index()
    {
        $certificate_item = OfferedCourse:: all();
        $department = Department:: all();

        return view('frontend.index', compact('certificate_item','department'));
    }





    public function AboutUs(){
        return view('frontend.about_us');
    }

    public function ContactUs(){
        return view('frontend.contact_us');
    }




    // public function Add_payment(){


    //     $certificate_item = Certificate_Item:: all();
    //     $department = Department:: all();

    //     return view('frontend.registration.add_payment', compact('certificate_item','department'));
    // }




/////////////////////////////////User Registration//////////////////////////////////////




//Delivered Certificate View
public function FormCountView()
{

        $CSE = RegistrationForm::where('department', 'CSE')->get();
        $CSE_count = $CSE->count();
        $EEE = RegistrationForm::where('department', 'EEE')->get();
        $EEE_count = $EEE->count();
        $BBA = RegistrationForm::where('department', 'BBA')->get();
        $BBA_count = $BBA->count();



        $CSE = Payment::where('department', 'CSE')->get();
        $CSE_payment_count = $CSE->count();
        $EEE = Payment::where('department', 'EEE')->get();
        $EEE_payment_count = $EEE->count();
        $BBA = Payment::where('department', 'BBA')->get();
        $BBA_payment_count = $BBA->count();



    // $examOffice_form = Payment::where('status', 4)->get();
    // $exam_office_count = $examOffice_form->count();

    // $registerOffice_form = RegistrationForm::where('status', 1)->get();
    // $register_office_count = $registerOffice_form->count();

    // $accountOffice_form = RegistrationForm::where('status', 2)->get();
    // $account_office_count = $accountOffice_form->count();


    // $libraryOffice_form = RegistrationForm::where('status', 4)->get();
    // $library_office_count = $libraryOffice_form->count();


    // $delivered_certificate_form = RegistrationForm::where('status', 6)->get();
    // $delivered_certificate_count = $delivered_certificate_form->count();

// dd($exam_office_count);

    $forms = RegistrationForm::select('created_at')->get();
    $month = array();
    foreach($forms as $key => $form)
    {
        $temp = explode(' ', $form->created_at);
        $final_month = explode('-', $temp[0]);
        $month[$key] = $final_month[1];
    }
    // dd($month);

    // $month_count = array(12);
    $month_count[0] = 0;
    $month_count[1] = 0;
    $month_count[2] = 0;
    $month_count[3] = 0;
    $month_count[4] = 0;
    $month_count[5] = 0;
    $month_count[6] = 0;
    $month_count[7] = 0;
    $month_count[8] = 0;
    $month_count[9] = 0;
    $month_count[10] = 0;
    $month_count[11] = 0;
    foreach($month as $mon)
    {
        if($mon == "01")
        {
            $month_count[0] += 1;
        }
        if($mon == "02")
        {
            $month_count[1] +=1;
        }
        if($mon == "03")
        {
            $month_count[2] +=1;
        }
        if($mon == "04")
        {
            $month_count[3] +=1;
        }
        if($mon == "05")
        {
            $month_count[4] +=1;
        }
        if($mon == "06")
        {
            $month_count[5] +=1;
        }
        if($mon == "07")
        {
            $month_count[6] +=1;
        }
        if($mon == "08")
        {
            $month_count[7] +=1;
        }
        if($mon == "09")
        {
            $month_count[8] +=1;
        }
        if($mon == "10")
        {
            $month_count[9] +=1;
        }
        if($mon == "11")
        {
            $month_count[10] += 1;
        }
        if($mon == "12")
        {
            $month_count[11] +=1;
        }
    }

    // dd($month_count);

    return view('backend.home', compact('CSE_count','EEE_count','BBA_count','CSE_payment_count','EEE_payment_count','BBA_payment_count','month_count'));
    }










}
