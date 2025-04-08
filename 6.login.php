<?php
    // 建立資料庫連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 檢查連線是否成功
    if (!$conn) {
        die("資料庫連線失敗：" . mysqli_connect_error());
    }

    // 查詢 user 資料表中的所有帳號與密碼
    $result = mysqli_query($conn, "SELECT * FROM user");

    // 檢查查詢是否成功
    if (!$result) {
        die("查詢失敗：" . mysqli_error($conn));
    }

    // 初始化登入狀態為 false
    $login = FALSE;

    // 一筆一筆檢查資料庫中的帳號密碼是否與使用者輸入相符
    while ($row = mysqli_fetch_array($result)) {
        if ($_POST["id"] == $row["id"] && $_POST["pwd"] == $row["pwd"]) {
            $login = TRUE;
            break; // 找到後就不用再比對後面的資料
        }
    }

    // 判斷是否登入成功
    if ($login)
        echo "登入成功";
    else
        echo "帳號/密碼 錯誤";

    // 關閉資料庫連線
    mysqli_close($conn);
?>
