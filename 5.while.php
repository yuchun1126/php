<?php
    // 建立資料庫連線（host, username, password, database）
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 檢查連線是否成功
    if (!$conn) {
        die("資料庫連線失敗：" . mysqli_connect_error());
    }

    // 執行 SQL 查詢：從 user 資料表選出所有欄位
    $result = mysqli_query($conn, "SELECT * FROM user");

    // 檢查查詢是否成功
    if (!$result) {
        die("查詢失敗：" . mysqli_error($conn));
    }

    // 使用 while 迴圈，一筆一筆讀取查詢結果
    while ($row = mysqli_fetch_array($result)) {
        // 顯示每一筆資料的帳號與密碼（僅限測試使用）
        echo $row["id"] . " " . $row["pwd"] . "<br>";
    }

    // 關閉資料庫連線
    mysqli_close($conn);
?>
