<html>

<head>
    <link rel="stylesheet" href="../../style/css/register.css">
</head>

<body>
    <?php
require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';
require '../../PHPMailer/vendor/autoload.php';
include "../user_connect.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$user_id = @$_POST['user_id'];
$company_id = @$_POST['company_id'];
$company_email = @$_POST['company_email'];
$email_content = @$_POST['email_content'];

echo $user_id ;
echo$company_id ;
echo$company_email ;
echo $email_content;
echo "</br>";
function select_me($table = null, $condition = "1", $order_by = "1", $fields = "*", $limit = "",$user_id){
    $sql = "SELECT {$fields} FROM {$table} WHERE {$condition} ORDER BY {$order_by} {$limit}";
    echo $sql;
    $stmt = con()->query($sql);
    //$num_row = $stmt -> num_rows > 0 ;
    //var_dump( $stmt);
    if($stmt -> num_rows <=0 ){
       echo "並沒有填履歷跳往履歷頁面,";
       header("Refresh:3;url=student_resume_modify.php?user_id=".$user_id);
    }else{
        return $stmt;
    }
}
 
function mail_go($company_email,$email_content,$real_file){
    $mail = new PHPMailer();
    $mail->CharSet="UTF-8";           //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置为 UTF-8
    $mail->IsSMTP();                  //设定使用SMTP服务
    $mail->SMTPAuth = true;           //启用SMTP验证功能
    $mail->SMTPSecure = "tls";        //启用SSL
    $mail->SMTPDebug = 2;
    $mail->Host = "smtp.gmail.com";    //SMTP服务器
    $mail->Port = 587;                //SMTP服务器的端口号
    $mail->Username = "mikeliu20010106@gmail.com";                                      //SMTP服务器用户名
    $mail->Password = "tlfmdusbamsvvpuz";                                     //SMTP服务器密码
    $mail->SetFrom('mikeliu20010106@gmail.com');                      //设置发件人地址和名称
    $mail->AddReplyTo("mikeliu20010106@gmail.com");                    //设置邮件回复人地址和名称
    $mail->Subject =  '應徵';
    $mail->Body    = '<h1>歡迎使用應徵</h1><h3>應徵內容：'. $email_content.'<span>' .  '</span></h3>' . date('Y-m-d H:i:s');
    $mail->AltBody = '應徵內容：'. $email_content. date('Y-m-d H:i:s');//可选项，向下兼容考虑
    $mail->MsgHTML('<html>helo</html>');                             //设置邮件内容
    $mail->AddAddress($company_email);
    //$mail->AddAttachment("C:/staff_mysql/origin/0616+暑修第3次公告.pdf");                    //附件
    $mail->AddAttachment($real_file);
    if(!$mail->Send()) {
        echo "发送失败：" . $mail->ErrorInfo;
    } else {
        echo "恭喜,郵件發送成功！";
    }
}

if ($email_content == "") {
    echo "內容沒填,五秒後返回註冊畫面";
    header("Refresh:3;url=student_email_controll.php?user_id=".$user_id."&company_id=".$company_id );

} else 
{   //"SELECT {$fields} FROM {$table} WHERE {$condition} ORDER BY {$order_by} {$limit}
    $fields = "`path`, `file_name`";
    $table = "`resume`";
    $condition = "`user_id` = '".$user_id."'";
    $resume_select = select_me( $table, $condition , $order_by = "1", $fields, $limit = "",$user_id);

    while($result = $resume_select -> fetch_array()){
        if(is_object($result)){
            echo "資料為空直";
         }else{
            $path = $result["path"] ;
            $file_name = $result["file_name"];
            $real_file = $path .$file_name;
            echo $real_file;
            mail_go($company_email,$email_content,$real_file);
         }

        //mail_go($company_email,$email_content,$real_file);
    }
}
//創建一個實例；傳遞 `true` 啟用異常
//include("PHPMailerAutoload.php"); //匯入PHPMailer類別       
// $mail = new PHPMailer();

// $mail->CharSet="UTF-8";           //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置为 UTF-8
// $mail->IsSMTP();                  //设定使用SMTP服务
// $mail->SMTPAuth = true;           //启用SMTP验证功能
// $mail->SMTPSecure = "tls";        //启用SSL
// $mail->SMTPDebug = 2;
// $mail->Host = "smtp.gmail.com";    //SMTP服务器
// $mail->Port = 587;                //SMTP服务器的端口号
// $mail->Username = "mikeliu20010106@gmail.com";                                      //SMTP服务器用户名
// $mail->Password = "tlfmdusbamsvvpuz";                                     //SMTP服务器密码
// $mail->SetFrom('mikeliu20010106@gmail.com');                      //设置发件人地址和名称
// $mail->AddReplyTo("mikeliu20010106@gmail.com");                    //设置邮件回复人地址和名称
// $mail->Subject = '邮件标题';                                      //设置邮件标题
// $mail->AltBody = "为了查看该邮件，请切换到支持HTML的邮件客户端"; //可选项，向下兼容考虑
// $mail->MsgHTML('<html>helo</html>');                             //设置邮件内容
// $mail->AddAddress('mikeliu20010106@gmail.com');
// $mail->AddAttachment("C:/staff_mysql/origin/0616+暑修第3次公告.pdf");                    //附件
// if(!$mail->Send()) {
//     echo "发送失败：" . $mail->ErrorInfo;
// } else {
//     echo "恭喜，邮件发送成功！";
// }

?>

</body>

</html>
