<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
</head>

<body>
    <? $user_id = @$_GET["user_id"]; ?>
    <div id="wrap">
        <div id="content">
            <h1>履歷維護</h1>
            <form enctype="multipart/form-data" method = "post" action= "student_upload.php" >
            <div id="resumeBox">
                <div class="profile">
                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <p>姓　　名</p>
                        </div>
                        <div class="profile-info-value">
                            <input type="text" name = "name">
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <p>性　　別</p>
                        </div>
                        <div class="profile-info-value">
                            <select name="sex" id="">
                                <option disabled>請選擇您的性別</option>
                                <option value="boy">男</option>
                                <option value="girl">女</option>
                                <option value="sex_other">其他</option>
                            </select>
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <p>出生日期</p>
                        </div>
                        <div class="profile-info-value">
                            <input type="date" name = "birthday">
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <p>電子郵件</p>
                        </div>
                        <div class="profile-info-value">
                            <input type="text" name = "email">
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <p>聯絡方式</p>
                        </div>
                        <div class="profile-info-value">
                            <input type="text" placeholder="例：以信箱或手機優先，聯絡時間: 0900:22:00 "name = "contact">
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <p>連絡電話</p>
                        </div>
                        <div class="profile-info-value">
                            <span>手機：</span><input type="text" name = "phone">
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name">
                        </div>
                        <div class="profile-info-value">
                            <span>住家：</span><input type="text" name = "home">
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name">
                        </div>
                        <div class="profile-info-value">
                            <span>其他：</span><input type="text" placeholder="例：line ID、第二支手機號碼" name = "other">
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <p>聯絡地址</p>
                        </div>
                        <div class="profile-info-value">
                            <div class="erTWZipcode">
                                <select name="county" aria-describedby="form-county" required=""></select>
                                <select name="district" aria-describedby="form-district" zipcode-align="left" required=""></select>
                                <input id="address" type="text" name="address" aria-describedby="form-address-input" required="" placeholder="路, 巷, 門牌, 樓層">
                                <!-- <input name="zipcode"> -->
                            </div>
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name">
                            <span>PDF履歷上傳</span>
                        </div>
                        <div class="profile-info-value">
                            <div class="PDFresume">
                                <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                <input type="file" name="file_Upload" />
                                
                                <input type="submit" value="上傳" />
                            </div>
                        </div>
                    </div>
                </div> <!-- profile -->
            </form>
            </div> <!-- resumeBox -->
        </div> <!-- content -->
    </div> <!-- wrap -->


    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/index.js"></script>
    <script src="../../third/erTWZipcode/js/er.twzipcode.data.js"></script>
    <script src="../../third/erTWZipcode/js/er.twzipcode.min.js"></script>
    <script type="text/javascript">
        erTWZipcode();
    </script>
</body>

</html>