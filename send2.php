<?php

require_once("includes/db2.php");
$nome = addslashes($_GET['nome']);
$ticket = addslashes($_GET['ticket']);
$sorteio = addslashes($_GET['sorteio']);
$data = addslashes($_GET['data']);
$hora = addslashes($_GET['hora']);
$jogo = addslashes($_GET['jogo']);
$cercado = addslashes($_GET['cercado']);
$quantidade = addslashes($_GET['quantidade']);
$valorap = addslashes($_GET['valorap']);
$valortotal = addslashes($_GET['valortotal']);
$numero1 = addslashes($_GET['numero1']);
$numero2 = addslashes($_GET['numero2']);
$numero3 = addslashes($_GET['numero3']);
$numero4 = addslashes($_GET['numero4']);
$numero5 = addslashes($_GET['numero5']);
$numero6 = addslashes($_GET['numero6']);
$numero7 = addslashes($_GET['numero7']);
$numero8 = addslashes($_GET['numero8']);
$numero9 = addslashes($_GET['numero9']);
$numero10 = addslashes($_GET['numero10']);
$numero11 = addslashes($_GET['numero11']);
$numero12 = addslashes($_GET['numero12']);
$numero13 = addslashes($_GET['numero13']);
$numero14 = addslashes($_GET['numero14']);
$numero15 = addslashes($_GET['numero15']);
$numero16 = addslashes($_GET['numero16']);
$numero17 = addslashes($_GET['numero17']);
$numero18 = addslashes($_GET['numero18']);
$numero19 = addslashes($_GET['numero19']);
$numero20 = addslashes($_GET['numero20']);
$numero21 = addslashes($_GET['numero21']);
$numero22 = addslashes($_GET['numero22']);
$numero23 = addslashes($_GET['numero23']);
$numero24 = addslashes($_GET['numero24']);
$numero25 = addslashes($_GET['numero25']);
$numero26 = addslashes($_GET['numero26']);
$numero27 = addslashes($_GET['numero27']);
$numero28 = addslashes($_GET['numero28']);
$numero29 = addslashes($_GET['numero29']);
$numero30 = addslashes($_GET['numero30']);
$gerente = addslashes($_GET['gerente']);
$regiao = addslashes($_GET['regiao']);


$query = "INSERT INTO centena VALUES(NULL,'".$nome."', '".$ticket."', '".$sorteio."', '".$data."', '".$hora."', '".$jogo."', '".$cercado."', '".$quantidade."', '".$valorap."', '".$valortotal."', '".$numero1."', '".$numero2."', '".$numero3."', '".$numero4."', '".$numero5."', '".$numero6."', '".$numero7."' , '".$numero8."', '".$numero9."', '".$numero10."', '".$numero11."', '".$numero12."', '".$numero13."', '".$numero14."', '".$numero15."', '".$numero16."', '".$numero17."', '".$numero18."', '".$numero19."', '".$numero20."', '".$numero21."', '".$numero22."', '".$numero23."', '".$numero24."', '".$numero25."', '".$numero26."', '".$numero27."', '".$numero28."', '".$numero29."', '".$numero30."', '".$gerente."', '".$regiao."')";

$result = mysql_query($query) or die(mysql_error());
if($result) {
	echo "Ok";
}

?>