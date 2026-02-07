<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>파일 전송하기</title>
</head>


<body>

<?php
$dir = './image/'; //경로 끝에 반드시 슬래시!!
$today = date('ymdhis');
$userid= 'chu';

$file_info = basename($_FILES['image']['name']);
$file_type = $file_info['extension'];
$file_name= $today.$userid.'.'.$file_type;
$imagepath = $dir.$file_name;

move_uploaded_file($_FILES['image']['tmp_name'], $imagepath);
$f_size = $_FILES['image']['size'];
$result_size = number_format($f_size);
echo "첨부파일 : $file_mame";
echo "<img src = '$imagepath'>";

?>
</body>

</html>