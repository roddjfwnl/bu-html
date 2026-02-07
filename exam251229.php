<!DOCTYPE html>
<html>

<head>
    <title>PHP Test</title>
</head>

<body>

    <?php
    $payment = 3000;
    $price = 800;
    $num = 3;
    $money = $payment - ($price * $num);
    echo "Unit :  $price <br>";
    echo "Payment :  $payment <br>";
    echo "Change :  $money <br>";
    ?>

    <?php
    $height = 170;
    $weight = 60;
    $result = ($height - 100) * 0.9;

    if ($weight > $result) {
        echo ("다이어트가 필요합니다.");
    } else {
        echo ("다이어트가 필요하지 않습니다.");
    }
    ?>

</body>

</html>