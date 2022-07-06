<?php
require_once "../user_connect.php";
function select_me($table = null, $condition = "1", $order_by = "1", $fields = "*", $limit = "",$user_id){
    $sql = "SELECT {$fields} FROM {$table} WHERE {$condition} ORDER BY {$order_by} {$limit}";
    echo $sql;
    $stmt = con()->query($sql);
    //var_dump( $stmt);
    if($stmt -> num_rows <=0 ){ //計算資料是否存在資料庫
       echo "並沒有填履歷,將跳往履歷頁面,";
       header("Refresh:3;url=student_resume_modify.php?user_id=".$user_id);
    }else{
        return $stmt;
    }
}
function read_me($real_file,$file_name){
    header("Expires: 0");
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header('Cache-Control: pre-check=0, post-check=0, max-age=0', false);
    header("Pragma: no-cache");
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename={$file_name}");
    header('Content-Length: ' . filesize( $real_file));
    readfile( $real_file);
}

$user_id = @$_GET['user_id'];
$table = "`resume`";
$fields ="`path`, `file_name`";
$condition = "user_id = '".$user_id."'";
$resume_select = select_me($table, $condition , $order_by = "1", $fields, $limit = "",$user_id);



while($result = $resume_select -> fetch_array()){
    $path = $result["path"] ;
    $file_name = $result["file_name"];
    $real_file = $path.$file_name;
    if(is_object($result)){
        echo "資料為空直";
    }else{
        read_me($real_file,$file_name);
    }

}
?>



// Define headers
        // header("Cache-Control: public");
        // header("Content-Description: File Transfer");
        // header("Content-Disposition: attachment;filename = $file_name");
        // header("Content-Type: application/pdf");
        // header("Content-Transfer-Encoding: binary");
        
        // // Read the file
        //readfile($real_file);
        // readfile("{C:/staff_mysql/origin/upload/ss(1).pdf}");
        // header('Content-type: application/pdf');
        // header("Content-Disposition: attachment; filename={$file_name}");