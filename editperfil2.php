<?
session_start();
if($_SESSION['logado'] != "sim") die("Voce nao esta logado no sistema");

require_once("db.php");

$user = $_GET['user'];
$nome = addslashes($_GET['nome']);

$query = "UPDATE user SET nome = '".$nome."' WHERE username='".$user."'";
$result = mysql_query($query) or die(mysql_error());

header('Location: home.php');

?>

