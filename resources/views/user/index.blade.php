<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table border="">
    <tr>
        <td>用户ID</td>
        <td>用户昵称</td>
        <td>用户身份</td>
        <td>操作</td>
    </tr>
@foreach($arr as $v)
    <tr>
        <td>{{$v->uid}}</td>
        <td>{{$v->uname}}</td>
        <td>
           {{$v->uid==1?"主管":"库管"}}
        </td>
        <td>{{$v->uid}}</td>
    </tr>
    @endforeach
</table>
{{$arr->links()}}
</body>
</html>