<?php

require_once("includes/db2.php");
$nome = addslashes($_GET['nome']);
$data = addslashes($_GET['data']);
$anterior = addslashes($_GET['anterior']);
$vendas = addslashes($_GET['vendas']);
$comissao = addslashes($_GET['comissao']);
$liquido = addslashes($_GET['liquido']);
$premios = addslashes($_GET['premios']);

$query = "SELECT SUM(vendas)as SOMA FROM vendas WHERE data ='".$data."' AND nome = '".$nome."' ";
$result2 = mysql_query($query) or die(mysql_error());
while ($rows = mysql_fetch_assoc($result2)) {
$sald = $rows["SOMA"];

}

$query2 = "SELECT SUM(comissao)as SOMA2 FROM cambista WHERE nome = '".$nome."' ";
$result3 = mysql_query($query2) or die(mysql_error());
while ($rows2 = mysql_fetch_assoc($result3)) {
$comi = $rows2["SOMA2"];

}

$sald2 = ($sald + $vendas);
$sald3 = ($sald2/100*$comi);
$sald4 = ($sald2 - $sald3);
$vendas2 = ($vendas/100*$comi);
$vemdas3 = ($vendas - $vendas2);


if(mysql_num_rows(mysql_query("SELECT * FROM vendas WHERE data = '".$data."' AND nome = '".$nome."' ")) > 0) {
    $sql2 = "UPDATE vendas SET vendas = '".$sald2."', comissao = '".$sald3."', liquido = '".$sald4."' WHERE data = '".$data."' AND nome = '".$nome."' ";
} else {
    $sql2 = "INSERT INTO vendas VALUES(NULL,'".$nome."', '".$data."', '".$anterior."', '".$vendas."', '".$vendas2."', '".$vemdas3."', '".$premios."')";
}

$result = mysql_query($sql2) or die(mysql_error());
if($result) {
	echo "Ok";
}

?>