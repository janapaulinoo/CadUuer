<?php

/*variaveis para armanexamento de dados do form*/
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

/*comfirma dados informados pelo usuario*/
echo "<h3>nome: $nome </h3>";
echo "<h3>email: $email </h3>";
echo "<h3>senha: a senha é secreta </h3>";

//string de inserção no bsnco
$cad_usurio = "INSERT INTO usuario (nome, email, senha)" VALUES ('$nome', '$email' , '$senha')";


?>