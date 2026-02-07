<!DOCTYPE html>
<html>

<head>
    <title>다이어트 유무 판별기</title>
</head>

<body>
    <?php
    $uname = $_POST["uname"];
    $w = $_POST["weight"];
    $h = $_POST["height"];

    $result = ($h - 100) * 0.9;
    if ($w >= $result)
        echo "$uname 님 다이어트 하세요.";
    else
        echo "$uname 님 부러운데요.";
    ?>
</body>

</html>