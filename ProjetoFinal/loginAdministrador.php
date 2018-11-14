
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>HouseFest | Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
      <form class="form-signin" action="logandoAdmin.php" method="POST">
      <i class="fas fa-hospital-symbol fa-5x"></i>
      <h1 class="h3 mb-3 font-weight-normal">Ola Adminsitrador</h1>
      <label for="inputEmail" class="sr-only">Insira seu Email</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Insira sua Senha</label>
      <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Password" required>
      
      <button class="btn btn-lg btn-dark btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
