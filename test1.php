
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <input type="button" name="register" value="註冊" onclick="window.location.href='login.php'"/>
    </body>
    <?php
        $date = date("ymd");
        //$sql = " select count( * ) as num from company";
        $sql = " SELECT * FROM `company` WHERE 1";
            $stmt=$con->query($sql);
            $num = $stmt->fetch_array();
            echo $num["company_name"];
            // $row_num = $num["num"];
            // $pro_num = $row_num +1;
            // $id = "U".($date * 10000) + $pro_num;
  
        $one=1;
    
    ?>
</html>