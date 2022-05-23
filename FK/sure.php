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
    require_once "user_connect.php";
   
        if($verification_button == $ram_num){
            echo "驗證碼輸入成功,.3秒後回到登陸處";
            $date = date("ymd");
            $sql = " select count( * ) as num from user";
            $stmt=$con->prepare($sql);
            $stmt->execute();
            $num = $stmt->get_result()->fetch_assoc();
            $row_num = $num["num"];
            $pro_num = $row_num +1;
            $id = "U".(($date * 10000) + $pro_num);
            $one = '1';    
            echo $id;

            $sql1="INSERT INTO `user`(`user_id`, `user_name`, `user_password`, `user_email`, `user_level`) VALUES (?,?,?,?,?)";
            $stmt=$con->prepare($sql1);
            $stmt->bind_param('sssss',$id,$username,$password,$email,$one);
            $stmt->execute();

            $sql2="INSERT INTO `login`(`id`, `username`, `password`, `level`) VALUES (?,?,?,?)";
            $stmt=$con->prepare($sql2);
            $stmt->bind_param('ssss',$id,$username,$password,$one);
            $stmt->execute();
            header("Refresh:3;url=login.php");
        }
        elseif($verification_button != $ram_num){
            echo "驗證瑪輸入錯誤,請回註冊頁面重新登入";
            header("Refresh:2;url=register.php");
        }
        
    ?>
    </body>
   
        
    
   
</html>