<!DOCTYPE html>
<html lang="pt-br">
    @vite(['resources/css/app.css',
    'resources/js/app.js',
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/bootstrap/dist/js/bootstrap.bundle.js'])
<head>
    <style>
		body {
			background-color: #CCCCCC;
            
		}
	</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CRUD com Laravel </title>
<head>
@csrf
<body>
    <div class="container">
            <div class="row">
                
                <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-primary" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Cadastrar</a>
                            <a class="nav-link" href="{{url('/consulta')}}">Consultar</a>
                        </div>
                        </div>
                    </div>
                    </nav>
            </div>
            <div class="row">
                <div class="card mb-3 col-12">
                    <div class="card-body">
                        @yield('content')
                   
                    </div>
			</div>
		</div>
	</div>
</body>

</html>