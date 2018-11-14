<?php
    include './autenticacaoBD.php';
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT email, senha FROM Administrador";
    $result = mysqli_query($conn, $sql);

    // É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
    if (mysqli_num_rows($result) > 0) {
        // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
        $email2 = '';
        $senha2 = '';
        
        while($row = mysqli_fetch_assoc($result)) {
            if($row['email'] == $email && $row['senha'] == $senha){
                $email2 = $row['email'];
                $senha2 = $row['senha'];
                break;
            }else{
                $email2 = '';
                $senha2 = '';
            }
            }
            if($email2 == $email && $senha2 == $senha){
                include './sistemaAdministrador.php';
            }else if($row['email'] != $email && $row['senha'] != $senha){
                include './Fail_1.php';
            }
            
    } else {
        echo "A tabela Registro está vazia";
    }
    mysqli_close($conn);
