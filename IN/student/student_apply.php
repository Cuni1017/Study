<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
</head>
<?php require_once "../user_connect.php";
header("Content-Type:text/html; charset=utf-8");
$user_id = @$_GET["user_id"];
$sql = "SELECT `company_id`, `company_name`  FROM `company` Limit  10";
$stmt = $con->prepare($sql);
$stmt->execute();
$stmt->bind_result($company_id, $company_name);

?>

<body>
    <div id="wrap">
        <div id="content">
            <h1>實習應徵</h1>
            <div id="applyBox">
                <?php while ($stmt->fetch()) { ?>
                    <div class="jobscont">
                        <div class="job_img">
                            <img src="../../image/content2.jpg"></img>
                        </div>
                        <div class="job_t">
                            <p><?php echo $company_name ?></p>
                        </div>
                        <a href="student_Apply_for.php?user_id=<?= $user_id ?>&company_id=<?= $company_id ?>"><img src="../../image/info-circle.svg"></a>
                        <!-- <img src="image/info-circle.svg" class="moreInfobtn"> -->
                    </div>
                <?php } ?>
            </div>
        </div> <!-- content -->
    </div> <!-- wrap -->
</body>

</html>