 <!DOCTYPE html>
 <html>
  	<head>
  		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="css/style.css">
    	  <link rel="stylesheet" href="css/bootstrap.css">  

  	</head>
  	<body>

      <?php $header_title = "Visualizar usuario"; include("header.php");?>

      <section class="container">

          <div class="mt-2">
              <h2 class="title-pag text-primary">Pacientes</h2>
          </div>

              <div class='mt-3 mb-5 p-3 bg-white rounded box-shadow'>
                <form action='../html/cadastro_referencia.php' method='post'>
                  <div class='form-row'>
                      <div class='form-group col-md-12'>
                          <label for='inputaNome'>Nome:</label>
                          <p>$obj->nome</p>
                      </div>
                      <div class='form-group col-md-12'>
                          <label for='inputNomeMae'>Nome da mãe:</label>
                          <p>$obj->nome_mae</p>
                      </div>
                  </div>
                  <div class='form-row'>
                  <div class='form-group col-md-4'>
                          <label for='inputNcartao'>Nº cartão do SUS</label>
                          <input type='text' class='form-control' id='inputNcartao' value='$obj->nun_sus' name='nun_sus'>
                      </div>
                      <div class='form-group col-md-4'>
                          <label for='inputDataNascimento'>Data de nascimento</label>
                          <input type='text' class='form-control' id='inputDataNascimento' value='$obj->data_nascimento' name='data_nascimento'>
                      </div>
                      <div class='form-group col-md-4'>
                          <label class='mr-sm-2' for='inlineFormCustomSelect'>Sexo</label>
                          <input type='text' class='form-control' id='inputDataNascimento' value='$obj->sexo' name='sexo'>
                      </div>
                      <div class="col-xl-4 col-md-6">
                        <button type='submit' class='btn btn-primary'>Referenciar </button>
                      </div>
                      <div class="col-xl-4 col-md-6">
                        <button  class='btn btn-primary'>Editar </button>
                      </div>
                </div>

                <?php include("footer.php");?>

       </body>
  </html>