<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<button><a href="{{url('student/show')}}">随机抽人</a></button>
<table border="">
    <tr>
        <td>学生ID</td>
        <td>学生名称</td>
        <td>头像</td>
        <td>性别</td>
        <td>班级</td>
        <td>操作</td>
    </tr>
    @foreach($arr as $v)
        <tr>
            <td>{{$v->sid}}</td>
            <td>{{$v->sname}}</td>
            <td>
                <img src="{{env('UPLODE_URL')}}{{$v->simg}}" width="100px">
            </td>
            <td>
                @if($v->sex==1)男@else女@endif
            </td>
            <td>{{$v->sber}}</td>
            <td>
                <button><a href="{{url('hw/delete',['id'=>$v->sid])}}">出库</a></button>
            </td>
        </tr>
    @endforeach
</table>
{{$arr->links()}}
</body>
</html>