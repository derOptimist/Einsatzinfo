<?php

// echo "<script>alert($_GET['tb_message'])</script>";


if($_GET['key'] != 'fCPXkFQagMTJNyk9qUza3KnZLeTEBR')
{
   return;
}
$empfaenger = $_GET['receipient'];
$betreff = "Einsatzinfo";
$from = "noreply@jackolist.de";
// für HTML-E-Mails muss der 'Content-type'-Header gesetzt werden
$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// zusätzliche Header
// $header .= 'To: '.$empfaenger. "\r\n";
$header .= 'From: '.$from. "\r\n";
$text = '
<html>
<head>
<title>Einsatzinfo</title>
</head>
<body style=" 
height: 100%;
background: rgb(167,207,223); /* Old browsers */
background: -moz-linear-gradient(45deg,  rgba(167,207,223,1) 0%, rgba(35,83,138,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,rgba(167,207,223,1)), color-stop(100%,rgba(35,83,138,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(45deg,  rgba(167,207,223,1) 0%,rgba(35,83,138,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(45deg,  rgba(167,207,223,1) 0%,rgba(35,83,138,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(45deg,  rgba(167,207,223,1) 0%,rgba(35,83,138,1) 100%); /* IE10+ */
background: linear-gradient(45deg,  rgba(167,207,223,1) 0%,rgba(35,83,138,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#a7cfdf\', endColorstr=\'#23538a\',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
html, body
  height: 100%
">

<br><br><br><br><br><br>

'.$_GET['tb_message'].'

<br><br><br><br><br><br>
<i>Diese Mail wurde automatisch erstellt, bitte antworten Sie nicht auf diese Mail.</i>
</body>
</html>
';
mail($empfaenger, $betreff, $text, $header);
echo $_GET['callback'] .'('. json_encode('success') . ')';






?>