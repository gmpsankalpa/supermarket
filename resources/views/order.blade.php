<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>All Oders</h1>  

    <table border="1">
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Date</th>
            <th>Description</th>
            <th>Operatiom</th>
        </tr>

        @foreach($allorder as $iteam)
        <tr>
            <td>{{$iteam->id}}</td>
            <td>{{$iteam->user_id}}</td>
            <td>{{$iteam->name}}</td>
            <td>{{$iteam->quantity}}</td>
            <td>{{$iteam->date}}</td>
            <td>{{$iteam->desc}}</td>
            <td>
                <a href="{{url('editorder/'.$iteam->id)}}">Edit</a>
                <a href="{{url('deleteorder/'.$iteam->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach





    </table>



</body>
</html>