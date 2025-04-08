<?php
    // 關閉錯誤訊息顯示（生產環境中要記得關閉）
    error_reporting(0);

    // 啟動 session 功能
    session_start();

    // 檢查使用者是否已登入
    if (!$_SESSION["id"]) {
        // 如果未登入，顯示提示訊息並 3 秒後跳轉回登入頁面
        echo "請先登入";
        echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
    } else {
        // 如果已登入，顯示歡迎訊息，並提供登出、管理使用者、與新增佈告的連結
        echo "歡迎, " . $_SESSION["id"] . "[<a href='12.logout.php'>登出</a>] [<a href='18.user.php'>管理使用者</a>] [<a href='22.bulletin_add_form.php'>新增佈告</a>]<br>";

        // 建立資料庫連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 執行 SQL 查詢，從 bulletin 表中取得所有佈告資料
        $result = mysqli_query($conn, "SELECT * FROM bulletin");

        // 顯示佈告資料的表格，並列出佈告編號、類別、標題、內容與發佈時間
        echo "<table border='2'><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";

        // 使用 while 迴圈逐筆顯示佈告資料
        while ($row = mysqli_fetch_array($result)) {
            // 提供修改與刪除佈告的連結
            echo "<tr><td>
                    <a href='26.bulletin_edit_form.php?bid={$row["bid"]}'>修改</a> 
                    <a href='28.bulletin_delete.php?bid={$row["bid"]}'>刪除</a>
                  </td><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>";
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"];
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }

        // 關閉表格
        echo "</table>";
    }
?>
