<?php
$company_id = @$_GET["company_id"];
include '../../sql_function.php'; 
  $row_array = array
  (
    'level' => '通過'
  );
$sql_function = new sql_function('localhost','root','1qaz2wsx','study');
$sql_function -> update_me($table ="vacancies",$rows_array = $row_array, $key ="company_id", $id = 0);

?>




?>