<!DOCTYPE html>
<html>

<head>
    <?php 
        include '../student_index.php';
        include '../../sql_function.php'; 
    ?>
</head>
<?php 
header("Content-Type:text/html; charset=utf-8");
$user_id = @$_GET["user_id"];
$sql_function = new sql_function('localhost','root','1qaz2wsx','study');
$company_data = $sql_function -> select_me($table = "`company`", $condition = "1", $order_by = "1", $fields = "`company_id`, `company_name`", $limit = "LIMIT 10");
//$sql = "SELECT `company_id`, `company_name`  FROM `company` Limit  10";

?>

<body>
    <div id="wrap">
        <div id="content">
            <h1>實習應徵</h1>
            <div id="applyBox">
                <?php foreach($company_data as $value) { ?>
                    <div class="jobscont">
                        <div class="job_img">
                            <img src="../../image/content2.jpg"></img>
                        </div>
                        <div class="job_t">
                            <p><?php echo $value["company_name"] ?></p>
                            <?$company_name =  $value["company_name"]?>
                        </div>
                        <a href="student_Apply_for.php?user_id=<?= $user_id ?>&company_id=<?= $value["company_id"] ?>&company_name=<?=$company_name?>"><img src="../../image/info-circle.svg"></a>
                        <!-- <img src="image/info-circle.svg" class="moreInfobtn"> -->
                    </div>
                <?php } ?>
            </div>
        </div> <!-- content -->
    </div> <!-- wrap -->
</body>

</html>