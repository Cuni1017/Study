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
include "../../sql_function.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$user_id = "U2206020002";
$sql_function = new sql_function('localhost','root','1qaz2wsx','study');
        $resume_data = array(
            'user_id'  =>   $user_id,
            'name'     =>   $name,
            'sex'      =>   $sex,
            'birthday' =>   $birthday,
            'email'    =>   $email,
            'contact'  =>   $contact,
            'phone'    =>   $phone, 
            'home'     =>   $home, 
            'other'    =>   $other, 
            'county'   =>   $county, 
            'district' =>   $district, 
            'address'  =>   $address, 
            'path'     =>   $file_path,
            'file_name'=>   $insert_name
        );
        $sql_function -> update_me($table= "`resume`",$rows_array = $resume_data,$key= "user_id",$id = $user_id);?>
        <br>