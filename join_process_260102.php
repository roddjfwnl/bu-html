<!DOCTYPE html>
<html>

<head>
    <title>회원 가입</title>
    <meta charset="utf-8">
</head>

<body>

    <?php

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];
    $uname = $_POST["uname"];
    $uphone = $_POST["uphone"];

    $dir = './image/';
    $file_name = basename($_FILES['uphoto']['uname']);
    $imagepath = $dir . $file_name;
    move_uploaded_file($_FILES['uphoto']['tmp_name'], $imagepath);

    $dbcon = mysqli_connect("localhost", "root", "");
    mysqli_select_db($dbcon, "kt");

    $query = "insert into member (uid, upw, uname, phone, photo)
    values(null, '$uid', '$upw', '$uname', '$uphone', '$imagepath')";
    $result = mysqli_query($dbcon, $query);
    if ($result) {
        "<table border='1' width='400' align='center' cellpadding='10' cellspacing='0'>";
        echo "  <tr bgcolor='#eeeeee'>";
        echo "회원 가입 완료 ";
        "<tr><br>
        <td align = 'center'>아이디</td>
        <td>$uid</td>
        <br><tr>";
        "<tr><br>
        <td align = 'center'>이름</td>
        <td>$uname</td>
        <br><tr>";
        "<tr><br>
        <td align = 'center'>전화번호</td>
        <td>$uphone</td>
        <br><tr>";
        "</table>";

    } else {
        echo "회원 가입 실패";
        "<p align='center'>에러 내용: " . mysqli_error($dbcon) . "</p>";
    }
    mysqli_close($dbcon);
    ?>
    <meta http-equiv="refresh" content="3; url=join_login_260102.php">
</body>

</html>