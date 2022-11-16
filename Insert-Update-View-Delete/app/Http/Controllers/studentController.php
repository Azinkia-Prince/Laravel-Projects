<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stdntData;

class studentController extends Controller
{
    public function StuFunc(){
        $students_data=stdntData::all();
        return view('student',compact('students_data'));
    }
    public function store(Request $request){
        $data = $request->all();
        stdntData::create($data);
        return back()-> with('success','Data Inserted Successfully');

    }
    public function edit($id){
       $to_be_edited=stdntData::find($id);
       return view('edit',compact('to_be_edited'));
    }
    public function update(Request $request,$id){
        $updated_data=stdntData::find($id);
        $new_data=$request->all();
        $updated_data->update($new_data);
        return redirect('/details')-> with('success','Data Updated Successfully');

    }
    public function destroy($id){
        $to_be_deleted = stdntData::find($id);
        $to_be_deleted->delete();
        return back()-> with('success','Data Deleted Successfully');
    }
}
