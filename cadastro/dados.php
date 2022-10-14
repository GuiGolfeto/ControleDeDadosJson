<?php

$json = file_get_contents("data.json");
$data = json_decode($json);


foreach ($data as $key => $a) {
    echo "{$key} => {$a}";
    echo '<br>';
}

?>

<link rel="stylesheet" type="text/css" href="../css/main.css">
<div class="container">
    <div class="container-login">
        <div class="wrap-login">
            <span class="login-form-title">
                Deseja cadastrar mais um usuario?
            </span>

            <div class="container-login-form-btn">
                <button class="login-form-btn">
                    <a href="./cadastro.php" class="login-form-btn">Sim</a>
                </button>
            </div>
        </div>
    </div>
</div>