<?php

if (isset($_POST['btn'])) {
	$name = filter_input(INPUT_POST, 'nomeCompleto');
	$endereco = filter_input(INPUT_POST, 'endereco');
	$bairro = filter_input(INPUT_POST, 'bairro');
	$cidade = filter_input(INPUT_POST, 'cidade');
	$estado = filter_input(INPUT_POST, 'estado');
	$cep = filter_input(INPUT_POST, 'cep');
	$nasc = filter_input(INPUT_POST, 'nasc');
	$sexo = filter_input(INPUT_POST, 'sexo');

	$data = array(
		'nome' => $name,
		'endereco' => $endereco,
		'bairro' => $bairro,
		'cidade' => $cidade,
		'estado' => $estado,
		'cep' => $cep,
		'nasc' => $nasc,
		'sexo' => $sexo,
	);

	$arquivo = 'data.json';
	$json = json_encode($data);
	$file = file_put_contents($arquivo, $json, FILE_APPEND | FILE_APPEND);

	function makeJson($file, $json){
		fwrite($file, $json);
		fclose($file);
	}
	header('Location: confirm.php');
	makeJson($file, $json);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>cadastrar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script src="./verificação/index.js" defer type="module"></script>

</head>

<body>

	<div class="container">
		<div class="container-login">
			<div class="wrap-login">
				<!-- primeiro form -->


				<!-- NA ACTION REDIRECIONEI PARA O ARQUIVO QUE IRÁ CADASTRAR -->
				<form class="login-form" action="" method="post" id="view">
					<!-- NA ACTION REDIRECIONEI PARA O ARQUIVO QUE IRÁ CADASTRAR -->


					<span class="login-form-title">
						Faça o seu cadastro
					</span>

					<div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="input-form" type="text" name="nomeCompleto" id="nomeCompleto" autocomplete="off">
						<span class="focus-input-form" data-placeholder="Nome completo"></span>
					</div>

					<div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="input-form" type="text" name="endereco" id="endereco" autocomplete="off">
						<span class="focus-input-form" data-placeholder="Endereço"></span>
					</div>

					<div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="input-form" type="text" name="bairro" id="bairro" autocomplete="off">
						<span class="focus-input-form" data-placeholder="Bairro"></span>
					</div>

					<div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="input-form" type="text" name="cidade" id="cidade" autocomplete="off">
						<span class="focus-input-form" data-placeholder="Cidade"></span>
					</div>

					<div class="margin-bottom-35">
						<select class="input-form" id="estado" name="estado">
							<option value="">Escolha seu estado</option>
							<option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AP">Amapá</option>
							<option value="AM">Amazonas</option>
							<option value="BA">Bahia</option>
							<option value="CE">Ceará</option>
							<option value="DF">Distrito Federal</option>
							<option value="ES">Espírito Santo</option>
							<option value="GO">Goiás</option>
							<option value="MA">Maranhão</option>
							<option value="MT">Mato Grosso</option>
							<option value="MS">Mato Grosso do Sul</option>
							<option value="MG">Minas Gerais</option>
							<option value="PA">Pará</option>
							<option value="PB">Paraíba</option>
							<option value="PR">Paraná</option>
							<option value="PE">Pernambuco</option>
							<option value="PI">Piauí</option>
							<option value="RJ">Rio de Janeiro</option>
							<option value="RN">Rio Grande do Norte</option>
							<option value="RS">Rio Grande do Sul</option>
							<option value="RO">Rondônia</option>
							<option value="RR">Roraima</option>
							<option value="SC">Santa Catarina</option>
							<option value="SP">São Paulo</option>
							<option value="SE">Sergipe</option>
							<option value="TO">Tocantins</option>
							<option value="EX">Estrangeiro</option>
						</select>
					</div>

					<div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="input-form" type="text" name="cep" id="cep" autocomplete="off">
						<span class="focus-input-form" data-placeholder="CEP"></span>
					</div>

					<div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="input-form" type="date" id="nasc" name="nasc">
					</div>

					<div class="margin-bottom-35">
						<select class="input-form" id="sexo" name="sexo">
							<option value="">Defina seu sexo</option>
							<option value="Feminino">Feminino</option>
							<option value="Masculino">Masculino</option>
							<option value="NãoBinario">Não Binario</option>
							<option value="LGBT">LGBT</option>
						</select>
					</div>

					<div class="container-login-form-btn">
						<button class="login-form-btn" id="btn" name="btn">
							Cadastrar
						</button>
					</div>

					<li>
						<span class="text1">
							Já tem conta?
						</span>

						<a href="../index.php" class="text2">
							Login
						</a>
					</li>
					</ul>
				</form>
			</div>
			<img src="../images/cadastro.png" width="300" height="300" class="margin-left-50" />


			<!-- animação do form -->
			<script>
				let inputs = document.getElementsByClassName('input-form');
				for (let input of inputs) {
					input.addEventListener("blur", function() {
						if (input.value.trim() != "") {
							input.classList.add("has-val");
						} else {
							input.classList.remove("has-val");
						}
					});
				}
			</script>

</body>

</html>