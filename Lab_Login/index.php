
<?php
  session_start();
  if(isset($_SESSION["userName"])){
  $user=$_SESSION["userName"];
}
  else{
  $user="Guest";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lab - index</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<table width="300" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center" id="system">會員系統 - 首頁</td>
  </tr>
  <tr>
    <?php if($user=="Guest"){ ?>
    <td align="center" valign="baseline" id="point"><a href="login.php">登入</a></td>
    <?php }else{ ?>
      <td align="center" valign="baseline" id="point"><a href="login.php?logout=1">登出</a> | <a href="secret.php">會員小遊戲</a></td>
    <?php } ?>
  </tr>
  <tr>
    <td align="center" id="system">Welcome!<?=$user?></td>
  </tr>
</table>


</body>
</html>