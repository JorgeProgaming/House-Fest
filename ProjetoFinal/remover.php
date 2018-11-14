<?php
    include './autenticacaoBD.php';
    
    $id = $_POST['numEve'];
    
    $sql = "DELETE FROM Evento WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        include './sucessoRemover1.php';
    } else {
        include './falhaRemover.php';
    }

    mysqli_close($conn);
