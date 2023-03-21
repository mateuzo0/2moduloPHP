<!DOCTYPE html>
<html>
<head>
	<title> Formulario de Cadastro </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark" style="color: white !important;background-color: #ff9b0094 !important;">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"> IMPORTADOS </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Produtos
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="produtos.php">Cadastro de Produtos</a></li>
	            <li><a class="dropdown-item" href="produtoslista.php">Lista de Produtos</a></li>
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Fornecedores
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="index.php">Cadastro de Fornecedores</a></li>
	            <li><a class="dropdown-item" href="fornecedorlista.php">Lista dos Fornecedores</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<hr>
	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
	  		<form action="fornereceber.php" method="POST">
				<div class="card">
				  <div class="card-header">
				    Formulário de Cadastro de Fornecedor
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				<div class="col-md-8">
		  					<label> Nome: <span class="text-danger">*</span> </label><br>
							<input type="text" name="nome" class="form-control" required placeholder="Digite seu nome"><br>
		  				</div>

		  				<div class="col-md-4">
		  					<label> Razão social: <span class="text-danger">*</span></label><br>
							<input type="text" name="rsocial" class="form-control" required placeholder="Digite a razão social"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> CNPJ: <span class="text-danger">*</span> </label><br>
							<input type="number" name="cnpj" class="form-control" required placeholder="Digite o CNPJ"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> Data de cadastro: <span class="text-danger">*</span></label><br>
							<input type="date" name="data" class="form-control" required><br>
		  				</div>			    	
		  				
				    	<div class="col-md-12">
				    		<button type="submit" class="btn btn-success"> Enviar Dados </button>
				    	</div>
		  			</div>	

				  </div>
				</div>
			</form>
	  	</div>	  	
	  </div>
	</div>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>