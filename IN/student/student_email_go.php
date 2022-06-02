<?PHP
//$password = md5(trim($_POST['password'])); //加密密碼
//$email = trim($_POST['email']); //郵箱
?>
<?php
//生成6位隨機驗證碼



//[*郵件發送邏輯處理過程*系統核心配置文件*]


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//調用PHPMailer組件，此處是你自己的目錄，需要改寫。
require '../../PHPMailer-master/src/Exception.php';
require '../../PHPMailer-master/src/PHPMailer.php';
require '../../PHPMailer-master/src/SMTP.php';
require_once "../user_connect.php";

$user_id = @$_POST['user_id'];
$company_id = @$_POST['company_id'];
$company_email = @$_POST['company_email'];
$email_content = @$_POST['email_content'];

echo $user_id;

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
    <link rel="stylesheet" href="../../style/css/account.css">
    <link rel="stylesheet" href="../../style/css/style.css">
<?header("Content-Type:text/html; charset=utf-8");//重要顯示中文ˊ重要部分?>
</head>

<body>
            <?php

            if ($email_content == "") {
                echo "內容沒填,五秒後返回註冊畫面";
               header("Refresh:3;url=student_email_controll.php?user_id=".$user_id."&company_id=".$company_id );
            
            } else //如果資料庫記憶體在相同使用者名稱，則'$rs'接收到的變數為'true'所以大於1為真，則返回'使用者名稱已存在'
            {
                
            }

            //顯示註冊成功資訊
            //header("Refresh:1;url=login.php");//一秒後重新整理進入登入頁
            ?>

            <?php
            

$sql = "SELECT  `name`, `sex`, `birthday`, `email`, `contact`, `phone`, `home`, `other`, `path`, `file_name` FROM `resume` WHERE `user_id` = '".$user_id."'";
$stmt=$con->prepare($sql);
$stmt->execute();
$stmt->bind_result($name, $sex, $birthday, $email, $contact, $phone, $home, $other, $path, $file_name);
$pathfile = $path.$file_name;


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
                $mail->Password = "mikeliu900106"; //Gmail密碼
                $mail->From = "mikeliu20010106@gmail.com"; //寄件者信箱
                $mail->FromName = "liu mike"; //寄件者姓名
                $mail->Encoding = "base64";
                $mail->AddAddress("mikeliu20010106@gmail.com"); //收件者郵件及名稱
                $pdf = "ss.pdf";
                $path_file = "C:/staff_mysql/origin/upload/";
                //$mail_file = iconv('utf-8', 'gb2312', '專題企劃書.docx');
                //echo $mail_file;
                //$real_file = "C:/staff_mysql/origin/";
                //$upload_file = iconv('utf-8', 'gb2312', 'ASP_NET_Core_Web_API建置教學_不含資料庫之MathBmiWebApi_.pdf');
                //$real_project =  $real_file . $upload_file;
                //C:/staff_mysql/origin/upload/
               // $mail->addAttachment($real_project,"sb.pdf");
                //$mail->addAttachment(,"sb.docx");
                //$mail->addAttachment(iconv('utf-8', 'gb2312', 'C:/staff_mysql/origin/upload/ASP_NET_Core_Web_API建置教學_不含資料庫之MathBmiWebApi_.pdf'), '測試.pdf'); 
                $mail->addAttachment($path_file.$pdf,"sss.pdf");         // 添加附件
                // $mail->addAttachment('../thumb-1.jpg', 'new.jpg');    // 發送附件並且重命名

              

                //Content
                $mail->isHTML(true);                                  // 是否以HTML文檔格式發送  發送後客戶端可直接顯示對應HTML內容
                $mail->Subject =  '身份登錄驗證';
                $mail->Body    = '<h1>歡迎使用傻逼往</h1><h3>您的身份驗證碼是：<span>' .  '</span></h3>' . date('Y-m-d H:i:s');
                $mail->AltBody = '歡迎使傻逼往,您的身份驗證碼是：' . date('Y-m-d H:i:s');

                $mail->send();

            ?>

                <!-- 註冊資料輸入欄 -->

                <!-- 登入 提交 -->
                <div class="bottom_row">
                    <input type="hidden" value="<? echo $username ?>" name="username">
                    <input type="hidden" value="<? echo $password ?>" name="password">
                    <input type="hidden" value="<? echo $yanzhen ?>" name="ram_num">
                    <input type="hidden" value="<? echo $email ?>" name="email">
                    <input class="Submit_button" type="submit" value="驗證" />
                </div>
            <?php
                echo '驗證郵件發送成功，請注意查收！';
            } catch (Exception $e) {
                echo '郵件發送失敗,請重試';
            }
            ?>
            <!-- 回登入 回首頁 -->
            <a href="../../login.php"><img src="../../image/return.png" style="position: absolute; top: 5px; left: 5px;" width="30px"></a>
            <a href="../../index.php"><img src="../../image/homeLogo.png" style="position: absolute; top: 5px; right: 5px;" width="30px"></a>
        </div>
    </form>
</body>

</html>