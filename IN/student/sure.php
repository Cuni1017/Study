<?php
    $verification_button = @$_POST["verification_button"];
    $username = @$_POST["username"];
    $password = @$_POST["password"];
    $ram_num = @$_POST["ram_num"];
    $email= @$_POST["email"];
    echo $verification_button ;
    echo $username ;
    echo $password ;
    echo $ram_num ;
    echo$email;
?>
<html>
    <head>
        
    </head>
    <body>
        
    <?php
    include '../../sql_function.php'; 
        $sql_function = new sql_function('localhost','root','1qaz2wsx','study');
        if($verification_button == $ram_num){
            echo "驗證碼輸入成功,.3秒後回到登陸處";
            $date = date("ymd");
            $sql = " select count( * ) as num from user";
            $user_num = $sql_function -> select_me($table = "`user`", $condition = "1", $order_by = "1", $fields = "count( * ) as num", $limit = "");
            $num = $user_num ->fetch_assoc();
            $row_num = $num["num"];
            $pro_num = $row_num +1;
            $id = "U".(($date * 10000) + $pro_num);
            $one = '1';    
            echo $id;

            $user_data = array
            (
                'user_id'      =>   $id,
                'user_name'    =>   $username,
                'user_password'=>   $password,
                'user_email'   =>   $email,
                'user_level'   =>   $one
            );
            $login_data = array
            (
                'id'      =>    $id,
                'username'=>    $username,
                'password'=>    $password,
                'level'   =>    $one
            );
            $sql_function -> insert_me($table = "`login`",$login_data);
            $sql_function -> insert_me($table = "`user`",$user_data);

            header("Refresh:3;url=../../login.php");
        }
        elseif($verification_button != $ram_num){
            echo "驗證瑪輸入錯誤,請回註冊頁面重新登入";
            header("Refresh:2;url=register.php");
        }
        
    ?>
    </body>
   
        
    
   
</html>