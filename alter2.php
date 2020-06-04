<?
session_start();
if($_SESSION['logado'] != "sim") die("Voce nao esta logado no sistema");
$user = $_GET['user'];
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<center>

<h1>Alterar senha</h1>
<table border = '0'>
<form name='pass' action='alterpwd2.php' onsubmit='return val()' method="GET">
<tr><td>Digite a nova senha</td><td><input type='password' name='passwd' id='passwd'></td><tr>
<tr><td>Digite novamente</td><td><input type='password' name='paswd_again' id='passwd_again'></td><tr>
<tr><td><input type='hidden' name='user' value='<? echo $user; ?>'></td><td><input type='submit' value='Salvar' ><input type='button' value='Cancelar' onClick=javascript:window.location.href='perfil.php'></td><tr>
</table>
</center>

<script >
	function val() {
	
	var password = document.getElementById('passwd');
	var password2 = document.getElementById('passwd_again');
	if(password.value == "") {
		alert("Digite uma senha!");
		return false;
	}
	if(password2.value != password.value) {
		alert("As senha não conferem!");
		return false;
	}
	
}
</script>


</body>
</html>
