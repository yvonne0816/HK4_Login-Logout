<?php
  session_start();
  if(!isset($_SESSION["userName"])){
    header("location:index.php");
    exit();
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<title>Lag - Member Page</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<table width="300" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td colspan="3" align="center" id="system">會員遊戲</font></td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="baseline" id="point">請輸入一個四位數字</td>
  </tr>
  <tr>
    <td colspan="3" align="center" id="point"><input type="text" id="hi" pattern="\d{4}" placeholder="四個數字不要重複"></td>
  </tr>
            <tr align="center" id="answer">
                <th>#</th>
                <th>猜</th>
                <th>結果</th>
            </tr>
      <tbody id="fin">
    </tbody>
    <tr>
    <td colspan="3" align="center" id="system"><button id="game">送出</button>|<a href="index.php">回首頁</a></td>
  </tr>
</table>

<script>
var num = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
var answer = [];
for (var i=0; i<4; i++) {
    var idx = Math.floor(Math.random()*num.length);
    answer.push(num[idx]);
    num.splice(idx, 1);
}

var times = 0;
  $('#game').click(function() {
  //alert(answer);
    var A = 0;
    var B = 0;
    var g = $('#hi').val();
    //var g = document.getElementById("hi");
    //alert(g.value);
    //$('#hi').val('');
    var l=0;
    for(var k=0;k<11;k++){
      var count=0;
      for (var i=0; i<4; i++) {
        var idx = answer.indexOf(g[i]);
        if(idx==k){
          count++;
        }
     }
     if(count>1){
      alert("四個數字有數字重複，請重新輸入");
      l++;
      }
    }
    if(l==0){
      for (var i=0; i<4; i++) {
          var idx = answer.indexOf(g[i]);
          if (idx != -1) {
              if (idx == i) {
                  A++;
              } else {
                  B++;
              }
          }
      }
      if (A == 4) {
          alert('獲勝！');
      }
      else{
      times++;
      //alert("A:"+A+" B:"+B);
      $("#fin").append('<tr><td>' + times + '</td><td>' + g + '</td><td>' + 'A:' + A + 'B:' + B + '</td></tr>');
      }
     }
});

</script>


</body>
</html>