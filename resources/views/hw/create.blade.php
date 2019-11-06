<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="{{url('hw/save')}}" method="post" enctype="multipart/form-data">
    @csrf
<table border="">
    <tr>
        <td> 货物名称:</td>
        <td> <input type="text" name="sname"></td>
    </tr>
    <tr>
        <td>货物图片:</td>
        <td><input type="file" name="simg"></td>
    </tr>
    <tr>
        <td>货物数量:</td>
        <td><input type="text" name="sum"></td>
    </tr>

    <tr>
        <td><input type="submit" value="添加"></td>
        <td></td>
    </tr>
</table>



</form>


</body>
</html>