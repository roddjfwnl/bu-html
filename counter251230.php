<!DOCTYPE html>
<meta charset='utf-8'>

</html>
<title>카운터</title>

<body>
    <?php
    //방문자의 IP 확인하기
    $ip = $_SERVER["REMOTE_ADDR"];

    // 현재 날짜와 시간 확인하기(분, 초까지)
    date_default_timezone_set('Asia/Seoul');
    $today = date("Y/m/d/H/i/s", time());

    //log.txt 파일 열기 (읽기/쓰기)
    $fp = fopen("log.txt","a+");

    //IP와 접속 시간 기록하기
    fwrite($fp, "$today | $ip \n");
    //log.txt 파일에 저장된 내용 모두 불러와서 화면에 출력하기

    fseek($fp, 0);
    while (!feof($fp)) {
        $log = fgets($fp, 2048);
        echo "$log<br><hr>";
    }

    // 파일 연결 종료
    echo $ip;



    /*
    //카운터
        //record.txt파일 열기
        $fp = fopen("record.txt", "r+");
        // record.txt 파일로 부터 숫자 읽기(변수에 담기)
        $count = fgets($fp, 4096);
        // 읽어온 숫자 (변수) 출력
        echo '당신은 $count 번째 사용자입니다.';

        //읽어온 숫자 증가시키기
        $count++;
        //record.txt 파일의 시작점으로 커서 이동
        fseek($fp, 0);
        // record.txt 파일에 증가된 숫자(변수 쓰기)
        fwrite($fp, 0);
        // 파일 연결 해제
        fclose($fp);
    */
    ?>
</body>


</html>