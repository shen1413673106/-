<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table border="">
    <tr>
        <td>货物ID</td>
        <td>货物名称</td>
        <td>货物图片</td>
        <td>货物数量</td>
        <td>操作</td>
    </tr>
@foreach($arr as $v)
    <tr>
        <td>{{$v->sid}}</td>
        <td>{{$v->sname}}</td>
        <td>
            <img src="{{env('UPLODE_URL')}}{{$v->simg}}" width="100px">
        </td>
        <td>{{$v->sum}}</td>
        <td>
            <button><a href="{{url('hw/delete',['id'=>$v->sid])}}">出库</a></button>
        </td>
    </tr>
    @endforeach
</table>
{{$arr->links()}}
</body>
</html>