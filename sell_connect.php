<?php
$hn = "localhost";
$db = "study";
$un = "root";
$pw = "smhfjf96@";

$con= new mysqli($hn,$un,$pw,$db );
if( $con -> connect_error){ 
    die ("Fatal Error");
}


?>