<?php
$file = "chatbox.txt";
$string = "----------------------------\r\n".date("d.m.Y H:i:s")." - ".$_GET['chat_user']."\r\n".$_GET['chat_text'];
$string .= "\r\n";
file_put_contents($file, $string.file_get_contents($file));
echo $_GET['callback'] .'('. json_encode('success') . ')';
?>