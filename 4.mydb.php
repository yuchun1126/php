<?php
    // 使用 mysqli_connect() 建立與資料庫的連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 檢查連線是否成功
    if (!$conn) {
        die("資料庫連線失敗：" . mysqli_connect_error());
    }

    // 使用 mysqli_query() 執行 SQL 查詢語法：從 user 資料表撈出所有資料
    $result = mysqli_query($conn, "SELECT * FROM user");

    // 使用 mysqli_fetch_array() 取得查詢結果中的第一筆資料
    $row = mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"] . "<br>";

    // 取得第二筆資料
    $row = mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];

    // 關閉資料庫連線
    mysqli_close($conn);
?>
