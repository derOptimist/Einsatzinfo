<?php

$file = "unsubscribed.txt";
$string = date("d.m.Y H:i:s").";".$_GET['uuid'];
$string .= "\r\n";
file_put_contents($file, $string.file_get_contents($file));

echo ('
<html>
<head>
   <script type="text/javascript" charset="utf-8">
      alert("Sie haben sich erfolgreich ausgetragen. Sie bekommen nun keine Benachrichtigungen von Einsatzinfo.");
      location.href=("https://facebook.com/Einsatzinfo");
   </script>
</head>
</html>
');

?>