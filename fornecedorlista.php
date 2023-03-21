<?php $dados = file("fornecedores.txt");?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title> Lista de Clientes </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

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
	  	<div class="col-10 offset-1">
	  		<table class="table table-bordered border-primary" id="myTable">

	  			<thead class="text-center bg-dark text-white">
	  				<th> Nome</th>
	  				<th> Razão social </th>
	  				<th> CNPJ </th>
	  				<th> Data de cadastro </th>
	  			</thead>
	  			<tbody>	  				
	  				<?php foreach($dados as $string): ?>
	  					<?php $linha = explode(" - ", $string); ?>
	  					<tr>
		  					<?php foreach ($linha as $dado): ?>
		  						<td><?=$dado;?></td>		
		  					<?php endforeach; ?>
	  					</tr>
	  				<?php endforeach; ?>
	  			</tbody>
	  			<tfoot class="text-center">
                    <th> Nome</th>
	  				<th> Razão social </th>
	  				<th> CNPJ </th>
	  				<th> Data de cadastro </th>
	  			</tfoot>
				
	  		</table>
	  	</div>	  	
	  </div>
	</div>


	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	
	<!-- Bootstrap -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	
	<!-- Icones -->
	<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>    
    
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

    <!-- Custom Script -->
	<script type="text/javascript">
		$(document).ready(function () {
		    $('#myTable').DataTable({
		    	"language": {
			        "sProcessing":    "Procesando...",
			        "sLengthMenu":    "Mostrar _MENU_ registros",
			        "sZeroRecords":   "Não se encontram resultados",
			        "sEmptyTable":    "Ningún dato disponible em esta tabela",
			        "sInfo":          "Mostrando registros de _START_ a _END_ de um total de _TOTAL_ registros",
			        "sInfoEmpty":     "Mostrando registros de 0 al 0 de un total de 0 registros",
			        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
			        "sInfoPostFix":   "",
			        "sSearch":        "Buscar:",
			        "sUrl":           "",
			        "sInfoThousands":  ",",
			        "sLoadingRecords": "Carregando...",
			        "oPaginate": {
			            "sFirst":    "Primero",
			            "sLast":    "Último",
			            "sNext":    "Seguinte",
			            "sPrevious": "Anterior"
			        },
			        "oAria": {
			            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			        }
			    }
		    });
		});
	</script>

</body>
</html>