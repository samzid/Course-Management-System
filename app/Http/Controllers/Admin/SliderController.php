<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Slider;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Toastr;

class SliderController extends Controller
{
    public function SliderView(){
        $sliders = Slider::get();
        return view('backend.slider.view_slider',compact('sliders'));
    }





    // Slider Store
    public function SliderStore(Request $request)
    {
        $request->validate([

            'image' => 'required',
        ]);

        $image = $request->file('image');

        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(1920, 892)->save('uploads/slider/' . $name_gen);
        $save_url = 'uploads/slider/' . $name_gen;

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Slider added successfully:)', 'Success');
        return Redirect()->back();
    }



    // edit slider
    public function SliderEdit($id){
        $slider = Slider::findOrFail($id);
        return view('backend.slider.edit_slider',compact('slider'));
    }




    public function SliderUpdate(Request $request)
    {

        $id = $request->id;


        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(870, 370)->save('uploads/slider/' . $name_gen);
        $save_url = 'uploads/slider/' . $name_gen;

        Slider::findOrFail($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $save_url,
            'updated_at' => Carbon::now(),
        ]);

        Toastr::success('Slider updated successfully:)', 'Success');
        return Redirect()->route('all.sliders');
    }





public function SliderDelete($id){
    $slider_delete = Slider::find($id)->delete();
    return redirect()->back();
}


}
