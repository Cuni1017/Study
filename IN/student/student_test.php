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
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer 的自動加載器


//創建一個實例；傳遞 `true` 啟用異常
//include("PHPMailerAutoload.php"); //匯入PHPMailer類別       
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
$mail->Subject = '邮件标题';                                      //设置邮件标题
$mail->AltBody = "为了查看该邮件，请切换到支持HTML的邮件客户端"; //可选项，向下兼容考虑
$mail->MsgHTML('<html>helo</html>');                             //设置邮件内容
$mail->AddAddress('mikeliu20010106@gmail.com');
//$mail->AddAttachment("images/phpmailer.gif");                    //附件
if(!$mail->Send()) {
    echo "发送失败：" . $mail->ErrorInfo;
} else {
    echo "恭喜，邮件发送成功！";
}

?>
?>
</body>

</html>
*/