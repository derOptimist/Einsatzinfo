<?php


include( "Mydb.php" );
if (mysqli_connect_errno()) {
   die ('Es konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}

if(isset($_POST['username']))
{
   $username = $_POST['username'];
}
if(isset($_POST['password']))
{
   $password = $_POST['password'];
}

//Check userinformation
$sql = "SELECT count(*) as count FROM ei_userdata where username = '".$username."' and password = '".$password."'"; 
$sth = $db->prepare($sql);
$sth->execute();
$result = $sth->fetch(PDO::FETCH_OBJ);
$count = $result->count;

if($count != '1')
{
   echo '
<script>
   alert("Bitte überprüfen Sie die Benutzereingaben. Einstellungen wurden nicht gespeichert");
	top.history.back();
</script>
';
}



setcookie("ei_username",$username,time()+3600*24*30);
setcookie("ei_password",$password,time()+3600*24*30);
echo '
<script>
   alert("Einstellungen gesichert.");
	window.location.replace("http://'.$_SERVER['HTTP_HOST'].'/app.einsatzinfo");
</script>';
   
?>





