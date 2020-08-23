<?php
session_start();
if (isset($_GET["logout"]))
{
	unset($_SESSION["userName"]);
	header("Location: index.php");
	exit();
}

if (isset($_POST["btnHome"]))
{
	header("Location: index.php");
	exit();
}

  if(isset($_POST["btnOK"])){
    $_SESSION["userName"]=$_POST["txtUserName"];
    if($_SESSION["userName"] !=""){
      header("Location: index.php");
		  exit();
    }
  }

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Lab - Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<form id="form1" name="form1" method="post" action="login.php">
  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td colspan="2" align="center"id="system">會員系統 - 登入</font></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">帳號</td>
      <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName"/></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">密碼</td>
      <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" pattern="\w{8,12}" placeholder="請輸入8~12個數字或英文"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center" id="system"><input type="submit" name="btnOK" id="btnOK" class="btn"value="登入" />
      <input type="reset" name="btnReset" id="btnReset" value="重設" class="btn"/>
      <input type="submit" name="btnHome" id="btnHome" value="回首頁" class="btn"/>
      </td>
    </tr>
  </table>
</form>
</body>
</html>