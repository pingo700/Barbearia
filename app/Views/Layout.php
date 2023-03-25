<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="images/png" href="images/favicon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="js/script.js"></script>
  <title>Barbearia</title>
</head>
<body>
  <nav style="background-color: #030303;" class="navbar navbar-expand-lg navbar-dark border-bottom shadow-sm mb-3">
    <div class="container">
      <!--<a class="navbar-brand" href=""><strong>Mustache </strong></a>-->
      <img src="images/logo.png">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar-collapse">
        <span class="navbar-toggle-icon"></span>
      </button>
      <div class="align-self-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="produtos">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="sobre">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="produtos">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white">
              <img src="images/carrinho.png.png" style="width: 40px; cursor: pointer; ">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <?php $this->renderSection('content'); ?>
    <footer class="border-top text-muted bg-ligth">
      <div class="container">
        <div class="row py-3">
          <div class="col-12 cold-md-4 text-center text-md-left">
            &copy; 2022 - Mustache
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
      integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
</body>

</html>