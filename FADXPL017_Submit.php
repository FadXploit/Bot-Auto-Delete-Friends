<?php
echo '<a href="./FADXPL017_DeleteFriends.php">Click Here to Delete All Friend</a>';
$token=$_POST['fadillah'];

$file = fopen('FADXPL017_Token.txt','w');
               fwrite($file,$token);
               fclose($file);
exit;
?>
