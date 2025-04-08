<?php
    // 啟動 session 功能
    session_start();

    // 清除 session 中的 id 變數，達到登出的效果
    unset($_SESSION["id"]);

    // 顯示登出成功訊息
    echo "登出成功....";

    // 3 秒鐘後自動跳轉回登入頁面
    echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
?>
