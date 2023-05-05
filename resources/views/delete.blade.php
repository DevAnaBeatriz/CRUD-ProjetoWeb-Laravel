@extends('templates.template')

@section('content')
<h5 class="card-title">Deletar - Agendamento de {{ $agendamento->nome }}</h5>
					<p>
					<form action='{{url("/agendamento/deletar/{$agendamento->id}")}}' method="POST">
					@csrf
						<div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tem certeza que deseja excluir esse registro?</label>
                            <br>
							<label for="exampleFormControlInput1" class="form-label">Nome:</label>
							<input value="{{ $agendamento->nome }}" type="text" class="form-control" required  name="nome" readonly>
						</div>

						
                        <button type="submit" id="btnInserir" class="btn btn-primary">Deletar</button>

                      <a href="{{url('/consulta')}}">
                            <button type="button" class="btn btn-primary" href="{{url('/consulta')}}" >Voltar</button>
                     </a>
					</form>
@endsection   