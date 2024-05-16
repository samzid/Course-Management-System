<?php

namespace App\Http\Controllers;
use App\Models\AdminMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Toastr;
use Carbon\Carbon;

class AdminMessageController extends Controller
{





//Admin Message
public function AddAdminMessage($id){
    // dd($id);
    $data = AdminMessage::find($id);
    // dd($data);
    return view('backend.admin_message.view_admin_contact_message',compact('data'));
}




//User Message
public function AddUserMessage(){
    return view('backend.user_message.view_user_contact_message');
}






// Admin Contact Message Store
public function StoreAdminMessage(Request $request)
{

    AdminMessage::insert([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'message' => $request->message,
        'type'=>2,
        'user_id' => $request->user_id,
        'created_at' => Carbon::now(),
    ]);

    Toastr::success('Slider added successfully:)', 'Success');
    // return Redirect()->back();
    return redirect('user_message/view');
}







//User Contact Message Store
public function StoreUserMessage(Request $request)
{

    AdminMessage::insert([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'message' => $request->message,
        'user_id' => $request->user_id,
        'type'=>1,
        'created_at' => Carbon::now(),
    ]);

    Toastr::success('Slider added successfully:)', 'Success');
    // return Redirect()->back();
    return redirect('/');
}











 // Contact Message Data View
 public function AdminFormMessageView()
 {

     $view_admin_form_message = AdminMessage::all()->sortByDesc("created_at");

     // ContactMessage::get
     Toastr::success('Slider added successfully:)', 'Success');
     return view('frontend.message.view_form_message', compact('view_admin_form_message'));
 }







 // ContactMessage General View
 public function AdminFormMessageGeneralView($id)
 {
     $general_view_admin_form_message = AdminMessage::findOrFail($id);
     return view('frontend.message.general_view_form_message', compact('general_view_admin_form_message'));
    }





}



