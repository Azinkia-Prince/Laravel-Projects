@extends('layouts.master')
@section('title')
Department
@endsection

@section('content')
    <div class="reg_field">
        <h1>Department List</h1><br>
        <form action="/record" method="post">
            {{ csrf_field() }}
            <input type="text" required name="dept" placeholder="Department"><br><br>
            <input type="submit" value="Save"><br><br>
        </form>
    </div>
    <div>
        <table class="table">
            <tr>
                <th>Serial No.</th>
                <th>Department Name</th>
                <th>Action</th>
            </tr>
            @foreach ($view_data as $key=>$data_view)

            <tr>
                <td>{{++$key}}</td>
                <td>{{$data_view->dept}}</td>
                <td><a href="/{{$data_view->id}}/edit">Edit</a> | <a href="/{{$data_view->id}}">Delete</a></td>
            </tr>
                
            @endforeach


        </table>
    </div>
  
@endsection