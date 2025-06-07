<?php
    error_reporting(0); // 隱藏錯誤訊息（開發時建議註解掉這行）
    session_start(); // 開啟 Session

    if (!$_SESSION["id"]) {
        // 若尚未登入，顯示訊息並導回登入頁面
        echo "請登入帳號";
        echo "<meta http-equiv='refresh' content='3; url=2.login.html'>";
    } else {
        // 已登入，連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 從網址取得要刪除的使用者 ID
        $id = $_GET["id"];

        // 建立刪除 SQL 語法（⚠️ 不安全，容易被注入）
        $sql = "DELETE FROM user WHERE id='$id'";

        // 執行刪除
        if (!mysqli_query($conn, $sql)) {
            echo "使用者刪除錯誤";
        } else {
            echo "使用者刪除成功";
        }

        // 3 秒後導回使用者清單頁
        echo "<meta http-equiv='refresh' content='3; url=18.user.php'>";
    }
?>
