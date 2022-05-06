<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="crsf-token" content="{{ csrf_token() }}">
	<title>Pagination</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>



<body>

	<div class="container text-center mt-5">
		
		<div class="text-center card">



			<div class="card-header" style="display: flex; align-content: center; align-items: center;">
				Paginação
			</div>



			<div class="card-body">

				<div class="card-title">
					<h5>Exibindo 69 de um total de 6969 clientes</h5><br>	
					<h6>69 a 96</h6>				
				</div>

				<div class="table-responsive">
				  <table class="table table-bordered table-striped tabel-hover" id="tabela-clientes" width="100%" cellspacing="0">
				
				    <thead class="bg-light">
				      <tr>
				        <th>ID</th>				        				
				        <th>Nome</th>
				        <th>Sobrenome</th>
				        <th>Email</th>				        
				      </tr>
				    </thead>
				
				    <tbody>		

				      <tr>
				        <td>1</td>						
				        <td>Marcos</td>
				        <td>Santos</td>				
				        <td>marquinho@gmail.com</td>											          				   
				      </tr>				    	
				
				    </tbody>
				
				  </table>
				
				</div>
						
			</div>




			<div class="card-footer" style="display: flex; align-content: center; align-items: center;">
				Paginação
			</div>



		</div>

	</div>




	<script src="{{ asset('js/app.js') }}"></script>

	{{-- AJAX DA PAGINAÇÃO --}}
	<script>

		function montarLinha(cliente) {
			return "" +
			 "<tr>" +
			  "<td>" + cliente.id + "</td>" +								  											          				  
			  "<td>" + cliente.nome + "</td>" +								  											          				  
			  "<td>" + cliente.sobrenome + "</td>" +								  											          				  
			  "<td>" + cliente.email + "</td>" +								  											          				  
			"</tr>";
		}

		function montarTabela(data) {
			$('#tabela-clientes>tbody>tr').remove();
			for (var i = 0; i < data.data.length; i++) {
				s = montarLinha(data.data[i]);
				$('#tabela-clientes>tbody').append(s);
			}
		}

		function CarregarClientes(pagina) {
			$.get('/json', {page: pagina}, function(resp) { 
				console.log(resp);
				montarTabela(resp);
			});			
		}

		$(function() {
			CarregarClientes(3);
		});

	</script>

</body>
</html>
