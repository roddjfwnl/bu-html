<!DOCTYPE html>
<html>

<head>
    <title>회원 가입</title>
    <meta charset="utf-8">

</head>


<body>
    <form action='./join_process_260102.php' method="post" enctype="multipart/form-data">
        <fieldset style="width:300px">
            <legend>회원 가입</legend>
            <table bolder='10'></table>
            <tr>
                <td>ID : </td>
                <input type="text" name='uid'><br>
            </tr>
            <tr>
                <td>PW : </td>
                <input type="password" name='upw'><br>
            </tr>
            <tr>
                <td>Name : </td>
                </td>
                <input type="text" name='uname'><br>
            </tr>
            <tr>
                <td> Phone : </td><input type="tel" name='uphone_num'><br>
            </tr>
            <tr>
                <td>Image : </td>
                <input type="file" name='uphoto'><br>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type='submit' value='가입하기'></td>
            </tr>
        </fieldset>
    </form>
</body>

</html>