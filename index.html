<!DOCTYPE html>
<html manifest="cache.manifest_">
<head>

   <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
   <meta name="apple-mobile-web-app-capable" content="yes" />
   <meta name="apple-mobile-web-app-status-bar-style" content="black" />

   <title>Einsatzinfo</title>
	<style type="text/css" title="currentStyle">
		@import "css_index.css";
	</style>
</head>
<body>

 <?php
 
include( "Mydb.php" );
if (mysqli_connect_errno()) {
   die ('Es konnte keine Verbindung zur Datenbank aufbauen: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}

if(isset($_COOKIE['ei_username']))
{
   $username = $_COOKIE['ei_username'];
}
else
{
   $username = "";
}

$password = "";
$infotext = "";
$receipient = "";

$sql = "SELECT infotext, receipient FROM ei_receipients where username = '".$username."'"; 
$sth = $db->prepare($sql);
$sth->execute();
$result = $sth->fetch(PDO::FETCH_OBJ);
$num_rows = mysql_affected_rows();
if($num_rows > 0)
{
   $infotext = $result->infotext;
   $receipient = $result->receipient;
}



?>

<ul class="tabs">
        <li>
          <input type="radio" checked name="tabs" id="tab1">
          <label for="tab1">Einsatzinfo</label>
          <div id="tab-content1" class="tab-content animated fadeIn">
            <button type="submit" style="-webkit-appearance: none;"><img src="images/info3232.png" width="32" height="32" alt="create"><br>Info senden</button>
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab2">
          <label for="tab2">Einstellungen</label>
          <div id="tab-content2" class="tab-content animated fadeIn">
            <form id="myform" action="f-save_data.php" method="post" >
              <fieldset>
                <h3>Einstellungen</h3>
                  <table cellpadding="0" cellspacing="0"  frame="void" class="dfContactTable">
                     <tr>
                        <td style="height:25px;width:150px">Infotext: </td>
                        <td><input type="text" name="infotext" required="required" value="<?php echo $infotext; ?>" style="height:25px;width:150px" ></td>
                     <tr>
                        <td>Empf&auml;nger: </td>
                        <td><input type="email" name="receipient" required="required" value="<?php echo $receipient; ?>" style="height:25px;width:150px" ></td>
                     </tr>                       
                  </table>
                  <input type="hidden" name="type" required="required" value="mail" style="height:25px;width:150px" >
                  <input type="hidden" name="username" required="required" value="<?php echo $username; ?>" style="height:25px;width:150px" >
                  <button type="submit" style="-webkit-appearance: none;"><img src="images/save3232.png" width="32" height="32" alt="create"><br>Speichern</button>
              </fieldset>
            </form>
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab3">
          <label for="tab3">Benutzerdaten</label>
          <div id="tab-content3" class="tab-content animated fadeIn">
            <form id="myform" action="f-save_userdata.php" method="post" >
              <fieldset>
                <h3>Benutzerdaten</h3>
                  <table cellpadding="0" cellspacing="0"  frame="void" class="dfContactTable">
                     <tr>
                        <td style="height:25px;width:150px">Name: </td>
                        <td><input type="text" name="username" required="required" value="<?php echo $username; ?>" pattern="[a-zA-Z ]{5,}" maxlength="30" style="height:25px;width:150px" ></td>
                     </tr>
                     <tr>
                       <td>Passwort: </td>
                       <td><input type="password" name="password" required="required" value="<?php echo $password; ?>" style="height:25px;width:150px" /></td>
                     </tr>
                  </table>
                  <button type="submit" style="-webkit-appearance: none;"><img src="images/save3232.png" width="32" height="32" alt="create"><br>Speichern</button>
              </fieldset>
            </form>
          </div>
        </li>
</ul>
</body>
</html>