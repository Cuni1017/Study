<html>

<head>
    <link rel="stylesheet" href="style/dist/forgetPW.css">
</head>

<body>
    <form action="action.js">
        <div class="RPWBox">
            <h1 style="font-size: 50px;">Retrieve password</h1>
            <!-- 帳密輸入欄 -->
            <p style="font-size: 20px;">請輸入你的電子郵件地址以找回帳號密碼。</p>
            <div class="Email_row">
                <input class="RPW_text" type="text" placeholder="Email" /> <br>
            </div>

            <div class="verification">
                <input class="RPW_text" type="text" placeholder="驗證碼" style="width: 300px; margin-left: -5px;" />
                <span> <input class="verification_button" type="submit" style="display: inline-block" value="獲取驗證碼"></span> <br>
            </div>

            <div class="bottom_row">
                <!-- <a href="login.html" class="login" style="border-radius: 35px; color: #333; font-weight: bold;">Register</a>  -->
                <input class="Submit_button" type="submit" value="Submit" />
            </div>
            <!-- 回登入 回首頁 -->
            <a href="login.php"><img src="image/return.png" style="position: absolute; top: 5px; left: 5px;" width="30px"></a>
            <a href="index.php"><img src="image/homeLogo.png" style="position: absolute; top: 5px; right: 5px;" width="30px"></a>
        </div>
    </form>
</body>

</html>