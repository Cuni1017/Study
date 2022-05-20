<?php



define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '1qaz2wsx');
define('DB_NAME', 'study');


$con = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);

function con()
{
    $con = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
    if (!$con) {
        echo "MySQL資料庫連接錯誤!<br/>";
        exit();
    } else {
        return $con;
    }
}

function select($sql)
{
    $result = con()->query($sql);
    return $result;
}
function f_array($result)
{
    return $result->fetch_array();
}
function f_assoc($result)
{
    return $result->fetch_assoc();
}

function totalnums($sql)
{
    $result = con()->query($sql);
    return $result->num_rows;
}
function utf($sql)
{
    $utf =  con()->query($sql);
    return $utf;
}
