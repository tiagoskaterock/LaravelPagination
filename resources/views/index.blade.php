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



			<div class="card-header">
				<h5>Clientes</h5>	
			</div>



			<div class="card-body">

				<div class="card-title">
					<h5>Exibindo 5 Clientes de um total de 100</h5>
				</div>

				<div class="table-responsive">
				  <table class="table table-bordered table-striped tabel-hover" id="dataTable" width="100%" cellspacing="0">
				
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
				        <td>Maria</td>				
				        <td>Santos</td>						
				        <td>maria@email.com</td>											          				   
				      </tr>


				      <tr>
				        <td>2</td>
				        <td>Joana</td>				
				        <td>Souza</td>						
				        <td>joanasouza@email.com</td>											          				   
				      </tr>


				      <tr>
				        <td>3</td>
				        <td>Pedro</td>				
				        <td>Lima</td>						
				        <td>pedro_limaaa@email.com</td>											          				   
				      </tr>


				
				    </tbody>
				
				  </table>
				
				</div>
						
			</div>




			<div class="card-footer">
				<h5>Páginas</h5>
			</div>



		</div>

	</div>




	<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
