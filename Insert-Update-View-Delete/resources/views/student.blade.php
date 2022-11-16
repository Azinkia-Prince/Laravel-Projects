<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Student Details</h1>
    <form action="/record" method="post">
        {{csrf_field()}}
        @if(Session::has ('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
            
        </div>
        @endif

        <label for="">Student Name</label>
        <input type="text" name="stdnt_name" required><br><br>
        <label for="">Department</label>
        <input type="text" name="stdnt_dept" required><br><br>
        <label for="">Semester</label>
        <input type="text" name="stdnt_sem" required><br><br>
        <label for="">Section</label>
        <input type="text" name="stdnt_sec" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Semester</th>
                <th>Section</th>
                <th>Action</th>
                </tr>
            @foreach($students_data as $key=>$view_data)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$view_data->stdnt_name}}</td>
                <td>{{$view_data->stdnt_dept}}</td>
                <td>{{$view_data->stdnt_sem}}</td>
                <td>{{$view_data->stdnt_sec}}</td>
                <td><a href="/{{$view_data->id}}/edit">Edit</a> | <a href="/{{$view_data->id}}" onclick="return confirm('Are you sure ?')">Delete</a></td>
            </tr>
            @endforeach
        </table>
        
    </div>
    </center>
</body>
</html>