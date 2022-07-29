<!DOCTYPE html>
<html>

<head>
<?php 
    include '../teacher_index.php'; 

    ?>
</head>

<body>
    <?php
    $user_id = @$_GET["user_id"];
    $sql_function = new sql_function('localhost','root','1qaz2wsx','study');
    $vacancies_data = $sql_function -> select_me($table = "`company` Inner join `vacancies` on  vacancies.company_id  =   company.company_id", $condition = " vacancies.level = '沒審核'", $order_by = "1", $fields = "
    company.company_id,company.company_name", $limit = "");
    //$sql = "SELECT `company_id`, `company_name`  FROM `company` Limit  10";
    
    ?>
    
    <body>
        <div id="wrap">
            <div id="content">
                <h1>實習應徵</h1>
                <div id="applyBox">
                    <?php foreach($vacancies_data as $value) { ?>
                        <div class="jobscont">
                            <div class="job_img">//-
                                <img src="../../image/content2.jpg"></img>
                            </div>
                            <div class="job_t">
                                <p><?php echo $value["company_name"] ?></p>
                            </div>
                            <a href="vacancies_deal.php?user_id=<?= $user_id ?>&company_id=<?= $value["company_id"] ?>&company_name=<?= $value["company_name"]?>"><img src="../../image/info-circle.svg"></a>
                            <!-- <img src="image/info-circle.svg" class="moreInfobtn"> -->
                        </div>      
                    <?php } ?>
                </div>
            </div> <!-- content -->
        </div> <!-- wrap -->
    </body>
    
    </html>