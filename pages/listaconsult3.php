<?php
include('includes/Functions.php');

//Include Notifications
include ('includes/notification.php');
require_once("includes/db2.php");
$operador = $_GET['operador'];


$sql = query("Select * From milhar");

if($sql){ // If $sql is True
    while($exibe = $sql->fetch_assoc()){
        foreach($exibe as $key => $value){
            echo "<br />" . $value;
        }

    }
}

?>