<html>

<head>
    <link rel="stylesheet" href="../../style/css/register.css">
</head>

<body>
    <form action="company_signup_sure.php" method="POST">

        <div class="RegisterBox">
            <h1 class="" style="font-size: 50px">Register</h1>
            <div class="verification">
                <input class="Register_text" type="text" placeholder="驗證碼" name="verification_button" style="width: 300px; margin-left: -5px;" />

            </div>
            <?php
            require_once "../../user_connect.php";

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            //調用PHPMailer組件，此處是你自己的目錄，需要改寫。
            require '../../PHPMailer-master/src/Exception.php';
            require '../../PHPMailer-master/src/PHPMailer.php';
            require '../../PHPMailer-master/src/SMTP.php';
            $email_content = @$_POST["email_content"];
            $test_user_id = @$_POST["user_id"];
            $test_company_id = @$_POST["company_id"];
            $sql = "SELECT `company_id`, `company_name`, `company_username`, `company_password`, `company_number`, `company_email`, `company_money`, `company_time`, `company_place`, `company_content`, `company_ work_experience`, `company_type`, `company_Education`, `company_ department`, `company_other`, `company_safe`, `level` FROM `company` where company_id = '".$test_company_id."'";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $stmt->bind_result($company_id, $company_name, $company_username, $company_password, $company_number, $company_email, $company_money, $company_time, $company_place, $company_content, $company_work_experience, $company_type, $company_Education, $company_department, $company_other, $company_safe, $level);
            $stmt->fetch();
            $sql1 = " SELECT `user_id`, `user_name`, `user_password`, `user_email`, `user_level` FROM `user` WHERE `user_id` ='".$test_user_id."'";
            $stmt1 = $con->prepare($sql1);
            $stmt1->execute();
            $stmt1->bind_result($user_id, $user_name, $user_password, $user_email, $user_level);
            $stmt1->fetch();
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
                $mail->AddAddress($company_email); //收件者郵件及名稱
                // $mail->addAttachment('../xy.zip');         // 添加附件
                //$mail->addAttachment('../thumb-1.jpg', 'new.jpg');    // 發送附件並且重命名

                $yanzhen = codestr();  //此處為調用隨機驗證碼函數（按照自己實際函數名改寫）

                //Content
                $mail->isHTML(true);                                  // 是否以HTML文檔格式發送  發送後客戶端可直接顯示對應HTML內容
                $mail->Subject = $company_name . '履歷寄送';
                $mail->Body    = '<h1>' . $company_name . '</h1><h3>您好我是<span>文化大學的學生我來面試貴公司</span></h3>' . date('Y-m-d H:i:s');
                $mail->AltBody = $email_content  . date('Y-m-d H:i:s');

                $mail->send();

            ?>

                <!-- 註冊資料輸入欄 -->

                <!-- 登入 提交 -->
                <div class="bottom_row">
                    <input type="hidden" value="<? echo $com_num ?>" name="id">
                    <input type="hidden" value="<? echo $yanzhen ?>" name="ram_num">
                    <input class="Submit_button" type="submit" value="驗證" />
                </div>
                <?php
                $sql = " select count( * ) as num from company";
                $stmt = $con->prepare($sql);
                $stmt->execute();
                $num = $stmt->get_result()->fetch_assoc();
                $row_num = $num["num"];
                $com_num = "C" . (($today * 10000) + ($row_num + 1));
                echo $com_num;



                $sql = ("SET NAMES 'UTF8'");
                $total = $con->query($sql);

                $sql = "INSERT INTO `company`(`company_id`, `company_name`, `company_username`, `company_password`, `company_number`, `company_email`, `company_money`, `company_time`, `company_place`, `company_content`, `company_ work_experience`, `company_type`, `company_Education`, `company_ department`, `company_other`, `company_safe`, `level`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("ssssissssssssssss", $com_num, $company_name, $company_username, $company_password, $company_number, $company_email, $company_money, $company_time, $company_place, $company_content, $company_work_experience, $company_type, $company_Education, $company_department, $company_other, $company_safe, $level);
                $stmt->execute();

                $sql = ("SET NAMES 'UTF8'");
                $total = $con->query($sql);
                $sql1 = "INSERT INTO `login`(`id`, `username`, `password`, `level`) VALUES ('" . $com_num . "','" . $company_username . "','" . $company_password . "','" . $level . "')";
                $stmt = $con->prepare($sql1);
                $stmt->execute();
                ?>
            <?php
                echo '驗證郵件發送成功，請注意查收！';
            } catch (Exception $e) {
                echo '郵件發送失敗,請重試';
            }
            ?>
            <!-- 回登入 回首頁 -->
            <a href="login.html"><img src="image/return.png" style="position: absolute; top: 5px; left: 5px;" width="30px"></a>
            <a href="index.html"><img src="image/homeLogo.png" style="position: absolute; top: 5px; right: 5px;" width="30px"></a>
        </div>
    </form>
</body>

</html>
*/








?>