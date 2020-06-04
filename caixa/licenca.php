<?php

require_once("db.php");

$licenca = addslashes($_GET['licenca']);

$query = "UPDATE licenca SET valor=('".$licenca."')";

$result = mysql_query($query) or die(mysql_error());
if($result) {
	echo "Ok";
}

?>