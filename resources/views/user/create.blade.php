<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="{{url('user/save')}}" method="post">
    @csrf
<table border="">
    <tr>
        <td>  用户昵称:</td>
        <td> <input type="text" name="uname"></td>
    </tr>
    <tr>
        <td>用户密码:</td>
        <td><input type="password" name="upwd"></td>
    </tr>
    <tr>
        <td>用户身份:</td>
        <td>
            用户主管:<input type="radio" name="ushod" value="1">
            用户库管:<input type="radio" name="ushod" value="2" checked>
        </td>
    </tr>

    <tr>
        <td><input type="submit" value="添加"></td>
        <td></td>
    </tr>
</table>



</form>


</body>
</html>