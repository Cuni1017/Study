<html>
<head>
    <link rel="stylesheet" href="style/student_register.css">
</head>
<body>
    <form action="verification.php" method="post"> 
        <div class="RegisterBox">
            <h1 class="" style="font-size: 50px">Register</h1>
            <!-- 客戶端選擇 -->
                <select>
                    <option>請選擇身分</option>
                    <option>我是學生</option>
                    <option>我是廠商</option>
                    <option>我是教授</option>
                </select>
            
            <!-- 登入 提交 -->
            
            <div class="bottom_row">
                    <input class="Submit_button" type="submit" value="Submit" />
            </div>

            <!-- 回登入 回首頁 -->
            <a href="login.php"><img src="image/return.png" style="position: absolute; top: 5px; left: 5px;" width="30px" ></a>
            <a href="index.php"><img src="image/homeLogo.png" style="position: absolute; top: 5px; right: 5px;" width="30px" ></a>
        </div>
    </form>>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/index.js"></script>
</body>

</html>
