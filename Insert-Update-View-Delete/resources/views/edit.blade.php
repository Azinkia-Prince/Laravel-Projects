<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Update Student Data</h1>
    <form action="/record/{{$to_be_edited->id}}" method="post">
        {{csrf_field()}}
        @if(Session::has ('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
            
        </div>
        @endif

        <label for="">Student Name</label>
        <input type="text" name="stdnt_name" value="{{$to_be_edited->stdnt_name}}" required><br><br>
        <label for="">Department</label>
        <input type="text" name="stdnt_dept" value="{{$to_be_edited->stdnt_dept}}" required><br><br>
        <label for="">Semester</label>
        <input type="text" name="stdnt_sem" value="{{$to_be_edited->stdnt_sem}}" required><br><br>
        <label for="">Section</label>
        <input type="text" name="stdnt_sec" value="{{$to_be_edited->stdnt_sec}}" required><br><br>
        <input type="submit" value="Update">
    </form>
    </center>
</body>
</html>