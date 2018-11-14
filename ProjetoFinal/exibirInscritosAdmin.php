<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>HouseFest | Exibir Inscritos</title>
  </head>
  <body>
      <?php
    include './autenticacaoBD.php';

    $sql = "SELECT id, nome, tel, email FROM inscritos";
    $result = mysqli_query($conn, $sql);

    // É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
    if (mysqli_num_rows($result) > 0) {
        // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
        echo "<table class='table table-dark'>";
        echo "    <tr>";
        echo "        <td>";
        echo "            Nome";
        echo "        </td>";
        echo "        <td>";
        echo "            Telefone";
        echo "        </td>";
        echo "        <td>";
        echo "            Email";
        echo "        </td>";
        echo "    </tr>";
        while($row = mysqli_fetch_assoc($result)) {
            //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
            echo "<tr>";
            echo "   <td>";
            echo        $row['nome'];
            echo "   </td>";
            echo "   <td>";
            echo        $row['tel'];
            echo "   </td>";
            echo "   <td>";
            echo        $row['email'];
            echo "   </td>";
           
            echo "</tr>";
            }
            echo "</table>";
    } else {
        echo "A tabela Registro está vazia";
    }
    mysqli_close($conn);
?>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

