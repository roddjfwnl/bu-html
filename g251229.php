<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>구구단251229</title>
</head>

<body>
    <?php
    for (
        $i = 2, $j = 3, $k = 4;
        $k <= 10;
        $i += 3, $j += 3, $k += 3
    ) {
        for ($z = 1; $z <= 9; $z++) {

            $result = $i * $z;
            echo "$i X $z = $result &nbsp;&nbsp;&nbsp;&nbsp;";
            $result = $i * $z;
            echo "$j X $z = $result &nbsp;&nbsp;&nbsp;&nbsp;";
            if ($k == 10) {
                echo "<br>";
               
            } else {
                 $result = $i * $z;
                echo "$k X $z = $result <br>";
            }
        }
        echo "<br>";
    }

    //------------------------------------------------------
/*
    for ($j = 2; $j <= 9; $j++) {
        for ($i = 1; $i <= 9; $i++) {
            $result = $j * $i;
            echo "$j X $i = $result &nbsp;&nbsp;";
        }

    }
*/

    //------------------------------------------------------
    /*
        for ($j = 2; $j <= 9; $j++) {


            for ($i = 1; $i <= 9; $i++) {
                $result = $j * $i;
                echo "$j X $i = $result<br>";   
            }

        }

    */

    //------------------------------------------------------
    /*
    //구구단while문
    $j = 2;
    $i = 1;
    while ($j <= 9) {

        while ($i <= 9) {
            $result = $j * $i;
            echo "$j X $i = $result<br>";
            $i++;
        }
        $j++;
        $i = 1;
    }
        */
    ?>
</body>

</html>