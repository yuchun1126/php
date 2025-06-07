<?php
// 關閉錯誤顯示（正式環境可使用，開發時建議註解這行）
error_reporting(0);

// 啟動 session，確認使用者是否已登入
session_start();

// 如果 session 中沒有 id，表示尚未登入
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    // 3 秒後跳轉到登入頁面
    echo "<meta http-equiv='refresh' content='3; url=2.login.html'>";
} else {
    // 使用者已登入，可以進行新增使用者的操作

    // 建立與 MySQL 資料庫的連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 檢查資料庫連線是否成功
    if (!$conn) {
        die("資料庫連線失敗：" . mysqli_connect_error());
    }

    // 從 POST 表單取得使用者輸入的帳號與密碼
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];

    // 建立 SQL 新增語法
    $sql = "INSERT INTO user(id, pwd) VALUES('$id', '$pwd')";

    // 執行 SQL 命令，新增使用者資料
    if (!mysqli_query($conn, $sql)) {
        echo "新增命令錯誤";
    } else {
        echo "新增使用者成功，三秒鐘後回到網頁";
        echo "<meta http-equiv='refresh' content='3; url=18.user.php'>";
    }
}
?>
