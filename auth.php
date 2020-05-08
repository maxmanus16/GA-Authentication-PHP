<?php
include("connection.php");

$checkResult="";
if($_POST['code']){
$code=$connect->real_escape_string($_POST['code']);	
$secret = $_SESSION['secret'];

require_once 'googleLib/GoogleAuthenticator.php';
$ga = new GoogleAuthenticator();
$checkResult = $ga->verifyCode($secret, $code, 2);    // 2 = 2*30sec clock tolerance

//print "checkResult".$checkResult."<br/>";
//print "secret= ". $secret."<br>";
//print "code= ". $code."<br>";


if ($checkResult){
	$_SESSION['googleCode']	= $code;
	header("location:myaccount.php");
    exit;

} 
else{
	header("location:device_confirmations.php");
    exit;
}

}

?>
