<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
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
                    // include "../../user_connect.php";
                    function select_me($table = null, $condition = "1", $order_by = "1", $fields = "*", $limit = ""){
                        $sql = "SELECT {$fields} FROM {$table} WHERE {$condition} ORDER BY {$order_by} {$limit}";
                        echo $sql;
                        $stmt = con()->query($sql);
                        if(is_object($stmt===null))return "資料查詢錯誤";
                            return $stmt;
                    }
                    $sql = "SELECT `chat_id`, `chat_maker`, `chat_subject`, `chat_content`, `chat_date` FROM `chat`  ";
                    $chat_data = select_me($table = "`chat`", $condition = "1", $order_by = "1", $fields = "`chat_id`, `chat_maker`, `chat_subject`, `chat_content`, `chat_date`", $limit = "");
                    
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