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
$user_id = @$_GET["user_id"];
$test_company_id = @$_GET["company_id"];
?>

<body>
    <div id="wrap">

        <div id="header">
            <div id="LogoBox">
                <a href="https://www.pccu.edu.tw/"><img src="../../image/skyLogo.png" /></a>
                <span style="border-left: solid 1px; padding-left: 10px ; font-size: 42px">實習平台</span>
            </div>


            <div id="UserBox">
                <p>您好 XXX</p> <span>登出</span>
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
                        <li><a href="<?php echo "student_method.php?user_id=" . $user_id ?>">申請辦法</a></li>
                        <li><a href="<?php echo "student_resume.php?user_id=" . $user_id ?>">履歷維護</a></li>
                        <li><a href="<?php echo "student_apply.php?user_id=" . $user_id ?>">實習應徵</a></li>
                        <li><a href="<?php echo "student_report.php?user_id=" . $user_id ?>">繳交實習報告</a></li>
                        <li><a href="<?php echo "student_response.php?user_id=" . $user_id ?>">學生意見反應</a></li>
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
        <?php 
        $sql = "SELECT `company_id`, `company_name`, `company_username`, `company_password`, `company_number`, `company_email`, `company_money`, `company_time`, `company_place`, `company_content`, `company_ work_experience`, `company_type`, `company_Education`, `company_ department`, `company_other`, `company_safe`, `level` FROM `company` where `company_id` = '".$test_company_id."' ";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $stmt->bind_result($company_id, $company_name, $company_username, $company_password, $company_number, $company_email, $company_money, $company_time, $company_place, $company_content, $company_work_experience, $company_type, $company_Education, $company_department, $company_other, $company_safe, $level);
        while($stmt->fetch()){
        
        
        ?>
        <div id="content" style="background-color: #ddd">
            <div class="job_Navigationbar"></div>
            <h1>徵才標題</h1>
            <div id="job_Content">
                <div class="job-description" style="text-align: center; font-size: 40px;"><?echo $company_name?>
                </div>

                <div class="job-description">工作內容
                    <li style="margin-top: 5px;"><?echo $company_content?></li>
                </div>

                <div class="job-description">工作資訊
                    <li>
                        <img src="../../image/clock.svg"></img>
                        <p>上班時段：</p><span style="color: #007cff"><?echo $company_time?></span>
                    </li>
                    <li>
                        <img src="../../image/coin.svg"></img>
                        <p>工作待遇：</p><span style="color: #8b00ff"><?echo $company_money?></span>
                    </li>
                    <li>
                        <img src="../../image/briefcase.svg"></img>
                        <p>職務類別：</p><span><?echo $company_type?></span>
                    </li>
                    <li>
                        <img src="../../image/geo-alt.svg"></img>
                        <p>上班地點：</p><span><? echo $company_place?></span>
                    </li>
                </div>

                <div class="job-description">要求條件
                    <!-- <br> -->
                    <li>
                        <p>工作經驗：</p><span><? echo $company_work_experience?></span>
                    </li>
                    <li>
                        <p>學歷限制：</p><span><? echo $company_Education?></span>
                    </li>
                    <li>
                        <p>科系限制：</p><span><? echo $company_department?></span>
                    </li>
                </div>

                <div class="job-description">公司福利
                    <li>員工保險：<span><? echo $company_safe?></span></li>
                </div>
            </div>
            <div class="bottom_row">
                <a class="btn" href="student_email_controll.phpe?company_id=<?=$company_id?>&user_id=<?=$user_id?>">我要應徵</a>
            </div>


        </div>
        <? } ?>

        <!-- 工作內容
                1.協助編寫 design flow script / IC tape-out QC flow script。
                2.了解整個IC design及tape-out 的流程。

                職務類別
                電子工程師、半導體工程師

                工作待遇
                待遇面議（經常性薪資達 4 萬元或以上）

                工作性質
                全職

                上班地點
                新竹市東區力行路9號 (新竹科學園區)

                管理責任
                不需負擔管理責任

                出差外派
                無需出差外派

                上班時段
                日班，08:30~17:30

                休假制度
                週休二日

                可上班日
                不限

                需求人數
                1人 -->


    </div> <!-- content -->
    <?php



    ?>
    </div> <!-- wrap -->


    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/index.js"></script>
    <script src="../../bootstrap-5.2.0-beta1-dist//js/bootstrap.min.js"></script>
</body>

</html>