<?php
define('HOST', 'fcmleiturab.mysql.uhserver.com');
define('USER', 'fcmleiturau');
define('PASSWORD', 'fscb@2018');
define('DB','fcmleiturab');

$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die('Não foi possível conectar!');
?>