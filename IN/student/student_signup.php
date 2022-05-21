<html>

<head>
    <link rel="stylesheet" href="../../style/css/register.css">
    <link rel="stylesheet" href="../../style/css/style.css">
</head>

<body>
    <form action="verification.php" method="post">
        <div class="RegisterBox">
            <h1 class="" style="font-size: 50px">學生註冊</h1>
            <!-- 註冊資料輸入欄 -->
            <input class="Register_text" type="text" placeholder="Username" name="username" /> <span>請輸入帳號</span> <br>
            <input class="Register_text" type="password" placeholder="Password" name="password" /> <span>請輸入密碼</span> <br>
            <input class="Register_text" type="text" placeholder="Email" name="email" /> <span>請輸入信箱</span> <br>

            <!-- 登入 提交 -->

            <div class="bottom_row">
                <input class="Submit_button" type="submit" value="Submit" />
            </div>

            <!-- 回登入 回首頁 -->
            <a href="../../register_select.php"><img src="../../image/return.png" style="position: absolute; top: 5px; left: 5px;" width="30px"></a>
            <a href="../../index.php"><img src="../../image/homeLogo.png" style="position: absolute; top: 5px; right: 5px;" width="30px"></a>
        </div>
    </form>
</body>

</html>