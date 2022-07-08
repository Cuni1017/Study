<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
    <?header("Content-Type:text/html; charset=utf-8");//重要顯示中文ˊ重要部分?>
</head>

<body>
<?php 
function select_me($table = null, $condition = "1", $order_by = "1", $fields = "*", $limit = ""){
    $sql = "SELECT {$fields} FROM {$table} WHERE {$condition} ORDER BY {$order_by} {$limit}";
    echo $sql;
    $stmt = con()->query($sql);
    if(is_object($stmt===null))return "資料查詢錯誤";
        return $stmt;
}
$sql = "SELECT  `company_name`  FROM `company` ";
    if(select_me($table = "`company`", $condition = "1", $order_by = "1", $fields = "`company_name`", $limit = "") -> num_rows > 0){?>
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