<?php
$id = $_POST['number'];
$ip = $_SERVER["REMOTE_ADDR"];
$refer=$_POST["refer"];
 $mushir="https://akshith10443075.o18.link/c?o=15418343&m=8243&a=305561&aff_click_id={$id}&sub_aff_id={$refer}";
header('Location: '.$mushir.'');//here your link of your campagin
$a='
Paytm Number -->  '.$id.'

Refer --> '.$refer.'

Ip -->  '.$ip.'';
  
   $file=fopen("helo.txt","a");
  fwrite($file,$a);
  fclose($file);
  
?>