<?php

@$login = trim($_GET["nome"]); 
@$senha = trim($_GET["senha"]);

if (strlen($login) == 0 || strlen($senha) == 0) {
    echo "erro - lenght";    
    exit(0);
}

include("conexao.php");

$sql = "SELECT * FROM dados WHERE nome='$login' AND senha='$senha'";
$result = $con->query($sql);

if ($result->num_rows == 1) {
    
    session_start();
    $_SESSION["usuario"] = $login;
    $_SESSION["senha"] = $senha;
    header("Location: restrita.php");
    exit(0);

} else {

echo "erro - num_rows <br> $login <br> $senha";    
    exit(0);

}