<?php
if (isset($_POST['btn'])){
	$name = filter_input(INPUT_POST, 'name');
	$bairro = filter_input(INPUT_POST, 'bairro');

	$arquivoJson = './cadastro/data.json';
	$json = file_get_contents($arquivoJson);
	$data = json_decode($json);

	if ($name === $data->nome && $bairro === $data->bairro){
		header('Location: ./cadastro/dados.php');
	}else{
		echo "<script>alert('Campo incorreto');</script>";
	}
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="container">
		<div class="container-login">
			<div class="wrap-login">
				<form class="login-form" method="POST">
					<span class="login-form-title">
						Faça o login
					</span>

					<div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="input-form" type="text" name="name" id="name" autocomplete="off">
						<span class="focus-input-form" data-placeholder="Nome Completo"></span>
					</div>

					<div class="wrap-input margin-bottom-35">
						<input class="input-form" type="text" name="bairro" id="bairro">
						<span class="focus-input-form" data-placeholder="Bairro"></span>
					</div>

					<div class="container-login-form-btn">
						<button class="login-form-btn" id="btn" name="btn">
							Login
						</button>
					</div>

					<ul class="login-utils">
						<li class="margin-bottom-8 margin-top-8">
							<span class="text1">
								Esqueceu sua
							</span>

							<a href="#" class="text2">
								senha?
							</a>
						</li>

						<li>
							<span class="text1">
								Não tem conta?
							</span>

							<a href="./cadastro/cadastro.php" class="text2">
								Criar
							</a>
						</li>
					</ul>
				</form>
			</div>
			<img src="images/login.png" width="300" height="300" class="margin-left-50" />
		</div>
	</div>
	
	<script>
		let inputs = document.getElementsByClassName('input-form');
		for (let input of inputs) {
			input.addEventListener("blur", function() {
				if(input.value.trim() != ""){
					input.classList.add("has-val");
				} else {
					input.classList.remove("has-val");
				}
			});
		}
	</script>

</body>
</html>