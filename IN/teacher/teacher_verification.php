<html>

<head>
    <link rel="stylesheet" href="../../style/css/account.css">
    <link rel="stylesheet" href="../../style/css/style.css">
</head>

<body>
    <form action="teacher_signup_sure.php" method="POST">

        <div class="accountBox">
            <h1 class="" style="font-size: 50px">Register</h1>
            <div class="verification">
                <input class="account_text" type="text" placeholder="驗證碼" name="verification_button" style="width: 300px; margin-left: -5px;" />

            </div>
            <?php
            require_once "../../user_connect.php";

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            //調用PHPMailer組件，此處是你自己的目錄，需要改寫。
            require '../../PHPMailer-master/src/Exception.php';
            require '../../PHPMailer-master/src/PHPMailer.php';
            require '../../PHPMailer-master/src/SMTP.php';

            $teacher_username = @$_POST["teacher_username"];
            $teacher_password = @$_POST["teacher_password"];
            $teacher_real_name = @$_POST["teacher_real_name"];
            $teacher_email = @$_POST["teacher_email"];
            echo $teacher_email;
            $sql = " select count( * ) as num from company";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $today = date("Ynj");
            $num = $stmt->get_result()->fetch_assoc();
            $row_num = $num["num"];
            $com_num = "T" . (($today * 10000) + ($row_num + 1));
            echo $com_num;
            $level = "2";
            $sql = "SELECT * FROM `login` where `username` ='" . $teacher_username . "'";
            if ($teacher_username == "" ||  $teacher_password == "" || $teacher_real_name == "" || $teacher_email == "") {
                echo "有東西沒填,五秒後返回註冊畫面";
                header("Refresh:5;url=teacher_signup.php");
            } elseif ($con->query($sql)->num_rows > 0) //如果資料庫記憶體在相同使用者名稱，則'$rs'接收到的變數為'true'所以大於1為真，則返回'使用者名稱已存在'
            {
                //var_dump($con);
                echo "使用者名稱已存在,三秒後版回註冊畫面，請重新註冊！";

                echo "<a href=teacher_signup.php>[註冊]<br></a>";
                header("Refresh:3;url=teacher_signup.php");
            }
            function codestr()
            {
                $arr = array_merge(range('a', 'b'), range('A', 'B'), range('0', '9'));
                shuffle($arr);
                $arr = array_flip($arr);
                $arr = array_rand($arr, 6);
                $res = '';
                foreach ($arr as $v) {
                    $res .= $v;
                }
                return $res;
            }

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
                $mail->Password = "MIKE1QAZ2wsx"; //Gmail密碼
                $mail->From = "mikeliu20010106@gmail.com"; //寄件者信箱
                $mail->FromName = "liu mike"; //寄件者姓名
                $mail->AddAddress($teacher_email); //收件者郵件及名稱
                // $mail->addAttachment('../xy.zip');         // 添加附件
                // $mail->addAttachment('../thumb-1.jpg', 'new.jpg');    // 發送附件並且重命名

                $yanzhen = codestr();  //此處為調用隨機驗證碼函數（按照自己實際函數名改寫）

                //Content
                $mail->isHTML(true);                                  // 是否以HTML文檔格式發送  發送後客戶端可直接顯示對應HTML內容
                $mail->Subject = $teacher_username . '身份登錄驗證';
                $mail->Body    = '<h1>歡迎使用傻逼往</h1><h3>您的身份驗證碼是：<span>' . $yanzhen . '</span></h3>' . date('Y-m-d H:i:s');
                $mail->AltBody = '歡迎使傻逼往,您的身份驗證碼是：' . $yanzhen . date('Y-m-d H:i:s');

                $mail->send();
            ?>
                <!-- 登入 提交 -->
                <div class="bottom_row">
                    <input type="hidden" value="<? echo $com_num ?>" name="id">
                    <input type="hidden" value="<? echo $yanzhen ?>" name="ram_num">
                    <input class="Submit_button" type="submit" value="驗證" />
                </div>
                <?php

                $sql = ("SET NAMES 'UTF8'");
                $total = $con->query($sql);

                $sql = "INSERT INTO `teacher`(`teacher_id`, `teacher_username`, `teacher_password`, `teacher_real_name`, `teacher_email`, `teacher_level`) VALUES ('" . $com_num . "', '" . $teacher_username . "', '" . $teacher_password . "', '" . $teacher_real_name . "', '" . $teacher_email . "', '" . $level . "')";
                $stmt = $con->prepare($sql);

                $stmt->execute();

                $sql = ("SET NAMES 'UTF8'");
                $total = $con->query($sql);
                $sql1 = "INSERT INTO `login`(`id`, `username`, `password`, `level`) VALUES ('" . $com_num . "','" . $teacher_username . "','" . $teacher_password . "','" . $level . "')";
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
            <a href="../../login.php"><img src="../../image/return.png" style="position: absolute; top: 5px; left: 5px;" width="30px"></a>
            <a href="../../index.php"><img src="../../image/homeLogo.png" style="position: absolute; top: 5px; right: 5px;" width="30px"></a>
        </div>
    </form>
</body>

</html>