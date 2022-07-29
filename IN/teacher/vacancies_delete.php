<?php
$company_id = @$_GET["company_id"];
include '../../sql_function.php'; 
$sql_function = new sql_function('localhost','root','1qaz2wsx','study');
$sql_function -> delete_me($table ="vacancies", $key ="company_id", $id = $company_id);

?>




?>