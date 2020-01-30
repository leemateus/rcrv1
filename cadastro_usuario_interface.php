<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<link rel="stylesheet" href="css/style.css">
    	<link rel="stylesheet" href="css/bootstrap.css">

	</head>
	<body>

        <?php $header_title = "Cadastro usuario"; include("header.php");?>

        <section class="container">

            <div class="mt-2">
                <h2 class="title-pag text-primary">Pagina de cadastro do Usuario</h2>
            </div>

            <div class="mt-3 mb-5 p-3 bg-white rounded box-shadow">
                <form action="cadastro_usuario_bd.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputaNome">Nome</label>
                            <input type="text" class="form-control" id="inputaNome"  placeholder="Nome" name="nome">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputNomeMae">Nome da mãe</label>
                            <input type="text" class="form-control" id="inputNomeMae" placeholder="Nome da mãe" name="nome_mae">
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                            <label for="inputNcartao">Nº cartão do SUS</label>
                            <input type="text" class="form-control" id="inputNcartao" placeholder="Nº cartão do SUS" name="nun_sus">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputDataNascimento">Data de nascimento</label>
                            <input type="date" class="form-control" id="inputDataNascimento" placeholder="01/01/2001" name="data_nascimento">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Sexo</label>
                            <select class="custom-select mr-sm-2" id="inputSexo" name="sexo">
                                <option selected>Escolher....</option>
                                <option value="F">Feminino</option>
                                <option value="M">Masculino</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputLogradouro">Endereço</label>
                            <input type="text" class="form-control" id="inputLogradouro" placeholder="Rua da flores" name="logradouro">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputBairro">Bairro</label>
                            <input type="text" class="form-control" id="inputBairro" placeholder="Centro" name="bairro">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputComplemento">Complemento</label>
                            <input type="text" class="form-control" id="inputComplemento" name="complemento">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputNumero">Numero</label>
                            <input type="text" class="form-control" id="inputNumero" name="numero">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCidade">Cidade</label>
                            <input type="text" class="form-control" id="inputCidade" placeholder="Floriano" name="cidade">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCep">CEP</label>
                            <input type="text" class="form-control" id="inputCep" name="CEP">
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputTelefone">Telefone</label>
                            <input type="text" class="form-control" id="inputTelefone" name="telefone">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar </button>
                </form>
            </div>
        </section>

        <?php include("footer.php");?>

	</body>
</html>
