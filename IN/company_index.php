<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../style/css/style.css">
    <!-- <link rel="stylesheet" href="../../style/css/company.css"> -->
    <link rel="shortcut icon" href="#">
</head>

<body>
    <?php
    require_once "../user_connect.php";
    $user_id = @$_GET["user_id"];
    ?>
    <div id="wrap">
        <div id="header">
            <div id="LogoBox">
                <a href="https://www.pccu.edu.tw/"><img src="../../image/skyLogo.png" /></a>
                <span style="border-left: solid 1px; padding-left: 10px ; font-size: 42px">實習平台</span>
            </div>
            <div id="UserBox">
                <p>您好 XXX</p>
                <a href="#">登出</a>
            </div>
        </div>
        <div id="mainNav">
            <div id="mainNavTop">
                <ul>
                    <li>
                        <img src="../../image/廠商.png" />
                        <span>廠商實習管理</span>
                    </li>
                    <li>
                        <img src="../../image/關於我們.png" style="width: 50px" />
                        <span>關於我們</span>
                    </li>
                </ul>
            </div>
            <div id="mainNavCon">
                <!-- CPN -->
                <div class="CPN">
                    <ul>
                        <li><a href="<?php echo "company_method.php?user_id=" . $user_id ?>">申請辦法</a></li>
                        <li><a href="<?php echo "company_recruit.php?user_id=" . $user_id ?>">刊登徵才</a></li>
                        <li><a href="<?php echo "company_comment.php?user_id=" . $user_id ?>">實習評論</a></li>
                        <li><a href="<?php echo "company_response.php?user_id=" . $user_id ?>">學生意見反應</a></li>
                    </ul>
                </div>
                <!-- US -->
                <div class="US">
                    <ul>
                        <li><a href="#US01">關於我們</a></li>
                        <li><a href="#US02">參考資料</a></li>
                    </ul>
                </div>
            </div> <!-- mainNavCon -->
        </div> <!-- mainNav  -->
    </div> <!-- wrap -->
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/index.js"></script>
</body>

</html>