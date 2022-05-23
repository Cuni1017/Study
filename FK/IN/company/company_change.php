<html>

<head>
    <link rel="stylesheet" href="style/register.css">
</head>

<body>

    <form method="post" action="">
        <?php
        require_once "../../sell_connect.php";
        $sql = "SELECT  `company_id`,`company_name`, `company_username`, `company_password`, `company_number`, `company_email`, `company_money`, `company_time`, `company_place`, `company_content`, `company_ work_experience`, `company_type`, `company_category`, `company_Education`, `company_ department`, `company_other`, `company_safe` FROM `company` ";
        $stmt = $con->prepare($sql);
        $stmt->bind_result($company_id, $company_name, $company_username, $company_password, $company_number, $company_email, $company_money, $company_time, $company_place, $company_content, $company_work_experience, $company_type, $company_Education, $company_category, $company_department, $company_other, $company_safe);
        $stmt->execute();
        ?>
        <?php while ($stmt->fetch()) {

        ?>
            <table border=1>
                <tr>
                    <th>公司名稱</th>
                    <th>公司帳號</th>
                    <th>公司密碼</th>
                    <th>公司電話號碼</th>
                    <th>公司email</th>
                    <th>公司薪水</th>
                    <th>公司上班時間</th>
                    <th>公司地點</th>
                    <th>公司內容</th>
                    <th>工作經驗要求</th>
                    <th>工作性質</th>
                    <th>應徵員工教育程度</th>
                    <th>職務類別</th>
                    <th>應徵員工科系限制</th>
                    <th>其他補充事項</th>
                    <th>員工保險</th>
                </tr>
                <tr>
                    <td><? echo  $company_name ?></td>
                    <td><? echo $company_username ?></td>
                    <td><? echo $company_password ?></td>
                    <td><? echo $company_number ?></td>
                    <td><? echo $company_email ?></td>
                    <td><? echo $company_money ?></td>
                    <td><? echo $company_time ?></td>
                    <td><? echo $company_place ?></td>
                    <td><? echo $company_content ?></td>
                    <td><? echo $company_work_experience ?></td>
                    <td><? echo $company_type ?></td>
                    <td><? echo $company_Education ?></td>
                    <td><? echo $company_category ?></td>
                    <td><? echo $company_department ?></td>
                    <td><? echo $company_other ?></td>
                    <td><? echo $company_safe ?></td>




                    <td><a href="project_delete.php?pro_id=<?= $rel_pro_id ?>">刪除專案</a></td>
                    <td><a href="project_update.php?pro_id=<?= $rel_pro_id ?>">更新專案</a></td>
                </tr>
            <?php } ?>

            </br>
            </table>
            </table>


</body>

</html>