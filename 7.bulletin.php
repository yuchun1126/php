<?php
    // 關閉錯誤訊息顯示（在正式環境建議開發階段打開）
    error_reporting(0);

    // 建立資料庫連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 檢查連線是否成功
    if (!$conn) {
        die("資料庫連線失敗：" . mysqli_connect_error());
    }

    // 執行 SQL 查詢從 bulletin 表撈取所有資料
    $result = mysqli_query($conn, "SELECT * FROM bulletin");

    // 開始輸出 HTML 表格，設定邊框為 2
    echo "<table border='2'>";
    echo "<tr>
            <td>佈告編號</td>
            <td>佈告類別</td>
            <td>標題</td>
            <td>佈告內容</td>
            <td>發佈時間</td>
          </tr>";

    // 使用 while 迴圈逐筆取出資料
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["bid"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["type"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["title"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["content"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["time"]) . "</td>";
        echo "</tr>";
    }

    // 結束表格
    echo "</table>";

    // 關閉資料庫連線
    mysqli_close($conn);
?>
