<?php
header("Content-Type:text/html; charset=utf-8");//重要顯示中文ˊ重要部分
include "../user_connect.php";
$user_id = @$_POST["user_id"];
$choose_company = @$_POST["choose_company"];
$choose_teacher = @$_POST["choose_teacher"];
$start_tme = @$_POST["start_tme"];
$end_tme = @$_POST["end_tme"];
echo $choose_company;
echo $choose_teacher;
$sal1 = "SET NAMES UTF8";
$stmt = $con->query($sal1);

$sql = "INSERT INTO `pair`(`user_id`, `teacher_name`, `company_name`, `start_time`, `end_time`) VALUES ('".$user_id."','".$choose_teacher."','".$choose_company."','".$start_tme."','".$end_tme."')";
$stmt = $con->prepare( $sql );
$stmt->execute();
echo "2秒返回配對畫面";
header("Refresh:2;url=student_pair.php");










?>
