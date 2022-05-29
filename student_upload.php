<?php
include 'user_connect.php';

$name = @$_POST["name"]; 
$sex = @$_POST["sex"]; 
$birthday = @$_POST["birthday"]; 
$email = @$_POST["email"]; 
$contact = @$_POST["contact"]; 
$phone= @$_POST["phone"]; 
$home = @$_POST["home"]; 
$other = @$_POST["other"]; 
$county = @$_POST["county"]; 
$district = @$_POST["district"]; 
$address = @$_POST["address"]; 
$user_id = @$_POST["user_id"]; 
 echo $name."<br>";
 echo $sex."<br>";
 echo $birthday."<br>";
 echo $email."<br>";
 echo $contact."<br>";
 echo $phone."<br>";
 echo $home."<br>";
 echo $other."<br>";
 echo $county."<br>";
 echo $district."<br>";
 echo $address."<br>";
 echo $user_id."<br>"  ;

echo $_FILES["file_Upload"]["tmp_name"];

$uploadfile = iconv("utf-8", "big5", $_FILES["file_Upload"]["name"]);

if ($_FILES["file_Upload"]["error"] == 0) {

    if (move_uploaded_file($_FILES["file_Upload"]["tmp_name"], "C:/staff_mysql/origin/upload/" . $uploadfile)) {
        echo "上傳成功<br />";
        echo "檔案名稱：" . $_FILES["file_Upload"]["name"] . "<br />";
        echo "檔案類型：" . $_FILES["file_Upload"]["type"] . "<br />";
        echo "檔案大小：" . $_FILES["file_Upload"]["size"] . "<br />";
    } else {
        echo "上傳失敗! " ; 
        echo "<a href='javascript:window.history.back();'>回上一頁</a>";
    }
}



/*
# 檢查檔案是否上傳成功
if ($_FILES['my_file']['error'] === UPLOAD_ERR_OK){
  echo '檔案名稱: ' . $_FILES['my_file']['name'] . '<br/>';
  echo '檔案類型: ' . $_FILES['my_file']['type'] . '<br/>';
  echo '檔案大小: ' . ($_FILES['my_file']['size'] / 1024) . ' KB<br/>';
  echo '暫存名稱: ' . $_FILES['my_file']['tmp_name'] . '<br/>';

  # 檢查檔案是否已經存在
  if (file_exists('upload/' . $_FILES['my_file']['name'])){
    echo '檔案已存在。<br/>';
  } else {
    $file = $_FILES['my_file']['tmp_name'];
    $dest = 'C:/staff_mysql/origin/uploadupload/' . $_FILES['my_file']['name'];

    # 將檔案移至指定位置
    move_uploaded_file($file, $dest);   
  }
} else {
  echo '錯誤代碼：' . $_FILES['my_file']['error'] . '<br/>';
}
?>
<?php
 /*
//向文件表添加一条数据
$uid = $_SESSION["uid"];
$lujing = iconv("gb2312","utf-8",$filename);
$urls = "/".$lujing;
$times = date("Y-m-d H:i:s");
$name = $_FILES["file"]["name"];
 
$sql = "insert into wenjian values('','{$uid}','{$urls}','{$times}','{$name}')";
 
$db->Query($sql,0);
 */
