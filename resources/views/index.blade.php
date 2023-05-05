@extends('templates.template')

@section('content')

<h5 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h5>
<p class="card-text">Sistema utilizado para agendamento de serviços.</p>
					<p>
					<form action="{{route('registrar_clientes')}}" method="POST">
					@csrf					
				
					@if(isset($errors) && count($errors)>0)
					<div class="alert alert-danger" role="alert">
						@foreach($errors->all() as $erro)
							{{$erro}}<br>
						@endforeach
					</div>
					@endif	
				
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Nome do Cliente:</label>
							<input type="text" class="form-control" required  name="nome">
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Telefone:</label>
							<input type="text" name="telefone" class="form-control" required   placeholder="(xx)xxxxx-xxxx">
						</div>

						<div class="mb-3">
							<label for="exampleFormControlSelect1" class="form-label">Origem:</label>
							<select class="form-select" name="origem" aria-label="Default select example">
								<option selected value="Celular">Celular</option>
								<option value="Fixo">Fixo</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Data do Contato:</label>
							<input type="date" class="form-control" name="data_contato" required  >
						</div>

						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Observação</label>
							<textarea class="form-control" name="observacao"  rows="3">Nenhuma observação.</textarea>
						</div>

						<button type="submit" id="btnInserir" class="btn btn-primary">Cadastrar</button>

@endsection