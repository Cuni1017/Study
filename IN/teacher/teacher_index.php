<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <!--網頁利用UTF-8編碼方式 才能顯示中文-->
    <meta name="description" content="文化大學企業實習媒合網站" />
    <!--讓搜尋引擎更了解這個網站的內容-->
    <meta name="author" content="Cuni" />
    <meta name="keywords" content="專題,企業實習,測試" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--width=device-width 根據瀏覽的裝置大小做畫面調整,initial-scale=1.0 初始縮放比為100%-->
    <link rel="stylesheet" href="../../style/css/style.css">
    <link rel="stylesheet" href="../../style/css/teacher.css">
    <title>文化大學企業實習媒合網站</title>
</head>

<body>
    <div id="wrap">

        <div id="header">
            <div id="LogoBox">
                <a href="https://www.pccu.edu.tw/"><img src="../../image/skyLogo.png" /></a>
                <span>實習平台</span>
            </div>

            <div id="UserBox">
                <a href="login.php" class="button btnGray">
                    Login
                </a>
                <a href="register_select.php" class="button btnGray">
                    Sign Up
                </a>
            </div>
        </div>

        <div id="mainNav">
            <div id="mainNavTop">
                <ul>
                    <li>
                        <a class="TCHctrl" href="#TCH">
                            <img src="../../image/教師3.jpg" />
                            <span>教師管理</span>
                        </a>
                    </li>
                    <li>
                        <a class="USctrl" href="#US">
                            <img src="../../image/關於我們.png" />
                            <span>關於我們</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="mainNavCon">
                <div class="TCH">
                    <ul id="TCH">
                        <li><a href="<?php echo "student_method.php?user_id=" . $user_id ?>">實習需知公告</a></li>
                        <li><a href="<?php echo "student_resume.php?user_id=" . $user_id ?>">實習配對管理</a></li>
                        <li><a href="<?php echo "student_apply.php?user_id=" . $user_id ?>">實習職務列表</a></li>
                    </ul>
                </div>

                <!-- US -->
                <div class="US">
                    <ul id="US">
                        <li><a href="#US01">關於我們</a></li>
                        <li><a href="#US02">參考資料</a></li>
                    </ul>
                </div>
            </div> <!-- manNavCon -->

        </div> <!-- mainNav -->

        <div id="content">
            <h1>最新消息</h1>

        </div> <!-- content -->
    </div> <!-- wrap -->


    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/index.js"></script>
</body>

</html>