<!-- HTML 文件開始 -->
<html>
    <head>
        <title>明新科技大學資訊管理系</title>
        <meta charset="utf-8">

        <!-- 引入 FlexSlider 的 CSS 和 JavaScript -->
        <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
        <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>

        <script>
            // 初始化 FlexSlider 輪播圖
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    rtl: true
                });
            });
        </script>

        <style>
            /* 全站字體顏色與對齊方式 */
            * {
                margin: 0;
                color: gray;
                text-align: center;
            }

            /* 頁面頂部區域 */
            .top {
                background-color: white;
            }
            .top .container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px;
            }
            .top .logo {
                font-size: 35px;
                font-weight: bold;
            }
            .top .logo img {
                width: 100px;
                vertical-align: middle;
            }
            .top .top-nav {
                font-size: 25px;
                font-weight: bold;
            }
            .top .top-nav a {
                text-decoration: none;
            }

            /* 導覽列樣式 */
            .nav {
                background-color: #333;
                display: flex;
                justify-content: center;
            }
            .nav ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }
            .nav li {
                float: left;
            }
            .nav li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            .nav li a:hover {
                background-color: #111;
            }

            /* 下拉選單樣式 */
            .dropdown:hover .dropdown-content {
                display: block;
            }
            li.dropdown:hover {
                background-color: #333;
            }
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #333;
                min-width: 160px;
                z-index: 1;
            }
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            /* 輪播圖背景 */
            .slider {
                background-color: black;
            }

            /* 橫幅區域 */
            .banner {
                background-image: linear-gradient(#ABDCFF, #0396FF);
                padding: 30px;
            }
            .banner h1 {
                padding: 20px;
            }

            /* 師資介紹區域 */
            .faculty {
                display: block;
                justify-content: center;
                background-color: white;
                padding: 40px;
            }
            .faculty h2 {
                font-size: 25px;
                color: rgb(50,51,52);
                padding-bottom: 40px;
            }
            .faculty .container {
                display: flex;
                justify-content: space-around;
                align-items: center;
            }
            .faculty .teacher {
                display: block;
                text-decoration: none;
            }
            .faculty .teacher img {
                height: 200px;
                width: 200px;
            }
            .faculty .teacher h3 {
                color: White;
                background-color: rgba(39,40,34,.500);
                text-align: center;
            }

            /* 聯絡資訊區域 */
            .contact {
                display: block;
                justify-content: center;
                margin-top: 30px;
                margin-bottom: 30px;
            }
            .contact h2 {
                color: rgb(54, 82, 110);
                font-size: 25px;
            }
            .contact .infos {
                display: flex;
                margin-top: 30px;
                justify-content: center;
            }
            .contact .infos .left {
                display: block;
                text-align: left;
                margin-right: 30px;
            }
            .contact .infos .left b {
                display: block;
                text-align: left;
                margin-top: 10px;
                text-decoration: bold;
                color: Gray;
                font-size: 18px;
                line-height: 18px;
            }
            .contact .infos .left span {
                display: block;
                text-align: left;
                margin-top: 10px;
                color: rgba(39,40,34,0.5);
                font-size: 16px;
                padding-left: 27px;
            }
            .contact .infos .right {
                height: 200px;
            }
            .contact .infos .right iframe {
                width: 100%;
                height: 100%;
                border: 1px solid rgba(39,40,34,0.50);
            }

            /* 頁尾區塊 */
            .footer {
                display: flex;
                justify-content: center;
                background-color: rgb(25,26,30);
                padding: 30px 0;
            }

            /* 登入視窗樣式 */
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                right: 50px; /* 建議補上 px 單位 */
                top: 50px;
                width: 20%;
                height: 20%;
                overflow: auto;
                background-color: rgba(255,255,255,0.9);
                padding-top: 50px;
            }

            /* 佈告欄樣式 */
            .bulletin {
                display: block;
                justify-content: center;
                background-color: rgb(255,204,153);
                padding: 30px 0;
            }
            .bulletin h1 {
                padding: 10px;
            }
            .bulletin table {
                border-collapse: collapse;
                font-family: 微軟正黑體;
                font-size: 16px;
                border: 1px solid #000;
            }
            .bulletin table th {
                background-color: #abdcff;
                color: #ffffff;
            }
            .bulletin table td {
                background-color: #ffffff;
                color: #0396ff;
            }
        </style>
    </head>

    <body>
        <!-- 頁首包含 LOGO 與登入功能 -->
        <div class="top">
            <div class="container">
                <div class="logo">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                    明新科技大學資訊管理系
                </div>
                <div class="top-nav">
                    <a href=>明新科大</a>
                    <a href=>明新管理學院</a>
                    <!-- 點擊文字顯示登入視窗 -->
                    <label onclick="document.getElementById('login').style.display='block'">登入</label>
                    <div id="login" class="modal">
                        <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                        <form method=post action="10.login.php">
                            帳號：<input type=text name="id"><br />
                            密碼：<input type=password name="pwd"><p></p>
                            <input type=submit value="登入"> <input type=reset value="清除">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- 導覽列 -->
        <div class="nav">
            <ul>
                <li><a href="#home">首頁</a></li>
                <li><a href="#introduction">系所簡介</a></li>
                <li class="dropdown"><a href="#faculty">成員簡介</a>
                    <div class="dropdown-content">
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>
                </li>
                <li><a href="#about">相關資訊</a></li>
            </ul>
        </div>

        <!-- 輪播圖區域 -->
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>

        <!-- 最新佈告區塊 -->
        <div class="bulletin">
            <h1>最新公告</h1>
            <?php
                $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
                $result=mysqli_query($conn, "select * from bulletin");
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    if ($row["type"]==1) echo "系上公告";
                    if ($row["type"]==2) echo "獲獎資訊";
                    if ($row["type"]==3) echo "徵才資訊";
                    echo "</td><td>";
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"];
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>

        <!-- 系所簡介 -->
        <div class="banner" id="introduction">
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>

        <!-- 師資介紹區域 -->
        <div class="faculty" id="faculty">
            <h2>師資介紹</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>
            </div>
        </div>

        <!-- 聯絡資訊區塊 -->
        <div class="contact" id="about">
            <h2>相關資訊</h2>
            <div class="infos">
                <div class="left">
                    <b>明新科技大學管理學院大樓二樓</b>
                    <span>304新竹縣新豐鄉新興路1號</span>
                    <b> 電話:03-5593142</b>
                    <span>分機:3431、3432、3433</span>
                    <b> 傳真:03-5593142</b>
                    <span>分機:3440</span>
                </div>
                <div class="right">
                    <iframe src="https://www.google.com/maps/embed?..." frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- 頁尾 -->
        <div class="footer">
            &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
        </div>
    </body>
</html>
