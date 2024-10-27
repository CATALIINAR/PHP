<?php
$server='bpadqkmdqygsdelbrxpi-mysql.services.clever-cloud.com';
$user='u5eojvz57vsgyc57';
$pass='cdomiJRPBMuGdsgTnEE2';
$dbname='bpadqkmdqygsdelbrxpi';
$db_port='3306';

$con1=mysqli_connect($server, $user, $pass, $dbname, $db_port);

if(!$con1) {
    echo("La conexión ha fallado");
} else {
    echo("Conexión exitosa");
}
?>
