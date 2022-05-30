<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../style/css/style.css">
    <link rel="stylesheet" href="../../style/css/student.css">
</head>

<body>
    <?php
    require_once "user_connect.php";
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
                <a href="../../login.php">登出</a>
            </div>
        </div>
        <div id="mainNav">
            <div id="mainNavTop">
                <ul>
                    <li>
                        <img src="../../image/畢業帽帽.png" style="top: 55px; width: 50px" />
                        <span>學生實習入口</span>
                    </li>
                    <li>
                        <img src="../../image/關於我們.png" style="width: 50px" />
                        <span>關於我們</span>
                    </li>
                </ul>
            </div>
            <div id="mainNavCon">
                <!-- STU -->
                <div class="STU">
                    <ul>
                        <li><a href="<?php echo "student_method.php?user_id=" . $user_id ?>">申請辦法</a></li>
                        <li><a href="<?php echo "student_resume.php?user_id=" . $user_id ?>">履歷維護</a></li>
                        <li><a href="<?php echo "student_apply.php?user_id=" . $user_id ?>">實習應徵</a></li>
                        <li><a href="<?php echo "student_pair.php?user_id=" . $user_id ?>">實習配對填寫</a></li>
                        <li><a href="<?php echo "student_report.php?user_id=" . $user_id ?>">繳交實習報告</a></li>
                        <li><a href="<?php echo "student_response.php?user_id=" . $user_id ?>">學生意見反應</a></li>
                        <li><a href="<?php echo "student_reflection.php?user_id=" . $user_id ?>">瀏覽實習心得</a></li>
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