<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\s_model;

class s_controller extends Controller
{
    public function s_func(){
        $view_data = s_Model::all();
        return view('department.department',compact('view_data'));
    }
    public function store(Request $request){
        $data=$request->all();
        s_Model::create($data);
        return back()->with('success','Added Successfully');

    }
}
