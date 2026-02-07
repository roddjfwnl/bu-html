<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>회원가입</title>
</head>



<body>
    
    
    <form action='process_test.php' method='post'>
       
        <select name=birth size='1'>
            <option>날짜선택</option>
        

        <?php
        $cur_year = date('Y');
        $end_year = $cur_year - 100;
        for($year = $cur_year; $year > $end_year; $year--){

        echo "<option value='$year'>$year</option><br>";
        
        $birth = $_POST["birth"];
        $age = date('Y')-$birth+1;
        echo "당신은 '$age'세 입니다";
        }
        ?>
        
        </select>

    </form>
</body>

</html>