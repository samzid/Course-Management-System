<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Department;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Toastr;

use Illuminate\Support\Facades\Validator;



class DepartmentController extends Controller
{

    public function DepartmentView()
    {

        $department_view = Department::all();

        return view('backend.department.view_department', compact('department_view'));
    }


    // Department Store



    public function DepartmentStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as per your requirements
            // Add other validation rules for your form fields
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/slider/', $name_gen);
            $save_url = 'uploads/slider/' . $name_gen;
        } else {
            // Handle the case when no image is uploaded
            return redirect()->back()->with('error', 'No image uploaded');
        }

        Department::create([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'credit' => $request->credit,
            'fee' => $request->fee,
            'duration' => $request->duration,
            'department' => $request->department,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        // Optionally, you can use Laravel's built-in session flash to display a success message
        return redirect()->back()->with('success', 'Course added successfully');
    }




    // edit Department
    public function DepartmentEdit($id)
    {
        $department_edit = Department::findOrFail($id);
        return view('backend.department.edit_department', compact('department_edit'));
    }



    public function DepartmentUpdate(Request $request)
    {

        $id = $request->id;
        // $old_img = $request->old_img;


        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(870, 370)->save('uploads/slider/' . $name_gen);
        $save_url = 'uploads/slider/' . $name_gen;

        Department::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $save_url,
            'updated_at' => Carbon::now(),
        ]);

        Toastr::success('Slider updated successfully:)', 'Success');
        return Redirect()->route('all.department');
    }






//delete
public function DepartmentDelete($id){
    $department_delete = Department::find($id)->delete();
    return redirect()->back();
}






}
