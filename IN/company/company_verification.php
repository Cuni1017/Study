<html>

<head>
    <link rel="stylesheet" href="../../style/css/account.css">
    <link rel="stylesheet" href="../../style/css/account.css">

</head>

<body>
    <form action="company_signup_sure.php" method="POST">

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
            require '../../PHPMailer/src/Exception.php';
            require '../../PHPMailer/src/PHPMailer.php';
            require '../../PHPMailer/src/SMTP.php';
            $company_name = @$_POST["company_name"];
            $company_username = @$_POST["company_username"];
            $company_password = @$_POST["company_password"];
            $company_number = @$_POST["company_number"];
            $company_email = @$_POST["company_email"];
            // $company_money = @$_POST["company_money"];
            // $company_time = @$_POST["company_time"];
            // $company_place = @$_POST["company_place"];
            // $company_content = @$_POST["company_content"];
            // $company_work_experience = @$_POST["company_work_experience"];
            // $company_type = @$_POST["company_type"];
            // $company_Education = @$_POST["company_Education"];
            // $company_department = @$_POST["company_department"];
            // $company_other = @$_POST["company_other"];
            // $company_safe = @$_POST["company_safe"];
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
                } else {
                    echo "恭喜,郵件發送成功！";
                }
            }
            function select_me($table = null, $condition = "1", $order_by = "1", $fields = "*", $limit = ""){
                $sql = "SELECT {$fields} FROM {$table} WHERE {$condition} ORDER BY {$order_by} {$limit}";
                echo $sql;
                $stmt = con()->query($sql);
                if(is_object($stmt===null))return "資料查詢錯誤";
                //$num_row = $stmt -> num_rows > 0 ;
                //var_dump( $stmt);
                // if($stmt -> num_rows >0 ){ //計算資料是否存在資料庫
                //    echo "帳號已經存在,";
                //    header("Refresh:3;url=student_resume_modify.php?user_id=".$user_id);
                // }else{
                    return $stmt;
                //}
            }

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

            if ($company_name == "" ||  $company_username == "" || $company_password == "" || $company_number == "" || $company_email == "" || $company_money == "" || $company_time == "" || $company_place == "" ) {
                echo "有東西沒填,五秒後返回註冊畫面";
                header("Refresh:5;url=company_signup.php");
            } elseif (select_me($table = "`login`", $condition = "`username` ='" . $company_username . "'", $order_by = "1", $fields = "*", $limit = "",$user_id)-> num_rows >0) //如果資料庫記憶體在相同使用者名稱，則'$rs'接收到的變數為'true'所以大於1為真，則返回'使用者名稱已存在'
            {
                //var_dump($con);
                echo "帳號名稱已存在,三秒後版回註冊畫面，請重新註冊！";
                echo "<a href=company_signup.php>[註冊]<br></a>";
                header("Refresh:3;url=company_signup.php");

            } elseif (select_me($table = "`company`", $condition = "`company_name` ='" . $company_name . "'", $order_by = "1", $fields = "*", $limit = "",$user_id)->num_rows > 0) //如果資料庫記憶體在相同使用者名稱，則'$rs'接收到的變數為'true'所以大於1為真，則返回'使用者名稱已存在'
            {
                //var_dump($con);
                echo "公司名稱已存在,三秒後版回註冊畫面，請重新註冊！";
                echo "<a href=company_signup.php>[註冊]<br></a>";
                header("Refresh:3;url=company_signup.php");

            }else{

                $today = date("Ynj");
                $nums = select_me($table = "`company`", $condition = "1", $order_by = "1", $fields = "count( * ) as num", $limit = "");
                var_dump($nums);
                $num = $nums->fetch_assoc();
                $row_num = $num["num"];
                $com_num = "C" . (($today * 10000) + ($row_num + 1));
                echo $com_num;
                //上面是計算公司id
                $yanzhen = codestr();
                mail_go($company_email,$yanzhen,$company_name);
            ?>

                <div class="bottom_row">
                    <input type="hidden" value="<? echo $com_num ?>" name="id">
                    <input type="hidden" value="<? echo $yanzhen ?>" name="ram_num">
                    <input class="Submit_button" type="submit" value="驗證" />
                </div>
                <?php

                $sql = "INSERT INTO `company`(`company_id`, `company_name`, `company_username`, `company_password`, `company_number`, `company_email`, `company_money`, `company_time`, `company_place`, `company_content`, `company_ work_experience`, `company_type`, `company_Education`, `company_ department`, `company_other`, `company_safe`, `level`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $company_data = array(
                    'company_id'        =>  $com_num,
                    'company_name'      =>  $company_name,
                    'company_username'  =>  $company_username,
                    'company_password'  =>  $company_password,
                    'company_number'    =>  $company_number,
                    'company_email'     =>  $company_email
                );
                insert_me($table = "`company`",$company_data);


                $level = "3"; //重要不刪
                $login_data = array(
                    'id'        =>  $com_num,
                    'username'  =>  $company_username,
                    'password'  =>  $company_password,
                    'level'     =>  $level,
                );
                insert_me($table = "`login`",$login_data);

            }
                ?>
            <?php

            


            // $today = date("Ynj");
            // $sql = " select count( * ) as num from company";
            // $stmt = $con->prepare($sql);
            // $stmt->execute();
            // $num = $stmt->get_result()->fetch_assoc();
            // $row_num = $num["num"];
            // $com_num = "C" . (($today * 10000) + ($row_num + 1));
            // echo $com_num;



            // $mail = new PHPMailer(true);       // Passing `true` enables exceptions
            // try {
            //     //服務器配置
            //     $mail->IsSMTP(); //設定使用SMTP方式寄信
            //     $mail->SMTPAuth = true; //設定SMTP需要驗證
            //     $mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線
            //     $mail->Host = "smtp.gmail.com"; //Gamil的SMTP主機
            //     $mail->Port = 465; //Gamil的SMTP主機的埠號(Gmail為465)。
            //     $mail->CharSet = "utf-8"; //郵件編碼
            //     $mail->Username = "mikeliu20010106@gmail.com"; //Gamil帳號
            //     $mail->Password = "mikeliu900106"; //Gmail密碼
            //     $mail->From = "mikeliu20010106@gmail.com"; //寄件者信箱
            //     $mail->FromName = "liu mike"; //寄件者姓名
            //     $mail->AddAddress($company_email); //收件者郵件及名稱
            //     // $mail->addAttachment('../xy.zip');         // 添加附件
            //     // $mail->addAttachment('../thumb-1.jpg', 'new.jpg');    // 發送附件並且重命名

            //     $yanzhen = codestr();  //此處為調用隨機驗證碼函數（按照自己實際函數名改寫）

            //     //Content
            //     $mail->isHTML(true);                                  // 是否以HTML文檔格式發送  發送後客戶端可直接顯示對應HTML內容
            //     $mail->Subject = $company_name . '身份登錄驗證';
            //     $mail->Body    = '<h1>歡迎使用傻逼往</h1><h3>您的身份驗證碼是：<span>' . $yanzhen . '</span></h3>' . date('Y-m-d H:i:s');
            //     $mail->AltBody = '歡迎使傻逼往,您的身份驗證碼是：' . $yanzhen . date('Y-m-d H:i:s');

            //     $mail->send();

            // ?>

            //     <!-- 註冊資料輸入欄 -->

            //     <!-- 登入 提交 -->
            <!-- //     <div class="bottom_row">
            //         <input type="hidden" value="<? echo $com_num ?>" name="id">
            //         <input type="hidden" value="<? echo $yanzhen ?>" name="ram_num">
            //         <input class="Submit_button" type="submit" value="驗證" />
            //     </div> -->
            //     <?php
            //     $sql = " select count( * ) as num from company";
            //     $stmt = $con->prepare($sql);
            //     $stmt->execute();
            //     $num = $stmt->get_result()->fetch_assoc();
            //     $row_num = $num["num"];
            //     $com_num = "C" . (($today * 10000) + ($row_num + 1));
            //     echo $com_num;



            //     $sql = ("SET NAMES 'UTF8'");
            //     $total = $con->query($sql);

            //     $sql = "INSERT INTO `company`(`company_id`, `company_name`, `company_username`, `company_password`, `company_number`, `company_email`, `company_money`, `company_time`, `company_place`, `company_content`, `company_ work_experience`, `company_type`, `company_Education`, `company_ department`, `company_other`, `company_safe`, `level`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            //     $stmt = $con->prepare($sql);
            //     $stmt->bind_param("ssssissssssssssss", $com_num, $company_name, $company_username, $company_password, $company_number, $company_email, $company_money, $company_time, $company_place, $company_content, $company_work_experience, $company_type, $company_Education, $company_department, $company_other, $company_safe, $level);
            //     $stmt->execute();

            //     $sql = ("SET NAMES 'UTF8'");
            //     $total = $con->query($sql);
            //     $sql1 = "INSERT INTO `login`(`id`, `username`, `password`, `level`) VALUES ('" . $com_num . "','" . $company_username . "','" . $company_password . "','" . $level . "')";
            //     $stmt = $con->prepare($sql1);
            //     $stmt->execute();
            //     ?>
            // <?php
            //     echo '驗證郵件發送成功，請注意查收！';
            // } catch (Exception $e) {
            //     echo '郵件發送失敗,請重試';
            // }
            // ?>
            <!-- 回登入 回首頁 -->
            <a href="../../login.php"><img src="../../image/return.png" style="position: absolute; top: 5px; left: 5px;" width="30px"></a>
            <a href="../../index.php"><img src="../../image/homeLogo.png" style="position: absolute; top: 5px; right: 5px;" width="30px"></a>
        </div>
    </form>
</body>

</html>








