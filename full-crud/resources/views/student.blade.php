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
    <h1>Student Registration Form</h1>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <form action="/record" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="">Name : </label>
        <input type="text" name="name" required><br><br>
        <label for="">Mail : </label>
        <input type="text" name="mail" required><br><br>
        <label for="">Dept : </label>
        <input type="text" name="dept" required><br><br>
        <label for="">Image : </label>
        <input type="file" name="stdnt_pic" required onchange="document.getElementById('ppic').src = window.URL.createObjectURL(this.files[0])"><br><br>
        <img id="ppic" width="100" /><br><br>
        <input type="submit" value="Register"><br><br>
        <div style="width:400px">
            <h4 style="padding:15px 0;background-color:#dff9fb;border-radius:10px"><a style="text-decoration:none" href="/view">View Student Records</a></h4>
        </div>

    </form>
    </center>
</body>
</html>