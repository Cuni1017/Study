<?php
//require_once("sell_connect.php");
//購物車開始
/*require_once("wfcart.php");
session_start();
$cart =& $_SESSION['cart']; 
if(!is_object($cart)) $cart = new wfCart();
// 新增購物車內容
if (isset($_GET["cartaction"]) && ($_GET["cartaction"]=="add")) {
  $query = "SELECT * FROM project WHERE productid=?"; 
  $stmt = $db_link->prepare($query);
  $stmt->bind_param('s',$_GET["id"]);
  $stmt->execute();
  $result = $stmt->get_result();   
  $row_result  = $result ->fetch_assoc();
  echo $row_result["productid"];
  $cart->add_item($row_result["productid"],1,$row_result["productprice"],$row_result["productname"]);
  header("Location: shopcard.php");
}*/
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>網站首頁</title>
        <link href ="web.css" rel="stylesheet" >
    </head>
    <body>       
      <div class="top">
        <div class="logo"><img src="data:image/png;base64,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" width="270" height="129"/></div>
        <div class="navarea">
          <div class="button"><a href="href">熱賣品項</a></div>
          <div class="button">工廠錢包</div>
          <div class="button">常見問題</div>
          <div class="button">使用教學</div>
          <div class="button">服務條款</div>
          <div class="button">會員專區</div>
          <div class="button">申請會員</div>
        </div>
        <div class="shop"><img src="data:image/png;base64,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" width="130" height="130"/></div>
        <div class="br"></div>
      </div>
      <div class="shop_back"></div>
      <div class="bottom">
        <div class="sell"> 
          <div class="sell sellpicture"></div>
          <div class="sellname">Steam錢包100元</div>
          <div class="sellbutton"><a href="web.php?id=1&cartaction=add">購買</a></div>
        </div>
        <div class="sell">
          <div class="sell sellpicture"></div>
          <div class="sellname">Steam錢包200元</div>
          <div class="sellbutton"><a href="web.php?id=2&cartaction=add">購買</a></div>
        </div>
        <div class="sell">
          <div class="sell sellpicture"></div>
          <div class="sellname">Steam錢包300元</div>
          <div class="sellbutton"><a href="web.php?id=3&cartaction=add">購買</a></div>
        </div>
        <div class="sell"> 
          <div class="sell sellpicture"></div>
          <div class="sellname">Steam錢包400元</div>
          <div class="sellbutton"><a href="web.php?id=4&cartaction=add">購買</a></div>
        </div>
        <div class="sell"> 
          <div class="sell sellpicture"></div>
          <div class="sellname">Steam錢包500元</div>
          <div class="sellbutton"><a href="web.php?id=5&cartaction=add">購買</a></div>
        </div>
        <div class="sell"> 
          <div class="sell sellpicture"></div>
          <div class="sellname">Steam錢包800元</div>
          <div class="sellbutton"><a href="web.php?id=6&cartaction=add">購買</a></div>
        </div>
        <div class="sell">
          <div class="sell sellpicture"></div>
          <div class="sellname">Steam錢包1000元</div>
          <div class="sellbutton"><a href="web.php?id=7&cartaction=add">購買</a></div>
        </div>
        <div class="sell"> 
          <div class="sell sellpicture"></div>
          <div class="sellname">Steam錢包2000元</div>
          <div class="sellbutton"><a href="web.php?id=8&cartaction=add ">購買</a></div>
        </div>
        <div class="sell"> 
          <div class="sell sellpicture"></div>
          <div class="sellname">Steam錢包4000元</div>
          <div class="sellbutton"><a href="web.php?id=9&cartaction=add ">購買</a></div>
        </div>
        <div class="sell">
          <div class="sell sellpicture"></div>
          <div class="sellname">Steam錢包5000元</div>
          <div class="sellbutton"><a href="web.php?id=10&cartaction=add ">購買</a></div>
        </div>
        <div class="sell">
          <div class="sell sellpicture"></div>
          <div class="sellname">Steam錢包6000元</div>
          <div class="sellbutton"><a href="web.php?id=11&cartaction=add ">購買</a></div>
        </div>
        <div class="sell">
          <div class="sell sellpicture"></div>
          <div class="sellname">Steam錢包8000元</div>
          <div class="sellbutton"><a href="web.php?id=12&cartaction=add">購買</a></div>
        </div>
      </div>
      <form name="form1" method="post" action="">
        <input name="cartaction" type="hidden" id="cartaction" value="add">
      </form>
    </body>
</html>