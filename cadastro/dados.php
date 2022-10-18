<link rel="stylesheet" type="text/css" href="../css/main.css">

<?php

if (file_exists('data.json')) {
    $json = file_get_contents("data.json");
    $data = json_decode($json, true);

    echo "<div class='container'>";
        echo "<div class='container-login'>";
            echo "<div class='wrap-login'>";
                foreach ($data as $key => $value){
                    echo "<br>";
                    echo "<h3>Cadastro => ". $key . "</h3>" ;
                    echo "<br>";
                    foreach ($value as $dataValue => $a){
                        echo "<strong>" . $dataValue . ": " ."</strong>" . $a;
                        echo "<br>";
                    }
                }
                echo "<br>";
                echo "<h3>Role para baixo para escolher uma opção</h3>";
            echo "</div>";
        echo "</div>";
    echo "</div>";

} else {
    echo "<h1 class='login-form-title'>Você ainda não possui usuarios cadastrados</h1>";
}

?>
<div class="container">
    <div class="container-login">
        <div class="wrap-login">
            <span class="login-form-title">
                Deseja cadastrar um usuario ou fazer login?
            </span>
            <div class="container-login-form-btn margin-top-35">
                <button class="login-form-btn">
                    <a href="./cadastro.php" class="login-form-btn">Cadastrar usuario</a>
                </button>
            </div>
            <div class="container-login-form-btn margin-top-35">
                <button class="login-form-btn">
                    <a href="../index.php" class="login-form-btn">Fazer login</a>
                </button>
            </div>
        </div>
    </div>
</div>