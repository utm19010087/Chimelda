<?php
$DBhostname = "192.18.148.147";
$DBusername = "opc";
$DBpassword = "12345678";
$DBname = "sistema_escolar";

$puto_lalo = mysqli_connect($DBhostname, $DBusername, $DBpassword, $DBname);
if(mysqli_connect_error())
{
    die("Puto lalo: " + mysqli_connect_errno );
    exit();
}
echo "Te amo lalo";

?>