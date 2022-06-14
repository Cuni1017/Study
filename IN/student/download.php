<?php
require_once "../user_connect.php";
$user_id = @$_GET['user_id'];
$sql = "SELECT `path`, `file_name` FROM `resume` WHERE user_id = '".$user_id."'";
$stmt=$con->prepare($sql);
$stmt->execute();
$stmt->bind_result($path, $file_name);

while($stmt -> fetch()){
    $real_file = $path.$file_name;
    echo $real_file;
    
    if(!empty($file_name) ){
        // Define headers
        // header("Cache-Control: public");
        // header("Content-Description: File Transfer");
        // header("Content-Disposition: attachment;filename = $file_name");
        // header("Content-Type: application/pdf");
        // header("Content-Transfer-Encoding: binary");
        
        // // Read the file
        // readfile($real_file);
        // header("Expires: 0");
        // header("Cache-Control: no-cache, no-store, must-revalidate");
        // header('Cache-Control: pre-check=0, post-check=0, max-age=0', false);
        // header("Pragma: no-cache");
        // header("Content-type: application/octet-stream");
        // header("Content-Disposition: attachment; filename={$file_name}");
        // header('Content-Length: ' . filesize("C:/staff_mysql/origin/upload/ss (1).pdf"));

        // readfile("{C:/staff_mysql/origin/upload/ss (1).pdf}");
        header('Content-type: application/pdf');
        header('Content-Disposition: attachment; filename='$file_name.');
        readfile($real_file);
        exit;
    }else{
        echo 'The file does not exist.';
    }

}
?>