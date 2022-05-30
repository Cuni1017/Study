<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
</head>
<?php require_once "../user_connect.php";
$user_id = @$_GET["user_id"];
$sql = "SELECT `company_id`, `company_name`, `company_username`, `company_password`, `company_number`, `company_email`, `company_money`, `company_time`, `company_place`, `company_content`, `company_ work_experience`, `company_type`, `company_Education`, `company_ department`, `company_other`, `company_safe`, `level` FROM `company` Limit  10";
$stmt = $con->prepare($sql);
$stmt->execute();
$num = $stmt->bind_result($company_id, $company_name, $company_username, $company_password, $company_number, $company_email, $company_money, $company_time, $company_place, $company_content, $company_work_experience, $company_type, $company_Education, $company_department, $company_other, $company_safe, $level);
?>

<body>
    <div id="wrap">
        <?php while ($stmt->fetch()) { ?>
            <div id="content" style="background-color: #ddd">
                <h1>寄出履歷</h1>
                <form method="POST" action="student_email_go.php">
                    <div id="emailBox">
                        <div class="Towho">
                            <p>公司：</p><span><?php echo $company_name ?></span><br>
                            <p>信箱：</p><span><input type="email" value=<?php echo $company_email ?>></span>
                        </div>
                        <div class="Content">
                            <label for="email_content">Email 內容填寫：</label><br><br>
                            <textarea name="email_content"></textarea>
                            <input type="file">
                            <br>
                        </div>
                        <input type="submit" class="btn" value="寄出">
                    </div>
                </form>

            </div> <!-- content -->
        <?php } ?>
    </div> <!-- wrap -->
</body>

</html>