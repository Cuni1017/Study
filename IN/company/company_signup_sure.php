<?
require_once "../../user_connect.php";
$verification_button = @$_POST["verification_button"];
$ram_num = @$_POST["ram_num"];
$id = @$_POST["id"];
$today = date("Ynj");

if($verification_button == $ram_num){
    echo "驗證瑪正確回到登入頁面登入";
    header("Refresh:2;url=../../login.php");
}elseif($verification_button != $ram_num){
    echo "驗證瑪輸入錯誤,請回註冊頁面重新登入";
    header("Refresh:2;url=company_signup.php");
    $sql2="DELETE FROM `company` WHERE company_id = '".$id."'";
    $stmt=$con->prepare($sql2);
    $stmt->execute();

    $sql1="DELETE FROM `login` WHERE id = '".$id."'";
    $stmt=$con->prepare($sql1);
    $stmt->execute();
}
    ?>