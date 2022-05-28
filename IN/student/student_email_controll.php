<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
</head>

<body>
    <?php require_once "user_connect.php";
    $user_id = @$_GET["user_id"];
    ?>
    <div id="wrap">
        <div id="content" style="background-color: #ddd">
            <h1>寄出履歷</h1>
            <form method="POST" action="student_email_go.php">
                <div id="emailBox">
                    <div class="Towho">
                        <p>公司：</p><span>公司名稱</span><br>
                        <p>信箱：</p><span><input type="email" value="service@company.com"></span>
                    </div>
                    <div class="Content">
                        <label for="email_content">Email 內容填寫：</label><br><br>
                        <textarea name="email_content"></textarea>
                        <input type="file">
                        <br>
                    </div>
                    <input type="submit" class="btn" value="寄出">
                </div>
            </form>
        </div> <!-- content -->
    </div> <!-- wrap -->
</body>

</html>