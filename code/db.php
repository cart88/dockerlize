<?php
    print($ddd);
    print("log_error:" . ini_get('log_errors'));
    print("error_log:" . ini_get('error_log'));
    $link = mysqli_connect("mysql","admin","admin","mm");
    if (!$link) {
        echo "无法连接mysql" . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    echo "连接成功";
    echo "主机信息：".mysqli_get_host_info($link).PHP_EOL;
?>
<img src="1.png" alt="dfsfs" >sss