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
    function sqlselect($sql){ 
        $result=$con->query($sql);
        return $result; 
        } 
        
    ?>
    </body>
   
        
    
   
</html>