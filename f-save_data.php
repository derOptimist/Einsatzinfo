<?php


include( "Mydb.php" );
if (mysqli_connect_errno()) {
   die ('Es konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}

if(isset($_POST['username']))
{
   $username = $_POST['username'];
}
else
{
   echo "Benutzername nicht gesetzt! Fehlercode 100";
   die();
}
if(isset($_POST['infotext']))
{
   $infotext = $_POST['infotext'];
}
if(isset($_POST['receipient']))
{
   $receipient = $_POST['receipient'];
}

// //Check userinformation
// $sql = "SELECT count(*) as count FROM ei_userdata where username = '".$username."' and password = '".$password."'"; 
// $sth = $db->prepare($sql);
// $sth->execute();
// $result = $sth->fetch(PDO::FETCH_OBJ);
// $count = $result->count;




// if($count != '1')
// {
   // echo '
// <script>
   // alert("Bitte überprüfen Sie die Benutzereingaben. Einstellungen wurden nicht gespeichert");
	// top.history.back();
// </script>
// ';
// }

$sql = "UPDATE ei_receipients SET infotext = '".$infotext."',  receipient = '".$receipient."' where username = '".$username."'"; 
$sth = $db->prepare($sql);
$sth->execute();

echo '
<script>
   alert("Einstellungen gesichert.");
	window.location.replace("http://'.$_SERVER['HTTP_HOST'].'/app.einsatzinfo");
</script>';
   
?>





