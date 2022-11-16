<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td{
        vertical-align:middle;
    }
</style>
<body>
    <center>
        <h2>Student Records</h2><br>
        <div style="width:400px">
            <h4 style="padding:15px 0;background-color:#dff9fb;border-radius:10px"><a style="text-decoration:none" href="/register">Add Another Record</a></h4>
        </div><br>
        <table class="table">
            <tr>
                <th>Serial No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Picture</th>
                <th>Action</th>
            </tr>
            @foreach($view_data as $key=>$data_view)
            <tr><td>{{++$key}}</td>
                <td>{{$data_view->name}}</td>
                <td>{{$data_view->mail}}</td>
                <td>{{$data_view->dept}}</td>
                <td><img src="{{asset('images/'.$data_view->stdnt_pic)}}" width="50"></td>
                <td><a href="/{{$data_view->id}}/edit">Edit</a> | <a href="/{{$data_view->id}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>