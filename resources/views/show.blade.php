@extends('templates.template2')

@section('content')



<h5 class="card-title">Visualizar - Agendamento de {{$agendamento->nome}}</h5>

  
					<form>

                    <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Nome:</label>
							<input type="text" class="form-control"   name="nome" value="{{$agendamento->nome}}" readonly>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Telefone:</label>
							<input type="tel" name="telefone" class="form-control"   value="{{$agendamento->telefone}}" readonly>
						</div>

						<div class="mb-3">
							<label for="exampleFormControlSelect1" class="form-label">Origem:</label>
							<input class="form-select" name="origem" aria-label="Default select example" value="{{$agendamento->origem}}" readonly>
							
						</div>

						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Data do Contato:</label>
							<input type="date" class="form-control" name="data_contato"  value="{{$agendamento->data_contato}}" readonly >
						</div>

						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Observação</label>
							<input class="form-control" name="observacao"  rows="3" value="{{$agendamento->observacao}}" readonly>
						</div>

					
					</form>
					</p>

@endsection                   