<!DOCTYPE html>
<html>

<head>
    <title>놀이공원 입장료 계산</title>
</head>

<body>
    <?php
    $a = $_POST['age'];
    $m = $_POST["member"];
    $s = $_POST["sell"];
    $result = $s * $m;
    
    echo "입장하실 분은 $a 세, $m 명 입니다.";

    if ($a < 7) {
        $s = 0;
        echo "총 입장료는 $result 입니다.";
    } elseif ($a < 18) {
        $s = 15000;
        echo "총 입장료는 $result 입니다.";
    } else {
        $s = 20000;
        echo "총 입장료는 $result 입니다.";
    }
    
    ?>
</body>

</html>