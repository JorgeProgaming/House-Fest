<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>HouseFest | Exibir Eventos</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/album/album.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            
          
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            
            <strong>HouseFest</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Ola Aqui voce pode visualizar todos os eventos disponiveis</h1>
          <p class="lead text-muted">Basta se inscrever para participar e se divertir.</p>
          
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <?php
                include './autenticacaoBD.php';
                
                $sql = "SELECT id, nomeEve, dataEve, temaEve, localEve FROM Evento";
                $result = mysqli_query($conn, $sql);

                // É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
                if (mysqli_num_rows($result) > 0) {
                    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
                    while($row = mysqli_fetch_assoc($result)) {
                        
                        echo '<div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                  <div class="card-body">
                                    <p class="card-text">'.'Numero do Evento: '.$row['id'].'<br>'.'Nome: '.$row['nomeEve'].'<br>'.'Data: '.$row['dataEve'].'<br>'.'Tema: '.$row['temaEve'].'<br>'.'Local: '.$row['localEve'].'</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <small class="text-muted"></small>
                                        <a href="cadastrarInscritos.php">Inscreva-se</a>
                                    </div>
                                  </div>
                                </div>
                              </div>';
                        }
                } else {
                    echo "A tabela Registro está vazia";
                }
                mysqli_close($conn);

            ?>
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
