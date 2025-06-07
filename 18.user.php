<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>使用者管理</title>
</head>
<body>
<?php
    error_reporting(0); // 關閉錯誤訊息顯示（開發中建議開啟）
    session_start(); // 啟用 session 管理

    // 若未登入，提示並跳轉回登入頁
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv='refresh' content='3; url=2.login.html'>";
    } else {
        // 使用者已登入，顯示管理頁面
        echo "<h1>使用者管理</h1>
              [<a href='14.user_add_form.php'>新增使用者</a>] 
              [<a href='11.bulletin.php'>回佈告欄列表</a>]<br><br>
              <table border='1'>
              <tr>
                <th>操作</th>
                <th>帳號</th>
                <th>密碼</th>
              </tr>";

        // 連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 查詢所有使用者資料
        $result = mysqli_query($conn, "SELECT * FROM user");

        // 用迴圈逐筆印出資料列
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>
                    <td>
                        <a href='19.user_edit_form.php?id={$row['id']}'>修改</a> ||
                        <a href='17.user_delete.php?id={$row['id']}'>刪除</a>
                    </td>
                    <td>{$row['id']}</td>
                    <td>{$row['pwd']}</td>
                  </tr>";
        }

        echo "</table>";
    }
?>
</body>
</html>
