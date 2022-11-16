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
    table{
        border:1px solid black;
    }
    td{
        vertical-align: middle;
    }
</style>

<body>
    <center>
        <h1>All Informations</h1>
        <div style="height:20px;"></div>
        <div style="width:300px;">
        <h4 style="padding: 10px 0;background-color:#dfe4ea;border-radius:10px;text-align:center"><a href="/details" style="text-decoration:none">Upload New InFo</a></h4></div>
        <table class="table">
            <tr>
                <th>Serial NO.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach($view_data as $key=>$data_view)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$data_view->name}}</td>
                <td><img src="{{asset('images/'.$data_view->pic)}}", width="100"></td>
                <td><a href="/{{$data_view->id}}/edit">Edit</a> | <a href="/{{$data_view->id}}">Delete</a></td>
            </tr>
            @endforeach

        </table>
    </center>
</body>
</html>