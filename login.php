<html>

<head>
    <link rel="stylesheet" href="style/css/account.css">
    <link rel="stylesheet" href="style/css/style.css">
</head>

<body>
    <form action="Enter.php" method="post">
        <div class="AccountBox">
            <h1>登入</h1>
            <!-- 帳密輸入欄 -->
            <div class="Loginsection">
                <input class="Account_text" type="text" placeholder="Username" name="login_username">
                <a href="forgetPW.php">忘記密碼?</a>
                <input class="Account_text" type="password" placeholder="Password" name="login_password" /> <br> <br>
            </div>
            <!-- 註冊 提交 -->
            <div class="bottom_row">
                <a href="register_select.php">註冊</a>
                <input class="Submit_button " type="submit" value="提交" />
            </div>

            <!-- 回首頁 -->
            <a href="index.php"><img src="image/homeLogo.png" style="position: absolute; top: 5px; right: 5px;" width="30px"></a>
        </div>
    </form>
</body>
<?php


?>

</html>