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
    <link rel="stylesheet" href="style/css/index.css">
    <link rel="stylesheet" href="style/css/style.css">
    <title>文化大學企業實習媒合網站</title>
</head>
<?php require_once "user_connect.php";
$sql = "SELECT `company_id`, `company_name`, `company_username`, `company_password`, `company_number`, `company_email`, `company_money`, `company_time`, `company_place`, `company_content`, `company_ work_experience`, `company_type`, `company_Education`, `company_ department`, `company_other`, `company_safe`, `level` FROM `company` Limit  10";
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
                        <a class="STUctrl" href="login.php">
                            <img src="image/畢業帽帽.png" />
                            <span>學生實習入口</span>
                        </a>
                    </li>
                    <li>
                        <a class="CPNctrl" href="login.php">
                            <img src="image/廠商.png" />
                            <span>廠商實習管理</span>
                        </a>
                    </li>
                    <li>
                        <a class="TCHctrl" href="login.php">
                            <img src="image/教師3.jpg" />
                            <span>教師管理</span>
                        </a>
                    </li>
                    <li>
                        <a class="USctrl" href="login.php">
                            <img src="image/關於我們.png" />
                            <span>關於我們</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- <div class="STU">
                <div id="STU01" class="STU-inner">
                    <p>STU01的內容</p>
                </div>
                <div id="STU02" class="STU-inner">
                    <p>STU02的內容</p>
                </div>
                <div id="STU03" class="STU-inner">
                    <p>STU03的內容</p>
                </div>
                <div id="STU04" class="STU-inner">
                    <p>STU04的內容</p>
                </div>
                <div id="STU05" class="STU-inner">
                    <p>STU05的內容</p>
                </div>
            </div> -->

            <!-- <div class="CPN">
                <div id="CPN01" class="CPN-inner">
                    <p>CPN01的內容</p>
                </div>
                <div id="CPN02" class="CPN-inner">
                    <p>CPN02的內容</p>
                </div>
                <div id="CPN03" class="CPN-inner">
                    <p>CPN03的內容</p>
                </div>
                <div id="CPN04" class="CPN-inner">
                    <p>CPN04的內容</p>
                </div>
                <div id="CPN05" class="CPN-inner">
                    <p>CPN05的內容</p>
                </div>
            </div> -->
            <!-- <div class="TCH">
                <div id="TCH01" class="TCH-inner">
                    <p>TCH01的內容</p>
                </div>
                <div id="TCH02" class="TCH-inner">
                    <p>TCH02的內容</p>
                </div>
                <div id="TCH03" class="TCH-inner">
                    <p>TCH03的內容</p>
                </div>
                <div id="TCH04" class="TCH-inner">
                    <p>TCH04的內容</p>
                </div>
                <div id="TCH05" class="TCH-inner">
                    <p>TCH05的內容</p>
                </div>
                <div id="TCH06" class="TCH-inner">
                    <p>TCH06的內容</p>
                </div>
            </div> -->
            <!-- <div class="US">
                <div id="US01" class="US-inner">
                    <p>關於我們的內容</p>
                </div>
                <div id="US02" class="US-inner">
                    <p>參考資料的內容</p>
                </div>
            </div> -->
        </div> <!-- mainNav -->

        <div id="content">
            <h1>最新消息</h1>
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
                        <div class="moreINFO_btn">更多資訊</div>
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
    <!-- <div class="用戶端">
            <h3 style="text-align:center;">學生</h3>
            <div class="button">
            <a href = "">上傳實習報告</a>
            </div>
            <div class="button">
            <a href = "">編輯自傳</a>
            </div>
            <div class="button">
            <a href = "">查看徵才公司資訊 </a>
            </div>
            <div class="button">
            <a href = "">下載實習資訊 </a>
            </div>
        </div> -->
    <!--     
        <div class="用戶端">
            <h3 style="text-align:center;">企業</h3>
            <div class="button">
            <a href = "">上傳公司徵才資訊</a>
            </div>
            <div class="button">
            <a href = "">上傳公司作品集</a>
            </div>
            <div class="button">
            <a href = "">獲取履歷 </a>
            </div>
        </div>

        <div class="用戶端">
            <h3 style="text-align:center;">教授、學長</h3>
            <div class="button">
            <a href = "">公告實習須知事項</a>
            </div>
            <div class="button">
            <a href = "">上傳實習心得</a>
            </div>
        </div> -->


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>