<?php
session_start();
$_SESSION['userid']='hong';
$_SESSION['time'] = time();
if(isset($_SESSOPN["userid"])){
    echo "


<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>테스트</title>
    </head>
    <body>
        <h1>회원 전용 페이지</h1>
        <img src ='./image.jpg' width = '200'>
    </body>
</html>";
}else{
    echo "Access Denied!!";
}
?>