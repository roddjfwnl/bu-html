<!DOCTYPE html>
<html>

<head>로그인</head>


<body>
    <?
    
    $dbconn = mysqli_connect('localhost', 'root', "", "web");
    mysqli_select_db($dbconn, 'kt');
    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    $sql = "select * from member where uid = '$uid'";
    $result = mysqli_query($dbconn, $query);
    $row = mysqli_fetch_array($result);
    if(isset($row)){
        if($row['$upw']==$upw){
            echo "아이디 비번 모두 일치";
           $_SESSION['userid']=$row['uid'];
           echo "<script>location.replace('./content.php')</script>"; 
        }else{
            echo "로그인 실패 A";
        }
    }else{
        echo "로그인 실패 B";
    }    

    ?>

</body>

</html>