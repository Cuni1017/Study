<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/> <!--網頁利用UTF-8編碼方式 才能顯示中文-->   <!--<meta charset="UTF-8"></meta> 因為meta中間無內容,</meta>可省略-->
        <meta name="description" content="文化大學企業實習媒合網站"/> <!--讓搜尋引擎更了解這個網站的內容-->
        <meta name="author" content="Cuni"/>
        <meta name="keywords" content="專題,企業實習,測試"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!--width=device-width 根據瀏覽的裝置大小做畫面調整,initial-scale=1.0 初始縮放比為100%-->
        <link rel="stylesheet" href="dist/student.css">
        <title>文化大學企業實習媒合網站</title>
    </head>

    <body>
    <?php require_once "user_connect.php"?>
      <div class="Top-row">
        
          <div class="logo"> 
            <a href="https://www.pccu.edu.tw/">
              <img src="image/skyLogo.png" width="250"/>
            </a>
          </div> 

          <div class="Log">
            <div class="Login button">
              <a href="login.html">Login</a>
            </div>
            <div class="Signin button">
              <a href="SignIn.html">Sign In</a>
            </div> 
          </div>
      </div>

      <div class = "buttom_controll">
          <div class = "student_buttom1">
              <a href="">上傳實習報告</a>
          </div>
          <div class = "student_buttom">
              <a href="">讓學生上傳自傳</a>
          </div>
          <div class = "student_buttom">
              <a href="">查看公司資訊</a>
          </div>
          <div class = "student_buttom">
              <a href="">下載實習資訊</a>
          </div>
          <div class = "student_buttom">
              <a href="https://reurl.cc/GmxEXv">保險表單填寫</a>
          </div>
      </div>
      <div class = "bottom">
        
      </div>

    </body>

</html>
    