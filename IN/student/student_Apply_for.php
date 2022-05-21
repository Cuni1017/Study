<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8" />
    <!--網頁利用UTF-8編碼方式 才能顯示中文-->
    <!--<meta charset="UTF-8"></meta> 因為meta中間無內容,</meta>可省略-->
    <meta name="description" content="文化大學企業實習媒合網站" />
    <!--讓搜尋引擎更了解這個網站的內容-->
    <meta name="author" content="Cuni" />
    <meta name="keywords" content="專題,企業實習,測試" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--width=device-width 根據瀏覽的裝置大小做畫面調整,initial-scale=1.0 初始縮放比為100%-->
    <title>文化大學企業實習媒合網站</title>
    <link rel="stylesheet" href="../../style/css/style.css">
    <link rel="stylesheet" href="../../style/css/student.css">
</head>
<?php require_once "user_connect.php";
$user_id= @$_GET["user_id"];
$company_id= @$_GET["company_id"];
?>
<body>
    <div id="wrap">

        <div id="header">
            <div id="LogoBox">
                <a href="https://www.pccu.edu.tw/"><img src="../../image/skyLogo.png" /></a>
                <span style="border-left: solid 1px; padding-left: 10px ; font-size: 42px">實習平台</span>
            </div>


            <div id="UserBox">
                <p>您好 XXX</p>
            </div>

        </div>

        <div id="mainNav">
            <div id="mainNavTop">
                <ul>
                    <li class="">
                        <a class="STUctrl" href="#STU">
                            <img src="../../image/畢業帽帽.png" style="top: 55px; width: 50px" />
                            <span>學生實習入口</span>
                        </a>
                    </li>
                    <li>
                        <a class="USctrl" href="#US">
                            <img src="../../image/關於我們.png" style="width: 50px" />
                            <span>關於我們</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div id="mainNavCon">
                <!-- STU -->
                <div class="STU">
                    <ul id="STU">
                        <li><a href="<?php echo "student_method.php?user_id=".$user_id ?>">申請辦法</a></li>
                        <li><a href="<?php echo "student_resume.php?user_id=".$user_id ?>">履歷維護</a></li>
                        <li><a href="<?php echo "student_apply.php?user_id=".$user_id ?>">實習應徵</a></li>
                        <li><a href="<?php echo "student_report.php?user_id=".$user_id ?>">繳交實習報告</a></li>
                        <li><a href="<?php echo "student_response.php?user_id=".$user_id ?>">學生意見反應</a></li>
                    </ul>
                </div>

                <!-- US -->
                <div class="US">
                    <ul id="US">
                        <li><a href="#US01">關於我們</a></li>
                        <li><a href="#US02">參考資料</a></li>
                    </ul>

                </div>
            </div> <!-- mainNavCon -->
        </div> <!-- mainNav  -->

        <div id="content">
            <h1>實習應徵方法</h1>
            <div class="text"></div>

        </div> <!-- content -->
        <?php
        
        

        ?>
    </div> <!-- wrap -->


    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/index.js"></script>
</body>

</html>