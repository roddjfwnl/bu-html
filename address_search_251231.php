<!DOCTYPE html>
<html>

<head>
    <title>초간단 주소록</title>
    <meta charset="utf-8">
</head>

</html>

<body>
    <form action='./address_result_260102.php' method = post>
        이름 : <input type="text"name = 'username' size = '20'><br>
        성별 : <select name = 'gender' size = 1>
            <option value="all"> 모두 다</option>
            <option value="male">남자만</option>
            <option value="female">여자만</option>
        </select>
        <input type ='submit' value = '검색'>
    </form>

</body>