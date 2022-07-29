<?
require_once "../../user_connect.php";
$verification_button = @$_POST["verification_button"];
$ram_num = @$_POST["ram_num"];
$id = @$_POST["id"];
$today = date("Ynj");

// function delete_me($table = null, $column = null, $id = null){
//     if ($table===null) return false;
//     if($id===null) return false;
//     if($column===null) return false;
//     con()->query("DELETE FROM $table WHERE " . $column . " = " . "\"" . $id . "\"");
// }
$sql_function = new sql_function('localhost','root','1qaz2wsx','study');
if($verification_button == $ram_num){
    echo "驗證瑪正確回到登入頁面登入";
    header("Refresh:2;url=../../login.php");
}elseif($verification_button != $ram_num){
    echo "驗證瑪輸入錯誤,請回註冊頁面重新登入";
    header("Refresh:2;url=company_signup.php");
    $sql_function = delete_me($table = "`company`", $column = null, $id);
    $sql_function = delete_me($table = "`login`", $column = null, $id) ;
}
    ?>