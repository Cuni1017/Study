<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
    <?header("Content-Type:text/html; charset=utf-8");//重要顯示中文ˊ重要部分?>
</head>

<body>
<?php $sql = "SELECT  `company_name`  FROM `company` ";
    if($con->query($sql)->num_rows > 0){?>
    <form action  = "student_pair_control.php" method = "Post">
        
    </form>
    <?php }else{
        echo "你已經填寫過實習配對兩秒後將跳轉到上傳實習心得";
        header("Refresh:3;url=student_pair_upload.php");

    }
    ?>
        </div> <!-- wrap -->

</body>

</html>