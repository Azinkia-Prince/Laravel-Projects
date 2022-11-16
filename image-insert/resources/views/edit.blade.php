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
    
    <div style="padding:30px">
    <h1>Image Upload Page</h1>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <form action="/record/{{$to_be_edited->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="">Name : </label>
        <input type="text" required name="name" value="{{$to_be_edited->name}}"><br><br>
        <label for="">Image : </label>
        <input type="file" required name="pic" value="" onchange="document.getElementById('prev').src = window.URL.createObjectURL(this.files[0])"><br><br>
        <input type="submit" value="Upload">
        <img id="prev" width="100"/><br>
        
    </form>
    </div>

</body>
</html>