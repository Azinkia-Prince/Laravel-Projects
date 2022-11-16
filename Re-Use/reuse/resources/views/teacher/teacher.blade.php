@extends('layouts.master')
@section('title')
    Teacher
@endsection

@section('content')
    <h1>Teachers List</h1><br>
    <form action="/t_rec" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <select name="dept_name">
        <option value="">Please Select A Department</option>
        @foreach ($dept_data as $data_dept)
            <option value="{{$data_dept->id}}">{{$data_dept->dept}}</option>
        @endforeach

    </select><br><br>
    <input type="text" required name="t_name" placeholder="Teacher Name"><br><br>
    <input type="text" required name="t_mail" placeholder="Mail"><br><br>
    <input type="text" required name="t_num" placeholder="Number"><br><br>
    <input type="file" name="t_img" onchange="document.getElementById('pic').src = window.URL.createObjectURL(this.files[0])"><br><br>
    <img id="pic"width="100"/><br>

    <input type="submit" value="Register">
    </form>
@endsection