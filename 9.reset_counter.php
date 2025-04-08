<?php
    // 啟動 session 功能
    session_start();

    // 清除 counter 變數（不刪除整個 session，只刪這一項）
    unset($_SESSION["counter"]);

    // 顯示重置成功訊息
    echo "counter 重置成功....";

    // 使用 meta 標籤在 2 秒後重新導向回 8.counter.php
    echo "<meta http-equiv='REFRESH' content='2; url=8.counter.php'>";
?>
