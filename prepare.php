// $sql = " select count( * ) as num from company";
                // $stmt = $con->prepare($sql);
                // $stmt->execute();
                // $num = $stmt->get_result()->fetch_assoc();
                // $row_num = $num["num"];
                // $com_num = "C" . (($today * 10000) + ($row_num + 1));
                // echo $com_num;


        function mail_go($company_email,$yanzhen,$company_name){
            $mail = new PHPMailer();
            $mail->CharSet="UTF-8";           //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置为 UTF-8
            $mail->IsSMTP();                  //设定使用SMTP服务
            $mail->SMTPAuth = true;           //启用SMTP验证功能
            $mail->SMTPSecure = "tls";        //启用SSL
            $mail->SMTPDebug = 2;
            $mail->Host = "smtp.gmail.com";    //SMTP服务器
            $mail->Port = 587;                //SMTP服务器的端口号
            $mail->Username = "mikeliu20010106@gmail.com";                                      //SMTP服务器用户名
            $mail->Password = "tlfmdusbamsvvpuz";      //google應用密碼
            $mail->SetFrom('mikeliu20010106@gmail.com');                      //设置发件人地址和名称
            $mail->AddReplyTo("mikeliu20010106@gmail.com");          
            $mail->isHTML(true);  
            //$yanzhen = codestr();  //此處為調用隨機驗證碼函數（按照自己實際函數名改寫）                               // 是否以HTML文檔格式發送  發送後客戶端可直接顯示對應HTML內容
            $mail->Subject = $company_name . '身份登錄驗證';
            $mail->Body    = '<h1>歡迎使用傻逼往</h1><h3>您的身份驗證碼是：<span>' . $yanzhen . '</span></h3>' . date('Y-m-d H:i:s');
            $mail->AltBody = '歡迎使傻逼往,您的身份驗證碼是：' . $yanzhen . date('Y-m-d H:i:s');
            $mail->AddAddress($company_email);
            if(!$mail->Send()) {
                echo "发送失败：" . $mail->ErrorInfo;
                header("Refresh:3;url=company_signup.php");
            } else {
                echo "恭喜,郵件發送成功！";
                
            }
        }


        function delete_me($table = null, $column = null, $id = null){
    if ($table===null) return false;
    if($id===null) return false;
    if($column===null) return false;
    con()->query("DELETE FROM $table WHERE " . $column . " = " . "\"" . $id . "\"");
}