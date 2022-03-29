<?php

include_once ('config.php');

if(isset($_POST['nome'], $_POST['cel'], $_POST['cep'], $_POST['email'])){

    $nome = $_POST['nome'];
    $celular = $_POST['cel'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, celular, cep, email) VALUES ('$nome', '$celular', '$cep', '$email')"); 
    
} else{ 
    echo 'ERRO NA CONEXÃO!!';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<br><br>
<center>
    <h1>Seja Bem Vindo!</h1>
</center>

<body>
    <main>
        <form action="index.php" method="POST">
            <label>Nome</label>
            <input type="text" name="nome" required />
            <label>Celular</label>
            <input type="number" name="cel" required />
            <label>CEP</label>
            <input type="number" name="cep" required />
            <label>E-mail</label>
            <input type="text" name="email" required />
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>