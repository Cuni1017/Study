<html>

<head>
    <link rel="stylesheet" href="../../style/css/account.css">
    <link rel="stylesheet" href="../../style/css/account.css">

</head>


<?      require_once "../../user_connect.php";

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        //調用PHPMailer組件，此處是你自己的目錄，需要改寫。
        require '../../PHPMailer/src/Exception.php';
        require '../../PHPMailer/src/PHPMailer.php';
        require '../../PHPMailer/src/SMTP.php';
        $company_name = @$_POST["company_name"];
        $company_username = @$_POST["company_username"];
        $company_password = @$_POST["company_password"];
        $company_email = @$_POST["company_email"];
        $company_number = @$_POST["company_number"];
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
        function check_int($check){
            if(!ctype_digit($check)){
                echo "只能輸入數字";
                header("Refresh:3;url=company_signup.php");   
            }
        }

        function check_enmail($check){
            if(!filter_var($check, FILTER_VALIDATE_EMAIL)){
                echo "E-mail 填寫錯誤";
                header("Refresh:3;url=company_signup.php");
            }
            if(!ctype_digit($check)){
                echo "只能輸入數字";
                header("Refresh:3;url=company_signup.php");   
            }
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
        function select_me($table = null, $condition = "1", $order_by = "1", $fields = "*", $limit = ""){
            $sql = "SELECT {$fields} FROM {$table} WHERE {$condition} ORDER BY {$order_by} {$limit}";
            echo $sql;
            $stmt = con()->query($sql);
            if(is_object($stmt===null))return "資料查詢錯誤";
                return $stmt;
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
        function mail_go($company_email,$yanzhen,$company_name,$table1,$table2,$array1,$array2){
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
                insert_me($table1,$array1);
                insert_me($table2,$array2);
            }
        }
?>
<body>
    <form action="company_signup_sure.php" method="POST">

        <div class="accountBox">
            <h1 class="" style="font-size: 50px">Register</h1>
            <div class="verification">
                <input class="account_text" type="text" placeholder="驗證碼" name="verification_button" style="width: 300px; margin-left: -5px;" />

            </div>
            <?php
            //主程式
            check_int($company_number);//檢查是不是數字(int)
            check_enmail($check_email);//檢查是不是email(int)
            if ($company_name == "" ||  $company_username == "" || $company_password == "" || $company_number == "" || $company_email == ""  ) {
                echo "有東西沒填,五秒後返回註冊畫面";
                header("Refresh:5;url=company_signup.php");
            } elseif (select_me($table = "`login`", $condition = "`username` ='" . $company_username . "'", $order_by = "1", $fields = "*", $limit = "")-> num_rows >0) //如果資料庫記憶體在相同使用者名稱，則'$rs'接收到的變數為'true'所以大於1為真，則返回'使用者名稱已存在'
            {
                //var_dump($con);
                echo "帳號名稱已存在,三秒後版回註冊畫面，請重新註冊！";
                echo "<a href=company_signup.php>[註冊]<br></a>";
                header("Refresh:3;url=company_signup.php");

            } elseif (select_me($table = "`company`", $condition = "`company_name` ='" . $company_name . "'", $order_by = "1", $fields = "*", $limit = "")->num_rows > 0) //如果資料庫記憶體在相同使用者名稱，則'$rs'接收到的變數為'true'所以大於1為真，則返回'使用者名稱已存在'
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

                $company_data = array(
                    'company_id'        =>  $com_num,
                    'company_name'      =>  $company_name,
                    'company_username'  =>  $company_username,
                    'company_password'  =>  $company_password,
                    'company_number'    =>  $company_number,
                    'company_email'     =>  $company_email
                );
                $level = "3"; //重要不刪等級

                $login_data = array(
                    'id'        =>  $com_num,
                    'username'  =>  $company_username,
                    'password'  =>  $company_password,
                    'level'     =>  $level,
                );

                $yanzhen = codestr();

                mail_go($company_email , $yanzhen , $company_name , $table1 = "company" ,$table2 = "login", $company_data , $login_data);
            ?>

                <div class="bottom_row">
                    <input type="hidden" value="<? echo $com_num ?>" name="id">
                    <input type="hidden" value="<? echo $yanzhen ?>" name="ram_num">
                    <input class="Submit_button" type="submit" value="驗證" />
                </div>
            <?php } ?>
            <a href="../../login.php"><img src="../../image/return.png" style="position: absolute; top: 5px; left: 5px;" width="30px"></a>
            <a href="../../index.php"><img src="../../image/homeLogo.png" style="position: absolute; top: 5px; right: 5px;" width="30px"></a>
        </div>
    </form>
</body>

</html>








