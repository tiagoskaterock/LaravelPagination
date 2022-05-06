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
				{{ $clientes->links() }}
			</div>



			<div class="card-body">

				<div class="card-title">
					<h5>Exibindo {{ $clientes->count() }} de um total de {{ $clientes->total() }} clientes</h5><br>	
					<h6>{{ $clientes->firstItem() }} a {{ $clientes->lastItem() }}</h6>				
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
				
				    	@foreach($clientes as $cliente)
					      <tr>
					        <td>{{ $cliente->id }}</td>
					        <td>{{ $cliente->nome }}</td>				
					        <td>{{ $cliente->sobrenome }}</td>						
					        <td>{{ $cliente->email }}</td>											          				   
					      </tr>				    	
				    	@endforeach


				
				    </tbody>
				
				  </table>
				
				</div>
						
			</div>




			<div class="card-footer" style="display: flex; align-content: center; align-items: center;">
				{{ $clientes->links() }}
			</div>



		</div>

	</div>




	<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
