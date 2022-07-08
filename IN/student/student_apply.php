<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
</head>
<?php require_once "../user_connect.php";
header("Content-Type:text/html; charset=utf-8");
$user_id = @$_GET["user_id"];

function select_me($table = null, $condition = "1", $order_by = "1", $fields = "*", $limit = ""){
    $sql = "SELECT {$fields} FROM {$table} WHERE {$condition} ORDER BY {$order_by} {$limit}";
    echo $sql;
    $stmt = con()->query($sql);
    if(is_object($stmt===null))return "資料查詢錯誤";
        return $stmt;
}
$data = select_me($table = "company`", $condition = "1", $order_by = "1", $fields = "`company_id`, `company_name`", $limit = "10");
//$sql = "SELECT `company_id`, `company_name`  FROM `company` Limit  10";

?>

<body>
    <div id="wrap">
        <div id="content">
            <h1>實習應徵</h1>
            <div id="applyBox">
                <?php foreach($data as $value) { ?>
                    <div class="jobscont">
                        <div class="job_img">
                            <img src="../../image/content2.jpg"></img>
                        </div>
                        <div class="job_t">
                            <p><?php echo $value["company_name"] ?></p>
                        </div>
                        <a href="student_Apply_for.php?user_id=<?= $user_id ?>&company_id=<?= $value["company_id"] ?>"><img src="../../image/info-circle.svg"></a>
                        <!-- <img src="image/info-circle.svg" class="moreInfobtn"> -->
                    </div>
                <?php } ?>
            </div>
        </div> <!-- content -->
    </div> <!-- wrap -->
</body>

</html>