<?php
    error_reporting(0);        // 關閉錯誤訊息顯示
    session_start();           // 啟用 session

    if (!$_SESSION["id"]) {
        // 未登入時提示並跳轉回登入頁
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {
        // 建立資料庫連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 建立 SQL 新增語句（未防注入，有安全風險）
        $sql = "INSERT INTO bulletin(title, content, type, time) 
                VALUES('{$_POST['title']}','{$_POST['content']}', {$_POST['type']}, '{$_POST['time']}')";

        // 執行 SQL 指令
        if (!mysqli_query($conn, $sql)) {
            echo "新增命令錯誤";
        } else {
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
