<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\imgModel;

class imgController extends Controller
{
    public function imgFunc(){
        return view('imgpage');
    }
    public function view_data(){
        $view_data=imgModel::all();
        return view('view',compact('view_data'));
    }
    public function update(Request $request,$id){
        $to_be_updated =imgModel::find($id);
        if($request->hasfile('pic')){
            $image=$request->file('pic');
            $file_name=time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());   
            $image_resize->resize(300,300);
            $image_resize->save('images/'.$file_name);
            $to_be_updated->pic=$file_name;
          }
        $to_be_updated->name=$request->name;
        $to_be_updated->save();
        return redirect('/view')->with('success','Data Updated Successfully');
    }
    public function edit($id){
        $to_be_edited=imgModel::find($id);
        return view('edit',compact('to_be_edited'));
    }
    public function remove($id){
        $to_be_deleted=imgModel::find($id);
        $to_be_deleted->delete();
        return back()->with('success','Data submitted successfully');
    }
    public function store(Request $request)
    {
        $data= new imgModel;
        if($request->hasfile('pic')){
          $image=$request->file('pic');
          $file_name=time().'.'.$image->getClientOriginalExtension();
          $image_resize = Image::make($image->getRealPath());   
          $image_resize->resize(300,300);
          $image_resize->save('images/'.$file_name);
          $data->pic=$file_name;
        }

        $data->name=$request->name;
        $data->save();
        return back()->with('success','Data submitted successfully');
    }
}
