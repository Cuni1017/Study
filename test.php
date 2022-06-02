<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//調用PHPMailer組件，此處是你自己的目錄，需要改寫。
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require_once "user_connect.php";

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
                
                //echo $mail_file;
                //C:/staff_mysql/origin/upload/
                //$mail->addAttachment(iconv('utf-8', 'gb2312', 'C:/staff_mysql/origin/upload/專題企劃書.docx'));
                $rel_path = "C:/staff_mysql/origin/upload/";

                $mail_file = iconv('utf-8', 'gbk', '專題企劃書.docx');
                $rel_mail_file = $rel_path +  $mail_file;
                echo $mail_file;
                $mail->addAttachment("C:/staff_mysql/origin/upload/ssss.docx","sb.docx");       // 添加附件
                 //$mail->addAttachment($rel_mail_file, 'sb.docx');    // 發送附件並且重命名

              

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