<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style/css/index.css">
    <?php include 'header.php'; ?>
</head>
<?php require_once "user_connect.php";
$sql = "SELECT `company_id`, `company_name`, `company_username`, `company_password`, `company_number`, `company_email`, `company_money`, `company_time`, `company_place`, `company_content`, `company_work_experience`, `company_type`, `company_Education`, `company_department`, `company_other`, `company_safe`, `level` FROM `company` Limit  10";
$stmt = $con->prepare($sql);
$stmt->execute();
$num = $stmt->bind_result($company_id, $company_name, $company_username, $company_password, $company_number, $company_email, $company_money, $company_time, $company_place, $company_content, $company_work_experience, $company_type, $company_Education, $company_department, $company_other, $company_safe, $level);

?>

<body>
    <div id="wrap">
        <div id="header">
            <div id="LogoBox">
                <a href="https://www.pccu.edu.tw/"><img src="image/skyLogo.png" /></a>
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
                        <img src="image/畢業帽帽.png" />
                        <span>學生實習入口</span>
                    </li>
                    <li>
                        <img src="image/廠商.png" />
                        <span>廠商實習管理</span>
                    </li>
                    <li>
                        <img src="image/教師3.jpg" />
                        <span>教師管理</span>
                    </li>
                    <li>
                        <img src="image/關於我們.png" />
                        <span>關於我們</span>
                    </li>
                </ul>
            </div>
        </div> <!-- mainNav -->

        <div id="mainNavCon">
            <!-- STU -->
            <div class="STU">
                <ul>
                    <li><a href="login.php">申請辦法</a></li>
                    <li><a href="login.php">履歷維護</a></li>
                    <li><a href="login.php">實習應徵</a></li>
                    <li><a href="login.php">實習配對填寫</a></li>
                    <li><a href="login.php">繳交實習報告</a></li>
                    <li><a href="login.php">學生意見反應</a></li>
                    <li><a href="login.php">瀏覽實習心得</a></li>
                </ul>
            </div>
            <!-- CPN -->
            <div class="CPN">
                <ul>
                    <li><a href="login.php">申請辦法</a></li>
                    <li><a href="login.php">刊登徵才</a></li>
                    <li><a href="login.php">實習評論</a></li>
                    <li><a href="login.php">學生意見反應</a></li>
                </ul>
            </div>
            <!-- TCH -->
            <div class="TCH">
                <ul>
                    <li><a href="login.php">實習資訊公告</a></li>
                    <li><a href="login.php">學生實習配對</a></li>
                    <li><a href="login.php">實習職務列表</a></li>
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

        <div id="content">
            <h1>最新徵才消息</h1>
            <div class="news">
                <?php while ($stmt->fetch()) { ?>
                    <div class="newscont">
                        <div class="news_img">
                            <img style="max-width: 500px;" src="image/content2.jpg"></img>
                        </div>
                        <div class="news_t">
                            <h5><?php echo $company_name ?></h5>
                            <p></p>
                        </div>
                        <a href="login.php"><img src="image/info-circle.svg" class="moreInfobtn"></a>
                    </div>
                <?php } ?>
            </div>
        </div> <!-- content -->
    </div> <!-- wrap -->
    <!-- <div class="跑馬燈">
        <marquee>
            <img src="image/cowba.jpg" height="300px">
            <img src="image/PogU.jpg" height="300px">
        </marquee>
        </div> -->
    <script src="js/index.js"></script>
</body>

</html>