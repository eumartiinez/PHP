<?php 
    $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
     $matricula = $_GET ["matricula"];
     $sql= "SELECT * FROM funcionario WHERE matricula = $matricula;";
     $res= mysqli_query($mysqli,$sql);
     $funcionario = mysqli_fetch_array ($res);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Editar | Pet&Gatô</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />
    <link rel="stylesheet" href="_css/main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  </head>
  <body>
    <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
              
              <a class="navbar-brand" href="#"></a>
              <a href="index.php"><img src="_img/logo_petgato.png" class="img-center" width="10%"/></a>
              
              <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" 
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"> Início</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Serviços</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Fazer logout</a>
                  </li>
                </ul>
              </div>
          </nav>
        </div>
    </div>


<div class="registration-form">
            <form action="editar_funcionarioteste.php" method="POST">
                <input type="hidden" name="matricula" value="<?php echo $matricula?>">
                <div class="form-icon">
                    <span><i class="icon far fa-user" align-self-center ></i></span>
                </div>
                
                <h5 class="text-uppercase">Editar Cliente:</h5>
                <br>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="nome" placeholder="Nome Completo" value="<?php echo $funcionario['nome']?>">
                </div>
                <div class="form-group">
                    <input type="email" required="required" class="form-control item" name="email" placeholder="E-mail" value="<?php echo $funcionario['email']?>">
                </div>
                <div class="form-group">
                    <input type="date" required="required" class="form-control item" name="data_nasc" placeholder="Data de Nascimento" value="<?php echo $funcionario['data_nasc']?>">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="ADM" placeholder="ADM" value="<?php echo $funcionario['ADM']?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="update" id="update" class="btn btn-block create-account">Enviar</button>
                </div>
                <div class="w-40 text-md-flex container">
									<a href="funcionario.php">Voltar</a>
								</div>
            </form>

        </div>
    </div>


</body>
</html>
