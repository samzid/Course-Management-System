<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Category;
use App\Models\Order;
use Carbon\Carbon;
use Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BackendController extends Controller
{

    public function UserView(){
        //$users= User::paginate(10);
        $users = User::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.user.view_user',compact('users'));
    }


    //User edit
    public function UserEdit($user_id){
        $user_edit = User::findOrFail($user_id);
        return view('backend.user.edit_user',compact('user_edit'));
    }


 //User Update
    public function UserUpdate(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
       ]);

        $user_id = $request->id;

        User::findOrFail($user_id)->Update([
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => Carbon::now(),
        ]);

        Toastr::success('User updated successfully :)','Success');

        return Redirect()->route('user.list');


    }



    public function UserDelete($id){
        $user_delete = User::find($id)->delete();
        Toastr::success('User deleted successfully:)','Success');
        return redirect('user/list');



    }


    // public function UserCancelOrder(Request $request,$id)
    // {
    //     $order = Order::findOrFail($id)->update(['status'=>3]);
    //     return back();
    // }




    public function TeacherView(){
        $teachers= Teacher::paginate(10);
        return view('backend.user.view_teacher',compact('teachers'));
    }





}
