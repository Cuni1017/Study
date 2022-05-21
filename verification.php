
<?PHP
//$password = md5(trim($_POST['password'])); //加密密碼
//$email = trim($_POST['email']); //郵箱
?>
<?php
//生成6位隨機驗證碼
function codestr(){
    $arr=array_merge(range('a','b'),range('A','B'),range('0','9'));
    shuffle($arr);
    $arr=array_flip($arr);
    $arr=array_rand($arr,6);
    $res='';
    foreach ($arr as $v){
        $res.=$v;
}
return $res;
}
?>
<?php

//[*郵件發送邏輯處理過程*系統核心配置文件*]


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//調用PHPMailer組件，此處是你自己的目錄，需要改寫。
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require_once "user_connect.php";

$username = @$_POST['username'];
$password = @$_POST['password'];

$email = @$_POST['email'];



//查詢語句，幫助協助查詢當前註冊使用者名稱是否存在於資料庫當中
/*
$sql = "select * from `user` where user_name='".$username."'";
$stmt=$con->prepare($sql);
$stmt->execute();
$stmt->store_result();
$result = $stmt ->num_rows;
var_dump($result);
*/
//第一個'username'為資料庫內已存在的username值，將其與第二個'POST'方法傳遞過來的username值做對比
//$rs =$con->query($sql);

//var_dump($rs);
//  $result = $rs->get_result();

//$rs = $con->query($sql);
?>
<html>
<head>
        <link rel="stylesheet" href="style/register.css">
    </head>
    <body>
    <form action="sure.php" method="POST"> 
        
            <div class="RegisterBox">
            <h1 class="" style="font-size: 50px">Register</h1>
            <div class="verification">          
                    <input class="Register_text" type="text" placeholder="驗證碼" name = "verification_button" style="width: 300px; margin-left: -5px;" />

                </div>
                    <?php
                    $sql = "SELECT * FROM `login` where `username` ='".$username."'";
                    //$rs = $con->query($sql) -> num_rows > 0;
                    //echo($rs);
            if($email == "" && $password == "" && $username == ""){
                echo "全部沒填,五秒後返回註冊畫面";
                header("Refresh:5;url=register.php");
            }elseif($password == "" && $username == ""){
                echo "帳號和密碼都為空,五秒後返回註冊畫面";
                header("Refresh:5;url=register.php");
            }
            elseif($username=="" ){
                echo "帳號不得為空,五秒後返回註冊畫面";
                header("Refresh:5;url=register.php");     
            }elseif($password == ""){
                echo "密碼不得為空,五秒後返回註冊畫面";
                header("Refresh:5;url=register.php");
            }elseif($email == "" ){
                echo "信箱為空,五秒後返回註冊畫面";
                header("Refresh:5;url=register.php");
            }
            elseif( $con->query($sql)-> num_rows > 0)//如果資料庫記憶體在相同使用者名稱，則'$rs'接收到的變數為'true'所以大於1為真，則返回'使用者名稱已存在'
            {
                //var_dump($con);
                echo "使用者名稱已存在,三秒後版回註冊畫面，請重新註冊！";

                echo "<a href=register.php>[註冊]<br></a>";
                header("Refresh:3;url=register.php");
                
            }elseif (!$con->query($sql))
                {
                die('Error: ' . $con->error);
                }

            //顯示註冊成功資訊
            //header("Refresh:1;url=login.php");//一秒後重新整理進入登入頁
            ?>
        
        <?php
/*

$sql = "SELECT `user_name`, `user_password`, `user_email`, `user_level` FROM `user` ";
$stmt=$con->prepare($sql);
$stmt->execute();
$stmt->bind_result($old_username,$old_password,$old_email,$old_level);
*/

  
/*
        $one = "1";
        //$sql1 = "INSERT INTO `user`(`user_name`, `user_password`, `user_email`, `user_level`) VALUES (?,?,?,?)";
        $sql1 = "INSERT INTO `user`(`user_name`, `user_password`, `user_email`, `user_level`) VALUES ('".$username."','".$password."','".$email."','".$one. "')";
        $stmt1=$con->prepare($sql1);
    // $stmt->bind_param("sssi",$username,$password,$email,$one);
        $stmt1->execute();
*/
//
$mail = new PHPMailer(true);       // Passing `true` enables exceptions
try {
    //服務器配置
    $mail->IsSMTP(); //設定使用SMTP方式寄信
    $mail->SMTPAuth = true; //設定SMTP需要驗證
    $mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線
    $mail->Host = "smtp.gmail.com"; //Gamil的SMTP主機
    $mail->Port = 465; //Gamil的SMTP主機的埠號(Gmail為465)。
    $mail->CharSet = "utf-8"; //郵件編碼
    $mail->Username = "mikeliu20010106@gmail.com"; //Gamil帳號
    $mail->Password = "1qaz2wsx3edc4rfv5tgb"; //Gmail密碼
    $mail->From = "mikeliu20010106@gmail.com"; //寄件者信箱
    $mail->FromName = "liu mike"; //寄件者姓名
    $mail->AddAddress($email); //收件者郵件及名稱
    // $mail->addAttachment('../xy.zip');         // 添加附件
    // $mail->addAttachment('../thumb-1.jpg', 'new.jpg');    // 發送附件並且重命名
    
    $yanzhen = codestr();  //此處為調用隨機驗證碼函數（按照自己實際函數名改寫）

    //Content
    $mail->isHTML(true);                                  // 是否以HTML文檔格式發送  發送後客戶端可直接顯示對應HTML內容
    $mail->Subject = $username.'身份登錄驗證';
    $mail->Body    = '<h1>歡迎使用傻逼往</h1><h3>您的身份驗證碼是：<span>'.$yanzhen.'</span></h3>' . date('Y-m-d H:i:s');
    $mail->AltBody = '歡迎使傻逼往,您的身份驗證碼是：'.$yanzhen . date('Y-m-d H:i:s');

    $mail->send();

    ?>

                <!-- 註冊資料輸入欄 -->
                
                <!-- 登入 提交 -->
                <div class="bottom_row">
                    <input type = "hidden" value = "<?echo $username?>" name= "username">
                    <input type = "hidden" value = "<?echo $password?>" name= "password">
                    <input type = "hidden" value = "<?echo $yanzhen?>" name= "ram_num">
                    <input type = "hidden" value = "<?echo $email?>" name= "email">
                    <input class="Submit_button" type="submit" value="驗證" /> 
                </div>
<?php
    echo '驗證郵件發送成功，請注意查收！';
} catch (Exception $e) {
    echo '郵件發送失敗,請重試';
}
?>
                <!-- 回登入 回首頁 -->
                <a href="login.html"><img src="image/return.png" style="position: absolute; top: 5px; left: 5px;" width="30px" ></a>
                <a href = "index.html" ><img src="image/homeLogo.png" style="position: absolute; top: 5px; right: 5px;" width="30px" ></a>
            </div>
        </form>
    </body>

</html>
*/