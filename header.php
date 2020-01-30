
    <meta charset="utf-8">
      <title><?php print $header_title =" a"; ?></title>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<link rel="stylesheet" href="css/style.css">
    	<link rel="stylesheet" href="css/bootstrap.css">




    <!--  Modal   -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitulo" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLoginTitulo">Entre na Sua Conta</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="manter_login.php" method="post">
              <div class="form-group">
                <label for="loginEmail">Login</label>
                <input type="text" class="form-control" id="loginEmail" name="login">
              </div>
              <div class="form-group">
                <label for="loginSenha">Senha</label>
                <input type="password" class="form-control" id="loginSenha" name="senha">
              </div>
              <button type="submit" class="btn btn-primary">Entrar na Conta</button>
              <small class="form-text text-muted">Esqueceu a senha? <a href="#">Clique aqui</a>.</small>
              <small class="form-text text-muted">Ou cadastra-se <a href="cadastro-profissional.html">Cadastrar-se</a>.</small>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Fecha Modal  -->






    <?php

 @SESSION_START();

      if ( !isset($_SESSION["login"]) and !isset($_SESSION["senha"]) ) {

        echo "<nav class='navbar navbar-expand-md navbar-light bg-light fixed-top py-3 box-shadow'>
            <a class='navbar-brand' href='#'>RCROnline</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav ml-auto'>
                    <li class='nav-item active'>
                        <a class='nav-link' href='index.php'>Inicio</a>
                    </li>
                    <li class='nav-item active'>
                        <a class='nav-link' href='#' data-toggle='modal' data-target='#modalLogin'>Entrar</a>
                    </li>
                    <li class='nav-item active'>
                        <a class='nav-link' href='#'></a>
                    </li>
                </ul>
            </div>
        </nav>
";
      }else{
        $login=$_SESSION["login"];
        $senha=$_SESSION["senha"];
        echo "<nav class='navbar navbar-expand-md navbar-light bg-light fixed-top py-3 box-shadow'>
            <a class='navbar-brand' href='#'>RCROnline</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav ml-auto'>
                    <li class='nav-item active'>
                        <a class='nav-link' href='index.php'>Inicio</a>
                    </li>
                    <li class='nav-item active'>
                        <a class='nav-link' href='#' data-toggle='modal' data-target='#modalLogin'>$login</a>
                    </li>
                    <li class='nav-item active'>
                        <a class='nav-link' href='destruir_sessao.php'data-target='#sair'>Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
";

      }
     ?>
