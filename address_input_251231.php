<!DOCTYPE html>
<html>

<head>
    <title>초간단 주소록</title>
    <meta charset="utf-8">
</head>

</html>

<body>
    <a href='./address_input_251231.php'>회원 가입</a>
    <a href='./address_process_20251231.php'>회원 검색</a>
    <br>
    <h1>주소록 검색하기</h1>
    <br>
    <form action='./process.php' method=post>
        이 름: <input type='text' name='username' size='20'><br>
        전 화: <input type='text' name='phone_number' size='20'>(-빼고 입력하세요)<br>
        성 별: <input type='radio' name='c' value='male'>남자<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' name='c' value='female'>여자<br>
        생년월일: <input type='text' name='birth' size='10'>(ex.801201)<br><br>
        <input type='submit' value='입력완료'>
    </form>

</body>