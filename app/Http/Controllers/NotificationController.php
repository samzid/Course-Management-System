<?php

namespace App\Http\Controllers;

use App\Models\User\RegistrationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    //
    public function notification()
    {
        $form = RegistrationForm::where('id_number', Auth::user()->student_id)->first();
        $noti = "";


    if($form->status == "2")
    {
        $noti = "Your Application is now in register office at $form->updated_at";
    }


    if($form->status == "3")
    {
        $noti = "Your Application is now in Account office at $form->updated_at";
    }


    if($form->status == "4")
    {
        $noti = "Your Application is now in Library office at $form->updated_at";
    }


    if($form->status == "5")
    {
        $noti = "Your Application is now in Ready Certificate for Registration office at $form->updated_at";
    }


    if($form->status == "6")
    {
        $noti = "Your Application is now in Delivered Certificate office at $form->updated_at";
    }


    return view('frontend.notification.list', compact('noti'));


}



}
