<html>
<head>
    <title>修改使用者</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
    error_reporting(0); // 關閉錯誤顯示（開發中請註解這行）
    session_start(); // 啟用 session

    // 檢查是否登入
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv='refresh' content='3; url=2.login.html'>";
    } else {
        // 已登入，從資料庫取出指定 ID 的使用者資料
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 取得 id 參數，注意：這邊尚未防注入
        $id = $_GET['id'];

        // 執行查詢，找出該 id 的使用者
        $result = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
        $row = mysqli_fetch_array($result);

        // 顯示表單，帶入目前的帳號與密碼
        echo "
        <form method='post' action='20.user_edit.php'>
            <input type='hidden' name='id' value='{$row['id']}'>
            帳號：{$row['id']}<br> 
            密碼：<input type='text' name='pwd' value='{$row['pwd']}'><p></p>
            <input type='submit' value='修改'>
        </form>
        ";
    }
?>
</body>
</html>
