<?php
include '../user_connect.php';
header("Content-Type:text/html; charset=utf-8");//重要顯示中文ˊ重要部分
?>

<?php
$filename = "/path/to/the/file.pdf";

$user_id = @$_GET["user_id"];   
echo $user_id;
// Header content type
$sql = "SELECT  `path`, `file_name` FROM `resume` WHERE `user_id` = '".$user_id."'";
$stmt=$con->prepare($sql);
$stmt->execute();
$stmt->bind_result($path, $file_name);
$stmt->fetch();
$real_file = $path . $file_name;
echo $real_file;




    header("Content-type: application/pdf");
    header("Content-Length: " . filesize($real_file));
    readfile($real_file);

       //header("Content-type: application/doc");
        //header("Content-Length: " . filesize($real_file));
        //readfile($real_file);




// header("Content-Length: " . filesize($real_file));
// header("Content-Length: " . filesize($real_file));
   

// // 将文件发送到浏览器。

// readfile($real_file);
?>


















