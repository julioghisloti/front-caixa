<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Login - Font Caixa</title>
	
	<!-- Wizard CSS -->
	<link rel="stylesheet" href="lib/css/wizard-css/wizard.css" />
	<link rel="stylesheet" href="lib/css/wizard-css/wizard-resposive.css" />

	<!-- Style -->
	<link rel="stylesheet" href="lib/css/index.css" />


</head>
<body>

	<!-- start -Login- -->
		<section class="block center">
			<div class="box center">


				<!-- start -login form- -->
					<form action="lib/actions/action-login.php" method="post">

						<h3>Front Caixa</h3>

						
						<label for="login">Login</label>
						<input type="text" name="login" class="transition" />

						<br><br>

						<label for="senha">Senha</label>
						<input type="password" name="senha" class="transition" />

						<br><br>

						<select name="nivel" id="">
							<option value="">Entrar Como:</option>
							<option value="operador">Operador de Caixa</option>
							<option value="administradores">Administrador</option>
							<option value="root">Root</option>
						</select>

						<br><br>

						<input type="submit" class="bt _blue transition" value="Entrar" />

					</form>
				<!-- end -login form- -->


			</div>
		</section>
	<!-- end -Login- -->
	
</body>
</html>