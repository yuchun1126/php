<?php
    error_reporting(0);          // 關閉錯誤顯示
    session_start();             // 啟動 session

    // 檢查是否登入
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
    }
    else {
        // 建立資料庫連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 檢查連線是否成功
        if (!$conn) {
            echo "資料庫連線失敗";
            exit();
        }

        // 使用 prepared statement 預防 SQL injection
        $stmt = mysqli_prepare($conn, "UPDATE bulletin SET title = ?, content = ?, time = ?, type = ? WHERE bid = ?");
        mysqli_stmt_bind_param(
            $stmt, 
            "sssii", 
            $_POST['title'], 
            $_POST['content'], 
            $_POST['time'], 
            $_POST['type'], 
            $_POST['bid']
        );

        // 執行 SQL 更新
        if (!mysqli_stmt_execute($stmt)) {
            echo "修改錯誤";
        } else {
            echo "修改成功，三秒鐘後回到佈告欄列表";
        }

        // 跳轉回列表頁
        echo "<meta http-equiv='REFRESH' content='3; url=11.bulletin.php'>";

        // 關閉 statement 與連線
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
?>
