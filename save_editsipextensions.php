<?php
$id=$_POST['id'];
$name=$_POST['name'];
$callerid=$_POST['callerid'];
$defaultuser=$_POST['defaultuser'];
$regexten=$_POST['regexten']; 
$secret=$_POST['secret']; 
$mailbox=$_POST['mailbox']; 
$accountcode=$_POST['accountcode']; 
$context=$_POST['context']; 
$amaflags=$_POST['amaflags']; // no nesesario
$callgroup=$_POST['callgroup'];
$canreinvite=$_POST['canreinvite']; 
$defaultip=$_POST['defaultip']; // no nesesario
$dtmfmode=$_POST['dtmfmode']; 
$fromuser=$_POST['fromuser']; 
$fromdomain=$_POST['fromdomain']; 
$fullcontact=$_POST['fullcontact']; // no nesesario
$host=$_POST['host']; 
$insecure=$_POST['insecure']; 
$language=$_POST['language']; // no nesesario
$md5secret=$_POST['md5secret']; // no nesesario
$nat=$_POST['nat']; // no nesesario
$deny=$_POST['deny']; // no nesesario
$permit=$_POST['permit']; // no nesesario
$mask=$_POST['mask']; // no nesesario
$pickupgroup=$_POST['pickupgroup']; 
$port=$_POST['port'];
$qualify=$_POST['qualify'];
$restrictcid=$_POST['restrictcid']; // no nesesario
$rtptimeout=$_POST['rtptimeout']; // no nesesario
$rtpholdtimeout=$_POST['rtpholdtimeout']; // no nesesario
$type=$_POST['type']; 
$disallow=$_POST['disallow']; 
$allow=$_POST['allow'];
$musiconhold=$_POST['musiconhold']; // en version posterior
$regseconds=$_POST['regseconds']; // no nesesario
$ipaddr=$_POST['ipaddr']; // no nesesario
$cancallforward=$_POST['cancallforward'];
$lastms=$_POST['lastms']; // no nesesario
$useragent=$_POST['useragent']; // no nesesario
$regserver=$_POST['regserver']; // no nesesario


include("database.php");

	$sql = sprintf("UPDATE sip_buddies SET name='$name',callerid='$callerid',defaultuser='$defaultuser',regexten='$regexten',secret='$secret',mailbox='$mailbox',accountcode='$accountcode',context='$context', callgroup='$callgroup',canreinvite='$canreinvite',defaultip='$defaultip',dtmfmode='$dtmfmode',fromuser='$fromuser',fromdomain='$fromdomain',host='$host',insecure='$insecure',language='$language',md5secret='$md5secret',nat='$nat',deny='$deny',permit='$permit',mask='$mask',pickupgroup='$pickupgroup',port='$port',qualify='$qualify', type='$type',disallow='$disallow',allow='$allow',musiconhold='$musiconhold' WHERE id='$id'");

	
	$guardar = mysql_query($sql);
	if(!$guardar){
	echo "<script>alert('Error en Insert validar con Administracion');</script>";
	die("<script>alert('Verificar informacion');</script>");
	header("Location: index-sip-extensions.php");
	} else {
	echo "<script>alert('Se Crea Informacion de Alumno de la Base de Datos');</script>";
	header("Location: index-sip-extensions.php");
	}
	mysql_close();
?>