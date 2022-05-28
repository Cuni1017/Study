<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
</head>
<?php require_once "user_connect.php";
$user_id = @$_GET["user_id"];
$company_id = @$_GET["company_id"];
?>

<body>
    <div id="wrap">
        <div id="content" style="background-color: #ddd">
            <div class="job_Navigationbar"></div>
            <h1>徵才標題</h1>
            <div id="job_Content">
                <div class="job-description" style="text-align: center; font-size: 40px;">公司名稱
                </div>

                <div class="job-description">工作內容
                    <li style="margin-top: 5px;">123...</li>
                </div>

                <div class="job-description">工作資訊
                    <li>
                        <img src="../../image/clock.svg"></img>
                        <p>上班時段：</p><span style="color: #007cff">時段</span>
                    </li>
                    <li>
                        <img src="../../image/coin.svg"></img>
                        <p>工作待遇：</p><span style="color: #8b00ff">2000</span>
                    </li>
                    <li>
                        <img src="../../image/briefcase.svg"></img>
                        <p>職務類別：</p><span></span>
                    </li>
                    <li>
                        <img src="../../image/geo-alt.svg"></img>
                        <p>上班地點：</p><span></span>
                    </li>
                </div>

                <div class="job-description">要求條件
                    <!-- <br> -->
                    <li>
                        <p>工作經驗：</p><span></span>
                    </li>
                    <li>
                        <p>學歷限制：</p><span></span>
                    </li>
                    <li>
                        <p>科系限制：</p><span></span>
                    </li>
                </div>

                <div class="job-description">公司福利
                    <li>
                        <p>員工保險：</p>
                    </li>
                </div>
                <div class="job-description">補充說明
                    <li style="margin-top: 5px;">123...</li>
                </div>
                <div class="bottom_row">
                    <a class="btn" href="student_email_controll.php">我要應徵</a>
                </div>
            </div>
        </div> <!-- content -->
    </div> <!-- wrap -->


    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/index.js"></script>
    <script src="../../bootstrap-5.2.0-beta1-dist//js/bootstrap.min.js"></script>
</body>

</html>