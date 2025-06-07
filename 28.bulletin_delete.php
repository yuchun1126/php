<?php
    error_reporting(0);         // 關閉錯誤訊息顯示
    session_start();            // 啟動 session

    // 檢查是否登入
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
    }
    else {   
        // 建立資料庫連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 確保 bid 是數字，避免 SQL injection
        $bid = intval($_GET['bid']);

        // 使用 prepared statement 執行安全刪除
        $stmt = mysqli_prepare($conn, "DELETE FROM bulletin WHERE bid = ?");
        mysqli_stmt_bind_param($stmt, "i", $bid);

        if (!mysqli_stmt_execute($stmt)) {
            echo "佈告刪除錯誤";
        } else {
            echo "佈告刪除成功";
        }

        echo "<meta http-equiv='REFRESH' content='3; url=11.bulletin.php'>";

        // 關閉 statement 與資料庫連線
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
?>
