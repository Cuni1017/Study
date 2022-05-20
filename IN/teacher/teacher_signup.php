<html>
    <head>
        <link rel="stylesheet" href="style/register.css">
    </head>
    <body>
    
    <form method = "post" action = "" >
        
        
            <div>
                <input type="text" name="teacher_username">
                <label for="teacher_username">老師帳號</label>
            </div>
            <div>
                <input type="text" name="teacher_password">
                <label for="company_username">老師密碼</label>
            </div>
            <div>
                <input type="password" name="teacher_real_name">
                <label for="teacher_real_name">老師真名</label>
            </div>
            <div>
                <input type="text" name="teacher_email">
                <label for="teacher_email">老師email</label>
            </div>
            <div>
                <input type = "submit" value = "新增公司">
            </div>
        </form>

        <?php
    
            require_once "user_connect.php";
            $today = date("Ynj");  

            $sql = " select count( * ) as num from teacher";
            $stmt=$con->prepare($sql);
            $stmt->execute();
            $num = $stmt->get_result()->fetch_assoc();
            $row_num = $num["num"];
            $id= "T".($today*10000).($row_num +1);
            echo $id;
            $level = 3;
        
            
            $teacher_username = @$_POST["teacher_username"];
            $teacher_password = @$_POST["teacher_password"];
            $teacher_real_name = @$_POST["teacher_real_name"];
            $teacher_email = @$_POST["teacher_email"];

            
            $sql = "INSERT INTO `teacher`(`teacher_id`, `teacher_username`, `teacher_password`, `teacher_real_name`, `teacher_email`, `teacher_level`) VALUES ('".$id."','".$teacher_username."','".$teacher_password."','".$teacher_real_name."','".$teacher_email."','".$level."')";
            $stmt=$con->prepare($sql);
            $stmt->execute();

            $sql = "INSERT INTO `login`(`id`, `username`, `password`, `level`) VALUES  VALUES ('".$id."','".$teacher_username."','".$teacher_password."','".$level."')";
            $stmt=$con->prepare($sql);
            $stmt->execute();
        ?>
    </body>

</html>