<!DOCTYPE html>
<html>

<head>
    <title>주소록</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>주소록 입력하기</h1>
    <?php
    $uname = $_POST["uname"];
    $uphone = $_POST["uphone"];
    $gender = $_POST["gender"];
    $birth = $_POST["birth"];
    //데이터베이스 연결
    $dbcon = mysqli_connect("localhost", "root", "");

    //데이터베이스 선택
    mysql_select_db($dbcon, 'student');
    //쿼리 준비 -> 전송
    $query = "insert into address_book values(
    '$uname', '$uphone', '$gender', '$birth')";
    $result = mysqli_query($dbcon, $query);
    if ($result) {
        echo "$uname 님, 가입 신청이 완료되었습니다. ";
    } else {
        echo "<br><br>알 수 없는 오류 발생<br><br>";
    }

    //데이터베이스 연결 해제
    mysqli_close($dbcon);
    ?>
    <a href="'./address_input_251231">[뒤로가기]</a>
</body>

</html>