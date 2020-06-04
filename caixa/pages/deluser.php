<?

$id = $_GET['id'];
$user = $_GET['user'];
?>


<center>
<h1>Deletar Cambista</h1>
<h3>Tem certeza que deseja deletar o Cambista &quot<? echo $user ?>&quot ?</h3>
<input type="button" value="Sim" onClick=javascript:window.location.href='deleteuser.php?id=<? echo $id ?>&user=<? echo $user ?>'>
<input type="button" value="Não" onClick=javascript:window.location.href='index.php?page=home'>
</center>
