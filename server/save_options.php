<?php

if(isset($_GET['key']) == 0)
{
    echo "Ung&uumlltiger Funktionsaufruf! Fehlercode 1";
   echo $_GET['callback'] .'('. json_encode('"Ung&uumlltiger Funktionsaufruf! Fehlercode 1') . ')';
    return;
}
else if($_GET['key'] != "fCPXkFQagMTJNyk9qUza3KnZLeTEBR")
{
   echo "Ung&uumlltiger Funktionsaufruf! Fehlercode 2";
   echo $_GET['callback'] .'('. json_encode('"Ung&uumlltiger Funktionsaufruf! Fehlercode 2') . ')';
   return;
}


// Tabelle für die Listeninhalte erzeugen
include( "Mydb.php" );

if (mysqli_connect_errno()) {
    die ('Konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
    echo $_GET['callback'] .'('. json_encode('"Ung&uumlltiger Funktionsaufruf! Fehlercode 3') . ')';
}

$sql = "delete from `ei_receipients` where `uuid` = '".$_GET['uuid']."'";
$result = $db->query($sql);

$sql = "INSERT INTO `ei_receipients` (`uuid` ,`tb_message`, `tb_receipient1` ,`tb_receipient2` ,`tb_receipient3` ,`tb_receipient4`,`tb_receipient5` ) 
VALUES (
 '".$_GET['uuid']."','".$_GET['tb_message']."','".$_GET['tb_receipient1']."','".$_GET['tb_receipient2']."','".$_GET['tb_receipient3']."','".$_GET['tb_receipient4']."', '".$_GET['tb_receipient5']."'
);";
$result = $db->query($sql);


// $_GET['tb_receipient1']
// $_GET['tb_receipient2']
// $_GET['tb_receipient3']
// $_GET['tb_receipient4']
// $_GET['tb_receipient5']
// $_GET['tb_message']
// $_GET['uuid']
// $_GET['key']

echo $_GET['callback'] .'('. json_encode('success') . ')';
?>