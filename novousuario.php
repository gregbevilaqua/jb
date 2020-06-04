<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>

<center>
<h1>Novo Operador</h1>
<h3>Cadastro de novo Operador</h3>
<table border = '0'>
<form name='newuser' action='newuser.php' onsubmit='return val()' >
<tr><td>Nome de Operador</td><td><input type='text' name='user' id='user' autocomplete='off'></td></tr>
<tr><td>Nome de exibição</td><td><input type='text' name='nome' id='nome' autocomplete='off'></td></tr>
<tr><td>Senha</td><td><input type='password' name='pass' id='pass'></td></tr>
<tr><td>Confirme a senha</td><td><input type='password' name='pass2' id='pass2'></td></tr>
<tr><td>Comissao</td><td><input type='number' name='comissao' id='comissao'></td></tr>
<tr><td></td><td><input type='submit' value='Cadastrar'><input type='button' value='Cancelar'></td></tr>
</form>
</table>

<script>
	function val() {
		var user = document.getElementById('user');
		var nome = document.getElementById('nome');
		var pass1 = document.getElementById('pass');
		var pass2 = document.getElementById('pass2');
		var comissao = document.getElementById('comissao');

		var errormsg = 'Erro:';
		var errorcount = 0;

		if(user.value == '' || user.value == null) {
			errormsg += '\nO nome de usuário não pode ficar em branco!';
			errorcount ++;
		}

		if(nome.value == '' || nome.value == null) {
			errormsg += '\nO nome de exibição não pode ficar em branco!';
			errorcount ++;
		}

		if(pass1.value == '' || pass1.value == null) {
			errormsg += '\nA senha não pode ficar em branco!';
			errorcount ++;
		}

		if(pass2.value != pass1.value) {
			errormsg += '\nAs senhas não conferem!';
			errorcount ++;
		}
		if(comissao.value == '' || comissao.value == null) {
			errormsg += '\nA Comissao não pode ficar em branco, caso n�o exista coloque valor zero!';
			errorcount ++;
		}

		if(errorcount > 0) {
			 alert(errormsg);
			return false;
		}
	}
</script>

</body>
</html>
