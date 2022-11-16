<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\studentModel;

class studentController extends Controller
{
    public function stuFunc(){
        return view('student');
    }
    public function store(Request $request){
        $data= new studentModel;   
        if($request->hasfile('stdnt_pic')){
            $image=$request->file('stdnt_pic');
            $file_name=time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());   
            $image_resize->resize(300,300);
            $image_resize->save('images/' . $file_name);
            $data->stdnt_pic=$file_name;
        }
        $data->name=$request->name;
        $data->mail=$request->mail;
        $data->dept=$request->dept;
        $data->save();
        return back()->with('success','Data Inserted Successfully');
    }
    public function viewdata(Request $request){
        $view_data=studentModel::all();
        return view('view',compact('view_data'));
    }
    public function edit($id){
        $to_be_edited = studentModel::find($id);
        return view('edit',compact('to_be_edited'));
    }
    public function update(Request $request,$id){
        $to_be_updated=studentModel::find($id);
        if($request->hasfile('stdnt_pic')){
            $image=$request->file('stdnt_pic');
            $file_name=time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());   
            $image_resize->resize(300,300);
            $image_resize->save('images/' . $file_name);
            $to_be_updated->stdnt_pic=$file_name;
        }
        $to_be_updated->name=$request->name;
        $to_be_updated->mail=$request->mail;
        $to_be_updated->dept=$request->dept;
        $to_be_updated->save();
        return redirect('/view')->with('success','Data Updated Successfully');

    }
    public function remove($id){
        $to_be_deleted=studentModel::find($id);
        $to_be_deleted->delete();
        return back()->with('success','Data Inserted Successfully');
    }
}
