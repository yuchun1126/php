<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>新增使用者</title> <!-- 頁面標題 -->
</head>
<body>
<?php        
    session_start(); // 啟用 session 機制，讓伺服器可以記住使用者登入狀態

    // 檢查是否有登入 (session 中是否有 id)
    if (!isset($_SESSION["id"])) {
        // 如果沒有登入，顯示提示訊息
        echo "請登入帳號";
        
        // 使用 meta 標籤在 3 秒後自動跳轉到登入頁面
        echo "<meta http-equiv='refresh' content='3; url=2.login.html'>";
    } else {    
        // 如果已登入，顯示新增使用者表單
        echo '
            <form action="15.user_add.php" method="post">
                <!-- 輸入帳號 -->
                帳號：<input type="text" name="id"><br>

                <!-- 輸入密碼（使用 password 類型，隱藏文字） -->
                密碼：<input type="password" name="pwd"><p></p>

                <!-- 提交與清除按鈕 -->
                <input type="submit" value="新增"> 
                <input type="reset" value="清除">
            </form>
        ';
    }
?>
</body>
</html>
