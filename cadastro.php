<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Reservas de Carro</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="principal">
		<div class="container contprincipal">
			<div class="container contpp">
				<h1 class="text-center cabprincipal">Area de usuario</h1>
			 	<form method="Post" autocomplete="off">
			 		<div class="form-group">
			 			<label for="email" class="labelprincipal">Email:</label>
			 			<input type="text" name="email" class="form-control form-principal">
			 		</div>
			 		<div class="form-group">
			 			<label for="senha" class="labelprincipal">Senha:</label>
			 			<input type="password" name="senha" class="form-control form-principal">
			 		</div>
			 		<div class="form-group">
			 			<label for="senha" class="labelprincipal">Confirma Senha:</label>
			 			<input type="password" name="senha" class="form-control form-principal">
			 		</div>
			 		<div class="form-group">
			 			<input type="submit" value="Cadastrar" class="btn btn-primary btn-enviar">
			 			<a href="index.php" class="btn btn-primary btn-cadastrar">Voltar</a>
			 		</div>

				</form>
			</div>
		</div>
	</div>
	<!-- Script js bootstrap e jquery -->
	<script src="assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>