<!doctype html>
<html lang="PT-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Cadastro-Eduverde</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="CSS/signin.css" rel="stylesheet">
  </head>

  
  <body class="text-center">
    
<main class="form-signin">



  
  <form action="functions/register.php" method="POST">
    <a class="navbar-brand h1 mb-0" href="index.php">
    <img class="mb-4"  src="Imagens/logo.png" alt="" width="75" height="75">
  </a>
    <h1 class="h2 mb-3 fw-normal">Cadastro EduVerde</h1>
    <div class="form-floating">
      <input type="nome" class="form-control" id="nome" name="nome">
      <label for="nome">Nome</label>
    </div><br>
    <div class="form-floating">
      <input type="text" class="form-control" id="cpf" name="cpf">
      <label for="cpf">CPF</label>
    </div><br>
    <div class="form-floating">
      <input type="email" class="form-control" id="email" name="email">
      <label for="email">E-mail</label>
    </div><br>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password">
      <label for="password">Senha</label>
    </div>


  
    <div class="checkbox mb-4">
     
      <button class="w-100 btn btn-lg btn-success" type="submit" name="btnRegistrar">Cadastrar</button>
      
    </div>
    
    <a class="w-100 btn btn-lg btn-primary" href="login.php" type="button">Login</a> <!-- corrigir aqui -->

    <p class="mt-5 mb-3 text-muted">&copy; Eduverde 2022</p>
  </form>
</main>


    
  </body>
</html>
