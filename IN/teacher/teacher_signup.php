<html>

<head>
    <link rel="stylesheet" href="style/register.css">
</head>

<body>

    <form method="post" action="teacher_verification.php">
        <?php /*
        require_once "../../user_connect.php";
        $today = date("Ynj");

        $sql = " select count( * ) as num from company";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $num = $stmt->get_result()->fetch_assoc();
        $row_num = $num["num"];
        $com_num = "C" . (($today * 10000) + ($row_num + 1));
        echo $com_num;*/
        ?>
        <div>
            <input type="text" name="teacher_username">
            <label for="teacher_username">老師帳號</label>
        </div>
        <div>
            <input type="password" name="teacher_password">
            <label for="teacher_password">老師密碼</label>
        </div>
        <div>
            <input type="text" name="teacher_real_name">
            <label for="teacher_real_name">老師真名</label>
        </div>
        <div>
            <input type="text" name="teacher_email">
            <label for="teacher_email">老師email名稱</label>
        </div>

        <div>
            <input type="submit" value="新增公司">
        </div>
    </form>

     <?php



    ?>
</body>

</html>