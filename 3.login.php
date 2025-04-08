<?php 
    // 檢查是否是透過 POST 方法提交的表單
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // 取得使用者輸入的帳號和密碼
        $id = $_POST["id"];
        $pwd = $_POST["pwd"];

        // 檢查帳號與密碼是否正確
        if ($id == "john" && $pwd == "john1234") {
            echo "登入成功";
        } else {
            echo "登入失敗";
        }
    }
?>
