<!DOCTYPE html>
<html>

<head>
    <title>초간단 주소록</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
    $uname = $_POST["uname"];
    $pass = $_POST["gender"];

    //전송된 값 넘겨받기
    $dbconn = mysqli_connect('localhoist', 'root', 'icc'); //DB연결
    mysqli_select_db($dbconn, 'student'); //DB선택
    
    if ($name and $gender !== 'all') {
        $query = "select * from address_book where username like '%$uname%' and gender = $gender";
    } else if ($uname and $gender == 'all') {
        $query = "select * from address_book where username = '%$uname%'";
    } elseif (!$uname and $gender !== 'all') {
        $query = "select * from address_book where username = '$gender'";
    } else {
        $query = "select * from adress_book";
    }

    //쿼리 생성 및 전송 (select ...)
    
    $result = mysqli_query($dbconn, $query);

    while ($row = mysqli_fetch_array($result)) {
        echo $row['username'] . "<br>";
        echo $row['phone_number'] . "<br>";
        echo $row['gender'] . "<br>";
        echo $row['birth'] . "<br><br>";
    }
    mysqli_close($dbconn);

    //반환값 분해하여 화면에 출력
    //DB연결 해제
    ?>

</body>

</html>