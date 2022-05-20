<?php
$hn = "localhost";
$db = "study";
$un = "root";
$pw = "1qaz2wsx";

$con= new mysqli($hn,$un,$pw,$db );
if( $con -> connect_error){ 
    die ("Fatal Error");
}
