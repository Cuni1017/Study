<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
</head>
<?php require_once "../user_connect.php";

$user_id = @$_GET["user_id"];
$rel_company_id = @$_GET["company_id"];

function select_me($table = null, $condition = "1", $order_by = "1", $fields = "*", $limit = ""){
    $sql = "SELECT {$fields} FROM {$table} WHERE {$condition} ORDER BY {$order_by} {$limit}";
    echo $sql;
    $stmt = con()->query($sql);
    if(is_object($stmt===null))return "資料查詢錯誤";
        return $stmt;
}

$data =select_me($table = "`vacancies`", $condition = "1",$order_by = "1", $fields = "*", $limit = "");
//SELECT `company_id`, `company_money`, `company_time`, `company_place`, `company_content`, `company_work_experience`, `company_type`, `company_Education`, `company_department`, `company_other`, `company_safe`, where `company_id` ='".$rel_company_id."' ";

?>

<body>
    <div id="wrap">
        <div id="content" style="background-color: #ddd">
            <div class="job_Navigationbar"></div>

            <?php foreach ($data as $value) { ?>
                <h1>徵才標題</h1>
                <div id="job_Content">
                    <div class="job-description" style="text-align: center; font-size: 40px;"><?php echo $company_name ?>
                    </div>

                    <div class="job-description">工作內容
                        <li style="margin-top: 5px;"><?php echo $value["company_content"] ?></li>
                    </div>

                    <div class="job-description">工作資訊
                        <li>
                            <img src="../../image/clock.svg"></img>
                            <p>上班時段：</p><span style="color: #007cff"><?php echo $value["company_time"] ?></span>
                        </li>
                        <li>
                            <img src="../../image/coin.svg"></img>
                            <p>工作待遇：</p><span style="color: #8b00ff"><?php echo $value["company_money"] ?></span>
                        </li>
                        <li>
                            <img src="../../image/briefcase.svg"></img>
                            <p>職務類別：</p><span><?php echo $value["company_type"] ?></span>
                        </li>
                        <li>
                            <img src="../../image/geo-alt.svg"></img>
                            <p>上班地點：</p><span><?php echo $value["company_place"] ?></span>
                        </li>
                    </div>

                    <div class="job-description">要求條件
                        <!-- <br> -->
                        <li>
                            <p>工作經驗：</p><span><?php echo $value["company_work_experience"] ?></span>
                        </li>
                        <li>
                            <p>學歷限制：</p><span><?php echo $value["company_Education"] ?></span>
                        </li>
                        <li>
                            <p>科系限制：</p><span><?php echo $value["company_department"] ?></span>
                        </li>
                    </div>

                    <div class="job-description">公司福利
                        <li>
                            <p>員工保險：</p><span><?php echo $value["company_safe"] ?></span>
                        </li>
                    </div>
                    <div class="job-description">補充說明
                        <li style="margin-top: 5px;"><?php echo $value["company_other"] ?></li>
                    </div>

                    <div class="bottom_row">
                        <a class="btn" href="student_email_controll.php?user_id=<?= $user_id ?>&company_id=<?= $value["rel_company_id"] ?>">我要應徵</a>
                    </div>
                </div>
            <?php } ?>
        </div> <!-- content -->
    </div> <!-- wrap -->


    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/index.js"></script>
    <script src="../../bootstrap-5.2.0-beta1-dist//js/bootstrap.min.js"></script>
</body>

</html>