<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <input type="button" name="register" value="註冊" onclick="window.location.href='login.php'" />
</body>
<?php
include '../../sql_function.php';
$maker = @$_POST['maker'];
$subject = @$_POST['subject'];
$content = @$_POST['content'];

$sql_function = new sql_function('localhost','root','1qaz2wsx','study');
if ($maker == "" && $subject == "" &&  $content == "") {
    echo "全部沒填,五秒後返回註冊畫面";
    header("Refresh:5;url=student_response.php");
} elseif ($subject == "" && $content == "") {
    echo "大綱和內容都為空,五秒後返回心得填寫畫面";
    header("Refresh:5;url=student_response.php");
} elseif ($maker == "") {
    echo "作者不得為空,五秒後返回心得填寫畫面";
    header("Refresh:5;url=student_response.php");
} elseif ($content == "") {
    echo "大綱不得為空,五秒後返回心得填寫畫面";
    header("Refresh:5;url=student_response.php");
} elseif (isset($maker) == true && isset($subject) == true &&  isset($content) == true) //如果資料庫記憶體在相同使用者名稱，則'$rs'接收到的變數為'true'所以大於1為真，則返回'使用者名稱已存在'
{
    $date = date("ymd");
    $datetime =  date("Y-m-d H:i:s");
    $chat_nums = $sql_function -> select_me($table = "chat", $condition = "1", $order_by = "1", $fields = "count( * ) as num", $limit = "");
    $num = $chat_nums->fetch_array();
    $row_num = $num["num"];
    //echo $row_num;
    //var_dump($date);
    $pro_num = $row_num + 1;
    //echo $pro_num;
    $id = ($date * 10000) + $pro_num;

    echo "<br>" . $id;
    $rel_id = "CH" . $id;
    //echo $rel_id;
    //$id = "CH".($date * 10000) + $pro_num;

    $sql = "INSERT INTO `chat`(`chat_id`, `chat_maker`, `chat_subject`, `chat_content`, `chat_date`) VALUES (?,?,?,?,?)";
    $chat_data = array
    (
        'chat_id'       =>  $rel_id ,
        'chat_maker'    =>  $maker  ,
        'chat_subject'  =>  $subject,
        'chat_content'  =>  $content,
        'chat_date'     =>  $date   
    );
    $sql_function -> insert_me($table = "`chat`",$data_array = $chat_data);
    header("location:student_response.php");
}
?>

</html>