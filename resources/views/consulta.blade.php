@extends('templates.template')

@section('content')
    <center>
        <div class="col-10 m-auto">
        <h5 class="card-title mb-4 mt-3">Consultar - Contatos Agendados</h5>
        @csrf	
        <div class="table-responsive">
        <table class="table text-center">
            <thead class="table-blue bg-primary">
            <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Origem</th>
                    <th>Data do Contato</th>
                    <th>Observação</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody class="text-center ">
                @foreach($agendamento as $agendamentos)
                <tr >
                    <th >{{$agendamentos->nome}}</th>
                    <td>{{$agendamentos->telefone}}</td>
                    <td>{{$agendamentos->origem}}</td>
                    <td>{{$agendamentos->data_contato}}</td>
                    <td>{{$agendamentos->observacao}}</td>
                    <td>
                        <a href='{{url("/agendamento/ver/{$agendamentos->id}")}}'>
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href='{{url("/agendamento/editar/{$agendamentos->id}")}}'>
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a  href='{{url("/agendamento/deletar/{$agendamentos->id}")}}'  class="js-del">  
                        <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
                        
                @endforeach
                	
        </tbody>
        </table>
        
        </div>
   </center>
@endsection