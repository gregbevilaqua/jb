 <?php
include 'DatabaseConfig.php';

// Create connection
$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

if ($conn->connect_error) {
 
 die("Connection failed: " . $conn->connect_error);
} 
$codigo = $_GET['codigo'];

$result = $conn->query("SELECT nome,gerente,regiao,idcambista FROM cambista WHERE idcambista ='".$codigo."'");

//Initialize array variable
  $dbdata = array();

//Fetch into associative array
  while ( $row = $result->fetch_assoc())  {
	$dbdata[]=$row;
  }

//Print array in JSON format
 echo json_encode($dbdata);

$conn->close();
?>