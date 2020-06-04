<?
require_once("includes/db2.php");

$idcambista = addslashes($_GET['idcambista']);
$nome = addslashes($_GET['nome']);
$comissao = addslashes($_GET['comissao']);
$administracao = addslashes($_GET['administracao']);
$parceria = addslashes($_GET['parceria']);

$query = "UPDATE cambista SET idcambista = '".$idcambista."', nome = '".$nome."', comissao = '".$comissao."', administracao = '".$administracao."', parceria = '".$parceria."'  WHERE nome='".$nome."'";
$result = mysql_query($query) or die(mysql_error());

header('Location: index.php?page=home');

?>

