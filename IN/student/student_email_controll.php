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
    $company_name = @$_GET["company_name"];
    // echo $user_id;
    // echo $company_id;
    // echo $company_name;

    function select_me($table = null, $condition = "1", $order_by = "1", $fields = "*", $limit = ""){
        $sql = "SELECT {$fields} FROM {$table} WHERE {$condition} ORDER BY {$order_by} {$limit}";
        echo $sql;
        $stmt = con()->query($sql);
        if(is_object($stmt===null))return "資料查詢錯誤";
            return $stmt;
    }

    $data = select_me($table = "`company`", $condition = "company_id = '" . $company_id . "'", $order_by = "1", $fields = "`company_email`,`company_name`", $limit = "");
    $sql = "SELECT `company_email`,`company_name` FROM `company` WHERE company_id = '" . $company_id . "'";

    // echo $company_email;
    ?>
    <div id="wrap">
        <div id="content" style="background-color: #ddd">
            <h1>寄出履歷</h1>
            <form method="POST" action="student_email_go.php">
                <div id="emailBox">
                    <div class="Towho">
                        <?php foreach($data as $value) { ?>
                            <p>公司：</p><span><? echo  $value["company_name"]; ?></span><br>
                            <p>信箱：</p><span><input type="email" value="<?= $value["company_email"]; ?>"></span>
                    </div>
                    <div class="Content">
                        <label for="email_content">Email 內容填寫：</label><br><br>
                        <textarea name="email_content"></textarea>

                        <input type="hidden" name="user_id" value="<?= $user_id ?>">
                        <input type="hidden" name="company_id" value="<?=  $value["company_id"] ?>">
                        <input type="hidden" name="company_email" value="<?=  $value["company_email"] ?>">
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