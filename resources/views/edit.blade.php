@extends('templates.template')

@section('content')



<h5 class="card-title">Editar - Agendamento de {{$agendamento->nome}}</h5>

  
				<form action='{{url("/agendamento/editar/{$agendamento->id}")}}' method="POST">
					@csrf					
				
					@if(isset($errors) && count($errors)>0)
					<div class="alert alert-danger" role="alert">
						@foreach($errors->all() as $erro)
							{{$erro}}<br>
						@endforeach
					</div>
					@endif	

                    <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Nome:</label>
							<input type="text" class="form-control"   name="nome" value="{{$agendamento->nome}}" required>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Telefone:</label>
							<input type="tel" name="telefone" class="form-control"   value="{{$agendamento->telefone}}" required>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlSelect1" class="form-label">Origem:</label>
							<select class="form-select" name="origem" aria-label="Default select example">
								@if(($agendamento->origem)=="Fixo")
								<option selected value="Fixo">Fixo</option>
								<option value="Celular">Celular</option>
								@else
								<option selected value="Celular">Celular</option>
								<option value="Fixo">Fixo</option>
								@endif
							</select>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Data do Contato:</label>
							<input type="date" class="form-control" name="data_contato"  value="{{$agendamento->data_contato}}" required >
						</div>

						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Observação</label>
							<input class="form-control" name="observacao"  rows="3" value="{{$agendamento->observacao}}">
						</div>

						<button type="submit" id="btnInserir" class="btn btn-primary">Alterar</button>
						<a href="{{url('/consulta')}}">
                            <button type="button" class="btn btn-primary" href="{{url('/consulta')}}" >Voltar</button>
                     </a>
					</form>
					</p>

@endsection                   