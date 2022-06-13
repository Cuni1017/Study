<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
    <? header("Content-Type:text/html; charset=utf-8"); ?>
</head>
<?php /*require_once "../user_connect.php";
$user_id = @$_GET["user_id"];
$sql = "SELECT `company_id`, `company_name`, `company_username`, `company_password`, `company_number`, `company_email`, `company_money`, `company_time`, `company_place`, `company_content`, `company_ work_experience`, `company_type`, `company_Education`, `company_ department`, `company_other`, `company_safe`, `level` FROM `company` Limit  10";
$stmt = $con->prepare($sql);
$stmt->execute();
$num = $stmt->bind_result($company_id, $company_name, $company_username, $company_password, $company_number, $company_email, $company_money, $company_time, $company_place, $company_content, $company_work_experience, $company_type, $company_Education, $company_department, $company_other, $company_safe, $level);
/
*/
?>

<body>
    <?php //require_once "user_connect.php";
    $user_id = @$_GET["user_id"];
    $company_id = @$_GET["company_id"];
    echo     $user_id;
    echo $company_id;

    $con->query("SET NAMES UTF8");
    $sql = "SELECT `company_email` FROM `company` WHERE company_id = '" . $company_id . "'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($company_email);

    echo $company_email;

    ?>
    <div id="wrap">
        <div id="content" style="background-color: #ddd">
            <h1>寄出履歷</h1>
            <form method="POST" action="student_email_go.php">
                <div id="emailBox">
                    <div class="Towho">
                        <?php while ($stmt->fetch()) { ?>
                            <p>公司：</p><span>公司名稱</span><br>
                            <p>信箱：</p><span><input type="email" value="<?= $company_email; ?>"></span>
                    </div>
                    <div class="Content">
                        <label for="email_content">Email 內容填寫：</label><br><br>
                        <textarea name="email_content"></textarea>

                        <input type="hidden" name="user_id" value="<?= $user_id ?>">
                        <input type="hidden" name="company_id" value="<?= $company_id ?>">
                        <input type="hidden" name="company_email" value="<?= $company_email ?>">
                        <!-- <input type="file"> -->
                    <?php } ?>
                    <br>
                    </div>
                    <input type="submit" class="btn" value="寄出">
                </div>
            </form>
        </div> <!-- content -->
</body>

</html>