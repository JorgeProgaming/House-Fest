
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



    <title>HouseFest | Cadastrar Eventos</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



    <!-- Estilos customizados para esse template -->
    <link href="https://getbootstrap.com.br/docs/4.1/examples/checkout/form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <i class="fas fa-hospital-symbol fa-7x"></i>
        <h2>Formulario para cadastrar o seu Evento</h2>
        <p class="lead">`Prencha para cadastrar o seu evento</p>
      </div>


      <div class="row">
      
        <div class="col-md-8 order-md-1">
          
          <h4 class="mb-3">Informações do Evento</h4>

          <form class="needs-validation" novalidate action="cadastrandoEvento.php" method="POST">

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="primeiroNome">Nome</label>
                <input name="nome" type="text" class="form-control" id="primeiroNome" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="sobrenome">Local</label>
                <input name="local" type="text" class="form-control" id="sobrenome" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um local válido.
                </div>
              </div>
             
         
               <div class="col-md-6 mb-3">
                <label for="sobrenome">Data</label>
                <input name="data" type="date" class="form-control" id="data" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir uma data válida.
                </div>
              </div>
            
            <div class="col-md-7 mb-4 mx-0">
                <label for="sobrenome">Tema do Evento</label>
                <select name="tema" class="custom-select" id="inputGroupSelect01">
                    <option selected>Temas</option>
                    <option value="festa">Festa e Show</option>
                    <option value="arte">Arte e Cultura</option>
                    <option value="infantil">Infantil</option>
                    <option value="religioso">Religioso</option> 
                    <option value="saude">Saúde e Bem-Estar</option>
                    <option value="curso">Curso e Workshop</option>
                    <option value="tec">Tecnologia</option>
                    <option value="moda">Moda e Beleza</option>
                    <option value="outros">Outros</option>
            </select>

                <div class="invalid-feedback">
                  É obrigatório inserir um tema válido.
                </div>
            </div>
                </div>
            


           


            
              
          
            

           
            
          
       
            <hr class="mb-4">
            <button class="btn btn-dark btn-lg btn-block" type="submit">Cadastrar Evento</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 HouseFest</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidade</a></li>
          <li class="list-inline-item"><a href="#">Termos</a></li>
          <li class="list-inline-item"><a href="#">Suporte</a></li>
        </ul>
      </footer>
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
          var forms = document.getElementsByClassName('needs-validation');

          // Faz um loop neles e previne envio
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>







