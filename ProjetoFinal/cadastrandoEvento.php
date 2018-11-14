<?php
    include './autenticacaoBD.php';

    $nomeEve = $_POST['nome'];
    $dataEve = $_POST['data'];
    $temaEve = $_POST['tema'];
    $localEve = $_POST['local'];

    $sql = "INSERT INTO `Evento`( `nomeEve`, `dataEve`, `temaEve`, `localEve`)
              VALUES (' $nomeEve','$dataEve','$temaEve','$localEve')";

    if (mysqli_query($conn, $sql)) {
        include './sucessoNoCadastroEve.php';
    } else {
        include './falhaNoCadastroEve.php';

    }

    mysqli_close($conn);
    