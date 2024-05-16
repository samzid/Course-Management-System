<?php

namespace App\Http\Controllers;

use App\Models\AdminMessage;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Toastr;
use Illuminate\Support\Facades\Auth;

class ContactMessageController extends Controller
{
    // Contact Message Store
    public function ContactMessageStore(Request $request)
    {


        ContactMessage::insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Slider added successfully:)', 'Success');
        return Redirect()->back();
    }



 // User
public function ContactMessageView(Request $request)
{
    // $data = tableName::where('Method','Delivery')->get();
    $view_contact_message = AdminMessage::where('type','1')->get()->sortByDesc("created_at");

    Toastr::success('Slider added successfully:)', 'Success');
    return view('backend.contact_message.view_contact_message', compact('view_contact_message'));
}





 // User
 public function GuestMessageView(Request $request)
 {

     $guests_contact_message = ContactMessage::get()->sortByDesc("created_at");
     return view('backend.contact_message.guest_contact_message', compact('guests_contact_message'));
 }
 







 // User
 public function FrontendMessageView()
 {
     // $data = tableName::where('Method','Delivery')->get();
     $view_contact_message = AdminMessage::where('type','2')->where('user_id', Auth::user()->id)->get()->sortByDesc("created_at");

     Toastr::success('Slider added successfully:)', 'Success');
     return view('backend.contact_message.message', compact('view_contact_message'));
 }






 // Admin Message Data View
 public function AdminMessageView(Request $request)
 {
     // $data = tableName::where('Method','Delivery')->get();
    //  $view_contact_message = AdminMessage::where('type','2')->get()->sortByDesc("created_at");
    $view_contact_message = AdminMessage::where('type','2')->get()->sortByDesc("created_at");


     Toastr::success('Slider added successfully:)', 'Success');
     return view('backend.contact_message.message', compact('view_contact_message'));
 }




    //delete
    public function ContactMessageDelete($id)
    {
        $delete_contact_message = ContactMessage::find($id)->delete();
        return redirect()->back();
    }






 // ContactMessage General View
 public function ContactMessageGeneralView($id)
 {
     $contactMessage_generalView = AdminMessage::findOrFail($id);
     return view('backend.contact_message.generalView_contact_message', compact('contactMessage_generalView'));
    }





 // Guest ContactMessage General View
 public function GuestMessageGeneralView($id)
 {
     $guestMessage_generalView = ContactMessage::findOrFail($id);
     return view('backend.contact_message.generalView_guest_message', compact('guestMessage_generalView'));
    }














}
