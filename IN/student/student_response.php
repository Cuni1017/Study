<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php';
        include '../../sql_function.php'; 
    ?>
    
</head>

<body>
    <div id="wrap">
        <?php
        $user_id = @$_GET["user_id"];
        ?>

        <div id="content" style="height: 1300px;">
            <h1>意見反應</h1>

            <div id="responseBox">
                <ul>
                    <?php
                    $sql_function = new sql_function('localhost','root','1qaz2wsx','study');
                    $sql = "SELECT `chat_id`, `chat_maker`, `chat_subject`, `chat_content`, `chat_date` FROM `chat`  ";
                    $chat_data = $sql_function -> select_me($table = "`chat`", $condition = "1", $order_by = "1", $fields = "`chat_id`, `chat_maker`, `chat_subject`, `chat_content`, `chat_date`", $limit = "");
                    
                    foreach ($chat_data as $vlaue) {
                    ?>
                        <li>
                            <div class="author">作者：<? echo $vlaue["chat_maker"] ?></div>
                            <div class="article">主旨：<? echo $vlaue["chat_subject"] ?></div>
                            <div class="time">時間：<? echo $vlaue["chat_date"] ?></div>
                            <hr>
                            <div class="message"><? echo $vlaue["chat_content"] ?></div>
                        </li>
                    <?php } ?>
                </ul>

                <form class="leavecomment" action="student_response_input.php" method="post">
                    <div class="author">
                        <p>作者</p><input name="maker" type="text">
                    </div>
                    <div class="gist">
                        <p>主旨</p><input name="subject" type="text">
                        <br>
                    </div>
                    <div class="content">
                        <p>內容</p><textarea name="content" id="" cols="30" rows="10"></textarea>
                        <input type="submit" value="送出">
                    </div>
                </form>
            </div>
        </div> <!-- content -->
    </div> <!-- wrap -->
</body>

</html>