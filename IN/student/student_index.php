<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <!--網頁利用UTF-8編碼方式 才能顯示中文-->
    <!--<meta charset="UTF-8"></meta> 因為meta中間無內容,</meta>可省略-->
    <meta name="description" content="文化大學企業實習媒合網站" />
    <!--讓搜尋引擎更了解這個網站的內容-->
    <meta name="author" content="Cuni,Mikeliu" />
    <meta name="keywords" content="專題,企業實習,測試" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--width=device-width 根據瀏覽的裝置大小做畫面調整,initial-scale=1.0 初始縮放比為100%-->
    <!-- <link rel="stylesheet" href="style/index.css"> -->
    <title>文化大學企業實習媒合網站</title>
    <link rel="stylesheet" href="../../style/css/style.css">
    <link rel="stylesheet" href="../../style/css/student.css">
</head>

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
                        <li><a href="student_method.php">申請辦法</a></li>
                        <li><a href="student_resume.php">履歷維護</a></li>
                        <li><a href="student_apply.php">實習應徵</a></li>
                        <li><a href="student_report.php">繳交實習報告</a></li>
                        <li><a href="student_response.php">學生意見反應</a></li>
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
            <h1>最新消息</h1>
            <ul id="grid">
                <li>
                    <div class="newscont">
                        <a href="https://reurl.cc/rD6VEb">
                            <div class="news_img">
                                <img style="width: 500px;" src="../../image/content1.jpg" /></img>
                            </div>
                            <div class="news_t">
                                <p>實習的七大好處</p>
                            </div>
                            <div class="moreINFO">
                                <!-- <div class="moreINFO_btn">➤</div>
                                <div class="INFO">
                                    <p>moreINFOmoreINFOmoreINFOmoreINFOmoreINFOmoreINFOmoreINFOmoreINFOmoreINFOmoreINFOmoreINFOmoreINFOmoreINFOmoreINFOmoreINFO</p>
                                </div> -->
                            </div>
                        </a>
                    </div>
                </li>

                <li>
                    <div class="newscont">
                        <a href="https://www.facebook.com/AIESECGlobalTalent.Taiwan/">
                            <div class="news_img">
                                <img style="width: 500px;" src="../../image/content2.jpg"></img>
                            </div>
                            <div class="news_t">
                                <p>Global Talent 海外實習</p>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
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


    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/index.js"></script>
</body>

</html>