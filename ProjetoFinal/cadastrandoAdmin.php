<?php
    include './autenticacaoBD.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO Administrador (nome, email, senha)
    VALUES ('$nome', '$email', '$senha')";

    if (mysqli_query($conn, $sql)) {
        include './sucessoNoCadastro.php';
    } else {
        include './falhaNoCadastro.php';
    }

    mysqli_close($conn);
