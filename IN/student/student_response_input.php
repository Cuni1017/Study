
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <input type="button" name="register" value="註冊" onclick="window.location.href='login.php'"/>
    </body>
    <?php
        include "../user_connect.php";
        $maker = @$_POST['maker'];
        $subject = @$_POST['subject'];
        $content = @$_POST['content'];
        
        if($maker == "" && $subject == "" &&  $content == ""){
            echo "全部沒填,五秒後返回註冊畫面";
            header("Refresh:5;url=student_response.php");
        }elseif($subject == "" && $content == ""){
            echo "大綱和內容都為空,五秒後返回心得填寫畫面";
            header("Refresh:5;url=student_response.php");
        }
        elseif($maker=="" ){
            echo "作者不得為空,五秒後返回心得填寫畫面";
            header("Refresh:5;url=student_response.php");     
        }elseif($content == ""){
            echo "大綱不得為空,五秒後返回心得填寫畫面";
            header("Refresh:5;url=student_response.php");
        }
        elseif(isset($maker) == true && isset($subject) == true &&  isset($content) == true)//如果資料庫記憶體在相同使用者名稱，則'$rs'接收到的變數為'true'所以大於1為真，則返回'使用者名稱已存在'
        {
        $date = date("ymd");
        $datetime =  date("Y-m-d H:i:s");
        $sql = " select count( * ) as num from chat";
        $stmt=$con->query($sql);
        $num = $stmt->fetch_array();
        $row_num = $num["num"];
        //echo $row_num;
        //var_dump($date);
        $pro_num = $row_num +1;
        //echo $pro_num;
        //$id = ($date * 10000) + $pro_num;
       
        echo "<br>".$id;
        $rel_id = "CH".$id;
        //echo $rel_id;
        //$id = "CH".($date * 10000) + $pro_num;
  
        $sql = "INSERT INTO `chat`(`chat_id`, `chat_maker`, `chat_subject`, `chat_content`, `chat_date`) VALUES (?,?,?,?,?)";
        $stmt=$con->prepare($sql);
        $stmt->bind_param("sssss",$rel_id,$maker,$subject,$content,$datetime);
        $stmt->execute();
        header("location:student_response.php");
        }
    ?>
</html>