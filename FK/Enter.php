<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once "user_connect.php";
    $test_username = @$_POST["login_username"];
    $test_password = @$_POST["login_password"];
    echo  $test_username;
    echo  $test_password;
    $sql = "SELECT `id`, `username`, `password`, `level` FROM `login` WHERE `username`= ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $test_username);
    $stmt->execute();
    $stmt->bind_result($id, $username, $password, $level);
    $stmt->fetch();
    echo $username;
    echo $password;
    
    $user_id = $id;
    if (($test_password) == "" && ($test_username) == "") {
        echo "帳號密碼沒寫,兩秒後返回登入畫面";
        header("Refresh:2;url=login.php");
    } elseif (($test_username) == "") {
        echo "帳號沒寫,兩秒後返回登入畫面";
        header("Refresh:2;url=login.php");
    } elseif (($test_password) == "") {
        echo "密碼沒寫,兩秒後返回登入畫面";
        header("Refresh:2;url=login.php");
    } elseif ($test_password != $password) { //當對應密碼不對時跳回index.html介面 
        echo ("密碼錯誤");
    ?>
        <a href="login.php">回上一頁</a>
    <?php
    } elseif ($test_username == $username && $test_password == $password) {


        switch ($level) {
            case 1:
                header('location:IN/student/student_index.php?user_id='.$user_id);
                break;
            case 2:
                header("location:IN/student/teacher_index.php?user_id=".$user_id);
                break;
            case 3:
                header("location:IN/student/company_index.php?user_id=".$user_id);
                break;
        }
    }

    ?>
</body>




</html>