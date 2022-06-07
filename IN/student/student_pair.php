<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
    <?header("Content-Type:text/html; charset=utf-8");//重要顯示中文ˊ重要部分?>
</head>

<body>
<form action  = "student_pair_control.php" method = "Post">
    <div id="wrap">
        <div id="content">
            <h1>實習配對填寫</h1>
            <div id="pairBox">
           <select name="choose_company" >
                    <option disabled>請選擇配對成功的廠商</option>
           <?php 
                $user_id = @$_GET["user_id"];
                $sql = "SELECT  `company_name`  FROM `company` ";
                $stmt = $con->prepare( $sql );
                $stmt->execute();
                $stmt->bind_result($company_name);
                while($stmt ->fetch()){
                    echo $company_name;
            ?>                           
                    <option value="<?=$company_name;?>"><?echo $company_name;?></option>
                <?}?>
                </select>
             <select name="choose_teacher" >
                    <option disabled>請選則實習負責老師</option>
           <?php 
                $sql = "SELECT `teacher_real_name` FROM `teacher` ";
                $stmt = $con->prepare( $sql );
                $stmt->execute();
                $stmt->bind_result($teacher_real_name);
                while($stmt ->fetch()){
            ?>                           
                    <option value="<?=$teacher_real_name;?>"><?echo $teacher_real_name;?></option>
                <?}?>
                </select>
                <input type = "date" name = "start_tme">
                <input type = "date" name = "end_tme">
                <input type = "hidden" name = "user_id" value = "<?echo $user_id ?>">
                <input type="submit" value="提交">

            </div>
        </div> <!-- content -->
</form>
    </div> <!-- wrap -->

</body>

</html>