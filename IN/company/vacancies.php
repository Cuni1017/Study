<form method="post" action="company_verification.php">
        <?php /*
        require_once "../../user_connect.php";
        $today = date("Ynj");

        $sql = " select count( * ) as num from company";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $num = $stmt->get_result()->fetch_assoc();
        $row_num = $num["num"];
        $com_num = "C" . (($today * 10000) + ($row_num + 1));
        echo $com_num;*/
        ?>

        <div class="AccountBox CPN_RegisterBox">
            <h1>廠商註冊</h1>
            <!-- 註冊資料輸入欄 -->
            <!-- 基本資料 -->
            <ul class="Section">
                <h3>公司基本資料</h3>
                <li>
                    <label for="compamny_name">公司名稱</label>
                    <input type="text" name="company_name" class="Account_text" style="width: 500px" placeholder="請輸入您的公司名稱">
                </li>
                <li class="li-inline" style="margin-left: -25px">
                    <label calss="" for="company_type">行業類別</label>
                    <input type="text" name="company_type" class="Account_text" placeholder="請輸入公司行業類別">
                </li>
                <li class="li-inline">
                    <label for="company_number">公司電話</label>
                    <input type="text" name="company_number" class="Account_text" placeholder="請輸入公司電話">
                </li>
                <li>
                    <label for="company_place">公司地點</label>
                    <input type="text" name="company_place" class="Account_text" style="width: 500px" placeholder="請輸入地址">
                </li>

                <li>
                    <label for="company_email">電子信箱</label>
                    <input type="text" name="company_email" class="Account_text" placeholder="請輸入您的 E-mail/電子信箱">
                </li>
                <li class="li-inline" style="margin-left: -25px">
                    <label for="company_username">帳號</label>
                    <input type="text" name="company_username" class="Account_text" placeholder="請輸入帳號">
                </li>
                <li class="li-inline">
                    <label for="company_password">密碼</label> <!-- 之後做按鈕讓密碼可以暫時顯示 -->
                    <input type="password" name="company_password" class="Account_text" placeholder="請輸入密碼">
                </li>
                <!-- 需求 -->
                <hr>
                <h3>徵才需求</h3>
                <li>
                    <label for="company_content">工作內容</label>
                    <input type="text" name="company_content" class="Account_text" style="width: 500px" placeholder="請輸入工作內容">
                </li>
                <li class="li-inline" style="margin-left: -25px">
                    <label for="company_time">工作時間</label>
                    <input type="text" name="company_time" class="Account_text" placeholder="請輸入工作時間">
                </li>
                <li class=" li-inline">
                    <label for="company_money">工作待遇</label>
                    <input type="text" name="company_money" class="Account_text" placeholder="請輸入工作待遇">
                </li>
                <li class="li-inline" style="margin-left: -25px">
                    <label for="company_work_experience">工作經驗要求</label>
                    <input type="text" name="company_work_experience" class="Account_text" placeholder="工作經驗要求">
                </li>
                <li class="li-inline">
                    <label for="company_department">科系需求</label>
                    <input type="text" name="company_department" class="Account_text" placeholder="科系需求限制">
                </li>
                <li class="li-inline" style="margin-left: -25px">
                    <label for="company_Education">教育程度</label>
                    <input type="text" name="company_Education" class="Account_text" placeholder="教育程度限制">
                </li>
                <li class="li-inline">
                    <label for="company_safe">員工保險</label>
                    <input type="text" name="company_safe" class="Account_text" placeholder="請輸入員工保險">
                </li>
                <li>
                    <label for="company_other">其他補充事項</label>
                    <textarea type="text" name="company_other" class="Account_text" placeholder="其他補充事項"></textarea>
                </li>
            </ul>

            <!-- <input type="submit" value="新增公司"> -->
            <!-- 登入 提交 -->
            <div class="bottom_row">
                <input class="submit_button" type="submit" value="提交" />
            </div>