<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<link rel="stylesheet" href="css/style.css">
    	<link rel="stylesheet" href="css/bootstrap.css">

	</head>
	<body>

   <?php $header_title = "Cadastro Profissional"; include("header.php");?>

    <section class="container">
        <div class="mt-3">
            <h2 class="title-pag text-primary">Cadastro profissional</h2> 
        </div>
        <div class=" mt-3 mb-5 p-3 bg-white rounded box-shadow">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputaNomePro">Nome</label>
                        <input type="text" class="form-control" id="inputaNomePro"  placeholder="Nome">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputaInstutuicao">Instituição</label>
                        <input type="text" class="form-control" id="inputaInstutuicao"  placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputProfissao">Profissão</label>
                        <input type="text" class="form-control" id="inputProfissao" placeholder="Médico">
                    </div>   
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputLogin">Login</label>
                        <input type="text" class="form-control" id="inputLogin">
                    </div>      
                    <div class="form-group col-md-6">
                        <label for="inputaSenha">Senha</label>
                        <input type="Password" class="form-control" id="inputaSenha">
                    </div>               
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail">E-mail</label>
                        <input type="Email" class="form-control" id="inputEmail" placeholder="E-mail">
                    </div>
                </div>
              <button type="submit" class="btn btn-primary">Cadastrar </button>
              </form>
          </div>
    </section>

    <?php include("footer.php");?>
  
  	</body>
</html>