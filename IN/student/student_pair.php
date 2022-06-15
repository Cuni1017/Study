<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
    <? header("Content-Type:text/html; charset=utf-8"); //重要顯示中文ˊ重要部分
    ?>
</head>

<body>
    <?php $user_id = @$_GET["user_id"];
    $sql = "SELECT * FROM `pair` WHERE user_id = '" . $user_id . "' ";
    if ($con->query($sql)->num_rows <= 0) {
    ?>
        <form action="student_pair_control.php" method="Post">
            <div id="wrap">
                <div id="content">
                    <h1>實習配對填寫</h1>
                    <div id="pairBox">
                        <div class="pair-fill-in">
                            <div class="pair-row">
                                <span>請選擇配對成功的廠商：</span>
                                <select name="choose_company">
                                    <option disabled>請選擇配對成功的廠商</option>
                                    <?php
                                    $user_id = @$_GET["user_id"];
                                    $sql = "SELECT  `company_name`  FROM `company` ";
                                    $stmt = $con->prepare($sql);
                                    $stmt->execute();
                                    $stmt->bind_result($company_name);
                                    while ($stmt->fetch()) {
                                        echo $company_name;
                                    ?>
                                        <option value="<?= $company_name; ?>"><? echo $company_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="pair-row">
                                <span>請選擇實習的負責老師：</span>
                                <select name="choose_teacher">
                                    <option disabled>請選擇實習負責老師</option>
                                    <?php
                                    $sql = "SELECT `teacher_real_name` FROM `teacher` ";
                                    $stmt = $con->prepare($sql);
                                    $stmt->execute();
                                    $stmt->bind_result($teacher_real_name);
                                    while ($stmt->fetch()) {
                                    ?>
                                        <option value="<?= $teacher_real_name; ?>"><? echo $teacher_real_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="pair-row">
                                <span>實習開始日期：</span>
                                <input type="date" name="start_tme">
                            </div>
                            <div class="pair-row">
                                <span>實習結束日期：</span>
                                <input type="date" name="end_tme">
                                <input type="hidden" name="user_id" value="<? echo $user_id ?>">
                            </div>
                            <input type="image" src="../../image/check2.svg">
                        </div>
                    </div>
                </div> <!-- content -->
        </form>
    <?php } else {
        echo "你已經填寫過實習配對兩秒後將跳轉到上傳實習心得";
        header("Refresh:3;url=student_pair_upload.php");
    }
    ?>

    </div> <!-- wrap -->

</body>

</html>