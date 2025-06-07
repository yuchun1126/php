<?php
    error_reporting(0); // 關閉錯誤訊息顯示（正式上線建議關掉，但開發時可顯示）
    session_start();    // 啟用 session

    // 檢查是否登入
    if (!$_SESSION["id"]) {
        echo "請先登入帳號";
        echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>"; // 3 秒後自動跳轉到登入頁
    }
    else {
        // 顯示新增佈告表單
        echo "
        <html>
        <head>
            <meta charset='UTF-8'>
            <title>新增佈告</title>
        </head>
        <body>
            <h2>新增佈告</h2>
            <form method='post' action='23.bulletin_add.php'>
                標　　題：<input type='text' name='title'><br><br>

                內　　容：<br>
                <textarea name='content' rows='10' cols='50'></textarea><br><br>

                佈告類型：
                <input type='radio' name='type' value='1'>系上公告 
                <input type='radio' name='type' value='2'>獲獎資訊
                <input type='radio' name='type' value='3'>徵才資訊<br><br>

                發布時間：<input type='date' name='time'><br><br>

                <input type='submit' value='新增佈告'> 
                <input type='reset' value='清除'>
            </form>

            <br><a href='11.bulletin.php'>回佈告欄列表</a>
        </body>
        </html>
        ";
    }
?>
