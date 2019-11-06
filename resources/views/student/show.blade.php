<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


    <table border="">
        <tr>
            <td> 姓名:</td>
            <td> {{$show->sname}}</td>
        </tr>
        <tr>
            <td>头像图片:</td>
            <td> <img src="{{env('UPLODE_URL')}}{{$show->simg}}" width="100px"></td>
        </tr>
        <tr>
            <td>性别:</td>
            <td>
                @if($show->sex==1)男@else女@endif
            </td>
        </tr>
        <tr>
            <td>班级:</td>
            <td>
                {{$show->sber}}
            </td>
        </tr>

    </table>




</body>
</html>