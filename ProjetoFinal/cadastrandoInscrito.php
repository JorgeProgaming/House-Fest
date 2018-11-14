<?php
    include './autenticacaoBD.php';
    
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $id = $_POST['numEve'];
    
    $sql = "INSERT INTO Inscritos (nome, tel, email, idEve)
    VALUES ('$nome', '$telefone', '$email', '$id')";

    if (mysqli_query($conn, $sql)) {
        include './sucessoNoCadastro.php';
    } else {
        include './falhaNoCadastro.php';
    }

    mysqli_close($conn);
    