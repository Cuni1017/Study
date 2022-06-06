<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
</head>

<body>
<form action  = "" pethod = "post">
    <div id="wrap">
        <div id="content">
            <h1>實習配對填寫</h1>
            <div id="pairBox">
           <select name="choose_company" id="">
                    <option disabled>請選擇配對成功的廠商</option>
           <?php 
                $user_id = @$_GET["user_id"];
                $sql = "SELECT  `company_name`  FROM `company` ";
                $stmt = $con->prepare( $sql );
                $stmt->execute();
                $stmt->bind_result($company_name);
                while($stmt ->fetch()){
            ?>                           
                    <option value="<?=$company_name;?>"><?echo $company_name;?></option>
                <?}?>
                </select>
                <select name="choose_teacher" id="">
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
                <input type="submit" value="提交">

            </div>
        </div> <!-- content -->
</form>
    </div> <!-- wrap -->

</body>

</html>