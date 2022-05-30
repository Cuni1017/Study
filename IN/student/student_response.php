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

            <div class="messageboard">
                <div id="responseBox">
                    <ul>
                        <?php
                        // include "../../user_connect.php";
                        $sql1 = "SELECT `chat_id`, `chat_maker`, `chat_subject`, `chat_content`, `chat_date` FROM `chat`  ";
                        $total = select($sql1);

                        $sql = "SELECT `chat_id`, `chat_maker`, `chat_subject`, `chat_content`, `chat_date` FROM `chat`  ";
                        $total = select($sql);
                        while ($num = f_array($total)) {
                        ?>
                            <li>
                                <div class="author">作者：<? echo $num["chat_maker"] ?></div>
                                <div class="article">主旨：<? echo $num["chat_subject"] ?></div>
                                <div class="time">時間：<? echo $num["chat_date"] ?></div>
                                <hr>
                                <div class="message"><? echo $num["chat_content"] ?></div>
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