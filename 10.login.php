<?php
    // 建立資料庫連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 檢查連線是否成功
    if (!$conn) {
        die("資料庫連線失敗：" . mysqli_connect_error());
    }

    // 從 user 資料表查詢所有資料
    $result = mysqli_query($conn, "SELECT * FROM user");

    // 初始化登入狀態為 false
    $login = FALSE;

    // 使用 while 迴圈逐筆檢查資料庫中的帳號密碼
    while ($row = mysqli_fetch_array($result)) {
        // 如果輸入的帳號與密碼正確，設定登入成功
        if ($_POST["id"] == $row["id"] && $_POST["pwd"] == $row["pwd"]) {
            $login = TRUE;
        }
    }

    // 如果登入成功，開始 session 並設定 session 變數
    if ($login == TRUE) {
        session_start();
        $_SESSION["id"] = $_POST["id"];  // 記錄使用者的帳號
        echo "登入成功";
        // 3 秒後跳轉到 bulletin.php
        echo "<meta http-equiv='REFRESH' content='3; url=11.bulletin.php'>";
    }
    // 如果登入失敗，顯示錯誤訊息並返回登入頁面
    else {
        echo "帳號/密碼 錯誤";
        // 3 秒後跳轉回登入頁面
        echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
    }
?>
