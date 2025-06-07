<?php
    error_reporting(0); // 關閉錯誤顯示
    session_start(); // 啟用 Session

    if (!$_SESSION["id"]) {
        // 尚未登入
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {
        // 已登入
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 執行 SQL 更新使用者密碼（未加密，存在 SQL 注入風險）
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")) {
            echo "修改錯誤";
        } else {
            echo "修改成功，三秒鐘後回到網頁";
        }

        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
