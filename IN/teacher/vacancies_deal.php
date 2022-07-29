<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
</head>
<?php include '../../sql_function.php'; 

$user_id = @$_GET["user_id"];
$rel_company_id = @$_GET["company_id"];
$company_name = @$_GET["company_name"];
$sql_function = new sql_function('localhost','root','1qaz2wsx','study');
$vacancies_data = $sql_function -> select_me($table = "`company` Inner join `vacancies` on  vacancies.company_id  =   company.company_id", $condition = " `level` = '沒審核'", $order_by = "1", $fields = "
company.company_id,company.company_name,vacancies.company_money, vacancies.company_time, vacancies.company_place, vacancies.company_content, vacancies.company_work_experience, vacancies.company_type, vacancies.company_Education, vacancies.company_department, vacancies.company_other, vacancies.company_safe", $limit = "");
//SELECT `company_id`, `company_money`, `company_time`, `company_place`, `company_content`, `company_work_experience`, `company_type`, `company_Education`, `company_department`, `company_other`, `company_safe`, where `company_id` ='".$rel_company_id."' ";

?>

<body>
    <div id="wrap">
        <div id="content" style="background-color: #ddd">
            <div class="job_Navigationbar"></div>

            <?php foreach ($vacancies_data as $value) { ?>
                <h1>徵才標題</h1>
                <div id="job_Content">
                    <div class="job-description" style="text-align: center; font-size: 40px;"><?php echo $company_name ?>
                    <!-- 傳值近來別動 上面-->
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
                        <a class="btn" href="vacancies_delete.php?company_id=<?= $value["rel_company_id"] ?>">刪除工作</a>
                        <a class="btn" href="vacancies_connect.php?company_id=<?= $value["rel_company_id"] ?>">同意刊登</a>
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