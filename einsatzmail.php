 <?php
// if(isset($_GET['secretkey']) == 0)
// {
    // echo "Ung&uumlltiger Funktionsaufruf! Fehlercode 100";
    // die();
// }
// else if($_GET['secretkey'] != "pW8anY6fW8zCdiHoqwpHEiNIg7XnwHqe2Hb4ABF0wgXjxDv1Hx")
// {
   // echo "Ung&uumlltiger Funktionsaufruf! Fehlercode 101";
   // die();
// }
 


echo '
	<body style=" 
		background: rgb(167,207,223); /* Old browsers */
		background: -moz-linear-gradient(45deg,  rgba(167,207,223,1) 0%, rgba(35,83,138,1) 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,rgba(167,207,223,1)), color-stop(100%,rgba(35,83,138,1))); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(45deg,  rgba(167,207,223,1) 0%,rgba(35,83,138,1) 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(45deg,  rgba(167,207,223,1) 0%,rgba(35,83,138,1) 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(45deg,  rgba(167,207,223,1) 0%,rgba(35,83,138,1) 100%); /* IE10+ */
		background: linear-gradient(45deg,  rgba(167,207,223,1) 0%,rgba(35,83,138,1) 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#a7cfdf\', endColorstr=\'#23538a\',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
		height:0; 
	">
	<html>
	<body>
		<form id="Form" action="'.$_SERVER['PHP_SELF'].'/?'.$_SERVER['QUERY_STRING'].'" method="post" >
			<br><br>
			<button type="submit" style="-webkit-appearance: none;"><img src="logo.png" width="600" height="600" alt="save"><br>Info</button>
            <input type="hidden" name="g_sendmail" value="1" >
    </form>';
	
	
if(isset($_POST['g_sendmail']))
{
	// Mail versenden
	//$empfaenger = "silviaengbers@gmx.de";
	$empfaenger = "silviaengbers@gmx.de";
	$betreff = "Einsatz";
	$from = "noreply@schwitte.de";

	// für HTML-E-Mails muss der 'Content-type'-Header gesetzt werden
	$header  = 'MIME-Version: 1.0' . "\r\n";
	$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// zusätzliche Header
	$header .= 'To: '.$empfaenger. "\r\n";
	$header .= 'From: '.$from. "\r\n";


	$text = '
	<html>
	<head>
	<title>test</title>
	</head>
	<body style=" 

	background: rgb(167,207,223); /* Old browsers */
	background: -moz-linear-gradient(45deg,  rgba(167,207,223,1) 0%, rgba(35,83,138,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,rgba(167,207,223,1)), color-stop(100%,rgba(35,83,138,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(45deg,  rgba(167,207,223,1) 0%,rgba(35,83,138,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(45deg,  rgba(167,207,223,1) 0%,rgba(35,83,138,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(45deg,  rgba(167,207,223,1) 0%,rgba(35,83,138,1) 100%); /* IE10+ */
	background: linear-gradient(45deg,  rgba(167,207,223,1) 0%,rgba(35,83,138,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#a7cfdf\', endColorstr=\'#23538a\',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

	">
	<b>Ich bin auf einem Einsatz
	<br>
	<i>Diese Mail wurde automatisch erstellt, bitte antworten Sie nicht auf diese Mail.</i>
	</body>
	</html>
	';

	mail($empfaenger, $betreff, $text, $header);	
	$timestamp = time();
	$timestamp = date("d.m.Y H:i:s",$timestamp);
	echo $timestamp.' - Mail wurde versendet.';
	
	
	
	// Zurück zur vorheringen Seite
echo '<script language ="JavaScript">';
//echo 'window.open("http://'.$_SERVER['HTTP_HOST'].'/index.php/m-list-created?list='.$MyListsname.'", "Zweitfenster", "width=300,height=200,scrollbars=yes");';
echo 'window.close();';
echo '</script>';
	
}
	
	echo '</body>
	</html>';	
?> 	



