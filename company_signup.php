<html>
    <head>
        <link rel="stylesheet" href="style/company_register.css">
    </head>
    <body>
    
    
    <form method = "post" action = "" >
        <?php
            require_once "sell_connect.php";
            $today = date("Ynj");  

            $sql = " select count( * ) as num from company";
            $stmt=$con->prepare($sql);
            $stmt->execute();
            $num = $stmt->get_result()->fetch_assoc();
            $row_num = $num["num"];
            $com_num = "C".($today*10000).($row_num +1);
            echo $com_num;
        ?>
            <div class="RegisterBox">
                <!-- <h1 class="" style="font-size: 50px">Register</h1> -->
                <div>
                    <input class="Register_text" type="text" name="company_name">
                    <label for="company_name">公司名稱</label>
                </div>
                <div>
                    <input class="Register_text" type="text" name="company_username">
                    <label for="company_username">公司帳號</label>
                </div>
                <div>
                    <input class="Register_text" type="password" name="company_password">
                    <label for="company_password">公司密碼</label>
                </div>
                <div>
                    <input class="Register_text" type="text" name="company_number">
                    <label for="company_number">公司電話號碼</label>
                </div>

                <div>
                    <input class="Register_text" type="text" name="company_email">
                    <label for="company_email">公司email</label>
                </div>
            
                <div>
                    <input class="Register_text" type="text" name="company_money" >
                    <label for="company_money">公司薪水</label>
                </div>
                <div>
                    <input class="Register_text" type="text" name="company_time"  >
                    <label for="company_time">公司上班時間</label>
                </div>
                <div>
                    <input class="Register_text" type="text" name="company_place" >
                    <label for="company_place">公司地點</label>
                </div>
                <div>
                    <input class="Register_text" type="text" name="company_content" >
                    <label for="company_content">公司內容</label>
                </div>
                <div>
                    <input class="Register_text" type="text" name="company_work_experience">
                    <label for="company_work_experience">工作經驗要求</label>
                </div>
                <div>
                    <input class="Register_text" type="text" name="company_type">
                    <label for="company_type">工作性質</label>
                </div>
                <div>
                    <input class="Register_text" type="text" name="company_Education" >
                    <label for="company_Education">應徵員工教育程度</label>
                </div>
                <div>
                    <input class="Register_text" type="text" name="company_category" >
                    <label for="company_category">職務類別</label>
                </div>
                <div>
                    <input class="Register_text" type="text" name="company_department" >
                    <label for="company_department">應徵員工科系限制</label>
                </div>
                <div>
                    <input class="Register_text" type="text" name="company_other" >
                    <label for="company_other">其他補充事項</label>
                </div>
                <div>
                    <input class="Register_text" type="text" name="company_safe" >
                    <label for="company_safe">員工保險</label>
                </div>
                <div>
                    <input class="Submit_button" type = "submit" value = "新增公司">
                </div>
            </div> 
            <!-- RegisterBox -->
        </form>

        <?php
            require_once "sell_connect.php";
        
            $company_name = @$_POST["company_name"];
            $company_username = @$_POST["company_username"];
            $company_password = @$_POST["company_password"];
            $company_number = @$_POST["company_number"];
            $company_email = @$_POST["company_email"];
            $company_money = @$_POST["company_money"];
            $company_time = @$_POST["company_time"];
            $company_place = @$_POST["company_place"];
            $company_content = @$_POST["company_content"];
            $company_work_experience = @$_POST["company_work_experience"];
            $company_type= @$_POST["company_type"];
            $company_Education = @$_POST["company_Education"];
            $company_category = @$_POST["company_category"];
            $company_department = @$_POST["company_department"];
            $company_other = @$_POST["company_other"];
            $company_safe = @$_POST["company_safe"];
            $sql = "INSERT INTO `company` VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt=$con->prepare($sql);
            $stmt->bind_param("ssssisissssssssss",$com_num,$company_name,$company_username,$company_password,$company_number, $company_email,$company_money,$company_time,$company_place,$company_content,$company_work_experience,$company_type,$company_Education,$company_category,$company_department,$company_other,$company_safe);
            $stmt->execute();
        ?>
    </body>

</html>