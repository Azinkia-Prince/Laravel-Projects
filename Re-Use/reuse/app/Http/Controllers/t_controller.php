<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\s_model;
use App\Models\t_model;
use Image;

class t_controller extends Controller
{
    public function t_func(){
        $dept_data = s_model::all();
        return view('teacher.teacher',compact('dept_data'));
    }
    public function t_store(Request $request){
        $data= new t_model;
        if($request->hasfile('t_img'))
        {
         $image=$request->file('t_img');
         $file_name=time().'.'.$image->getClientOriginalExtension();
         $image_resize = Image::make($image->getRealPath());   
         $image_resize->resize(250,250);
         $image_resize->save('images/'.$file_name);
         $data->t_img=$file_name;
        }
        $data->dept_data=$request->dept_data;
        $data->t_name=$request->t_name;
        $data->t_mail=$request->t_mail;
        $data->t_num=$request->t_num;
        $data->save();

    }
}
