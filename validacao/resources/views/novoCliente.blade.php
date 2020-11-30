<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
        body {padding: 20px;}
    </style>

    <title>Cadastro de Cliente</title>

</head>

<body>

    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de Cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" method="post">
                            <div class="form-group">
                                <label for="nome">Nome do Cliente</label>
                                <input type="text" id="nome" class="form-control" name="nome" placeholder="Nome do cliente">
                            </div>
                            <div class="form-group">
                                <label for="nome">Idade do Cliente</label>
                                <input type="number" id="idade" class="form-control" name="idade" placeholder="Idade do cliente">
                            </div>
                            <div class="form-group">
                                <label for="nome">Endereco do Cliente</label>
                                <input type="text" id="endereco" class="form-control" name="endereco" placeholder="Endereco do cliente">
                            </div>
                            <div class="form-group">
                                <label for="nome">E-mail do Cliente</label>
                                <input type="text" id="email" class="form-control" name="email" placeholder="E-mail do cliente">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{asset('js/app.js')}}" type="teext/javasript"></script>
</body>
</html>