<?php
    // 啟用 session 功能（一定要放在最上面）
    session_start();

    // 檢查是否已經有設定 counter，如果沒有就設為 1
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"] = 1;
    else
        // 如果已經有 counter，就累加 1
        $_SESSION["counter"]++;

    // 顯示目前的計數器數值
    echo "counter = " . $_SESSION["counter"];

    // 提供一個連結可以重置計數器（導向另一個 PHP 檔案）
    echo "<br><a href='9.reset_counter.php'>重置 counter</a>";
?>
