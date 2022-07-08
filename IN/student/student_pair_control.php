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

function insert_me($table = null,$data_array = array()){
    if($table === NULL)return false;
    if(count($data_array) == 0) return false;
    $col = array();
    $dat = array();
    foreach ($data_array as $key => $value) {
        //$value  = $value -> real_escape_string();
       $col[] = $key;
       $dat[] = "'$value'";
       $columns = join(",",$col );
       $data = join(",",$dat);
    }
    $sql = "INSERT INTO " . $table . "(" . $columns . ")VALUES(" . $data . ")";
    echo $sql;
    con()->query($sql);
}

$pair_data = array
(
    "user_id"      => $user_id,
    "teacher_name" => $choose_teacher,
    "company_name" => $choose_company,
    "start_time"   => $start_tme,
    "end_time"     => $end_tme
);
insert_me($table = "pair",$pair_data);
echo "2秒返回配對畫面";
header("Refresh:2;url=student_pair.php");










?>
