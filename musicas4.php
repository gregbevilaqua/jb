 <?php
include 'DatabaseConfig.php';

// Create connection
$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

$ticket = addslashes($_GET['ticket']);

if ($conn->connect_error) {
 
 die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM milhar WHERE ticket = '$ticket'";
$sql2 = "SELECT * FROM centena WHERE ticket = '$ticket'";
$sql3 = "SELECT * FROM dezena WHERE ticket = '$ticket'";
$sql4 = "SELECT * FROM grupo WHERE ticket = '$ticket'";
$sql5 = "SELECT * FROM milharin WHERE ticket = '$ticket'";
$sql6 = "SELECT * FROM centenain WHERE ticket = '$ticket'";
$sql7 = "SELECT * FROM ternogp WHERE ticket = '$ticket'";
$sql8 = "SELECT * FROM duquegp WHERE ticket = '$ticket'";
$sql9 = "SELECT * FROM ternode WHERE ticket = '$ticket'";
$sql10 = "SELECT * FROM duquedeze WHERE ticket = '$ticket'";
$sql11 = "SELECT * FROM passevai WHERE ticket = '$ticket'";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);
$result5 = $conn->query($sql5);
$result6 = $conn->query($sql6);
$result7 = $conn->query($sql7);
$result8 = $conn->query($sql8);
$result9 = $conn->query($sql9);
$result10 = $conn->query($sql10);
$result11 = $conn->query($sql11);

if ($result->num_rows >0) {
 
 
 while($row[] = $result->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);
 
 
 }
 
 
} 
if ($result2->num_rows >0) {
 
 while($row[] = $result2->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);

 }   

    
}
if ($result3->num_rows >0) {
 
 while($row[] = $result3->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);

 }   

    
}

if ($result4->num_rows >0) {
 
 while($row[] = $result4->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);

 }   

    
}

if ($result5->num_rows >0) {
 
 while($row[] = $result5->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);

 }   

    
}
if ($result6->num_rows >0) {
 
 while($row[] = $result6->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);

 }   

    
}
if ($result7->num_rows >0) {
 
 while($row[] = $result7->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);

 }   

    
}
if ($result8->num_rows >0) {
 
 while($row[] = $result8->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);

 }   

    
}
if ($result9->num_rows >0) {
 
 while($row[] = $result9->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);

 }   

    
}
if ($result10->num_rows >0) {
 
 while($row[] = $result10->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);

 }   

    
}
if ($result11->num_rows >0) {
 
 while($row[] = $result11->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);

 }   

    
}
 echo $json;

$conn->close();
?>