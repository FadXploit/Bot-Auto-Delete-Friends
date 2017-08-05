<?php
$token=$_POST['fadillah'];

$file = fopen('FADXPL017_Token.txt','w');
               fwrite($file,$token);
               fclose($file);
exit;
?>
