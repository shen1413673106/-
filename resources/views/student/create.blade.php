<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="{{url('student/save')}}" method="post" enctype="multipart/form-data">
    @csrf
    <table border="">
        <tr>
            <td> 姓名:</td>
            <td> <input type="text" name="sname"></td>
        </tr>
        <tr>
            <td>头像图片:</td>
            <td><input type="file" name="simg"></td>
        </tr>
        <tr>
            <td>性别:</td>
            <td>
                <input type="radio" name="sex" value="1">男
                <input type="radio" name="sex" value="2">女
            </td>
        </tr>
        <tr>
            <td>班级:</td>
            <td>
                <select name="sber">
                    <option value="1903班">1903班</option>
                    <option value="1904班">1904班</option>
                    <option value="1905班">1905班</option>
                </select>
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