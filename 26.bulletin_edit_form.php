<?php
    error_reporting(0);        // 關閉錯誤訊息顯示
    session_start();           // 啟動 session

    // 檢查是否登入
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
    }
    else {
        // 建立資料庫連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 從 GET 取得 bid（佈告編號），查詢資料
        $result = mysqli_query($conn, "SELECT * FROM bulletin WHERE bid = {$_GET["bid"]}");
        $row = mysqli_fetch_array($result);

        // 根據佈告類型設定 radio 是否被勾選
        $checked1 = $checked2 = $checked3 = "";
        if ($row['type'] == 1) $checked1 = "checked";
        if ($row['type'] == 2) $checked2 = "checked";
        if ($row['type'] == 3) $checked3 = "checked";

        // 顯示修改表單
        echo "
        <html>
        <head><title>修改佈告</title><meta charset='UTF-8'></head>
        <body>
            <h2>修改佈告</h2>
            <form method='post' action='27.bulletin_edit.php'>
                佈告編號：{$row['bid']} 
                <input type='hidden' name='bid' value='{$row['bid']}'><br><
