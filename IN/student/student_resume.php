<!DOCTYPE html>
<html>

<head>
    <?php include '../student_index.php'; ?>
    <meta http-equiv="content-type" charset="UTF-8" />
</head>

<body>
    <? $user_id = @$_GET["user_id"];



    ?>
    <div id="wrap">
        <div id="content">
            <form action="student_upload.php" method="post" enctype="multipart/form-data">
                <h1>履歷維護</h1>
                <div id="resumeBox">
                    <div class="profile">
                        <div class="profile-info-row">
                            <div class="profile-info-name">
                                <p>姓　　名</p>
                            </div>
                            <div class="profile-info-value">

                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name">
                                <p>性　　別</p>
                            </div>
                            <div class="profile-info-value">

                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name">
                                <p>出生日期</p>
                            </div>
                            <div class="profile-info-value">

                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name">
                                <p>電子郵件</p>
                            </div>
                            <div class="profile-info-value">

                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name">
                                <p>聯絡方式</p>
                            </div>
                            <div class="profile-info-value">

                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name">
                                <p>連絡電話</p>
                            </div>
                            <div class="profile-info-value">

                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name">
                            </div>
                            <div class="profile-info-value">

                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name">
                            </div>
                            <div class="profile-info-value">

                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name">
                                <p>聯絡地址</p>
                            </div>
                            <div class="profile-info-value">

                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name">
                                <span>PDF履歷上傳</span>
                            </div>
                            <div class="profile-info-value">
                            </div>
                        </div>
                        <div class="edit">
                            <div class="edit-save">
                                <input type="submit" value="儲存">
                                <img src="../../image/check-square.svg"></img>
                            </div>
                            <div class="edit-modify">
                                <a href="student_resume.php?<?= $user_id ?>">
                                    修改
                                    <img src="../../image/pencil-square.svg"></img>
                                </a>
                            </div>
                            <!-- <button class="edit-save" href = "student_resume.php?<?= $user_id ?>" value = "修改"> -->
                        </div>
                        <!-- <button class="edit-save" href = "student_resume.php?<?= $user_id ?>" value = "修改"> -->

                        <!-- <input class="edit-modify" type = "submit"> -->
                    </div>
                </div>
        </div> <!-- profile -->
    </div> <!-- resumeBox -->
    </form>
    </div> <!-- content -->
    </div> <!-- wrap -->

    <script src="../../third/erTWZipcode/js/er.twzipcode.data.js"></script>
    <script src="../../third/erTWZipcode/js/er.twzipcode.min.js"></script>
    <script type="text/javascript">
        erTWZipcode();
    </script>
</body>

</html>