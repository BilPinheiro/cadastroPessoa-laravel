<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Editar Pessoa
                            <a href="{{route('dashboard.view')}}" class="btn btn-danger float-end">Voltar</a>
                            </h4>
                        @if($errors->any())
                            <span style:"color: #ff000">
                                @foreach($errors->all() as $error)
                                {{$error}} <br>
                                @endforeach
                            </span>
                            <br>
                        @endif
                        </div>
                        <div class="card-body">
                            <form action="{{route('pessoa.update', ['pessoa' => $pessoa->id])}}" method="POST">
                                @csrf
                                @method("PUT")

                                <div class="mb-3">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="form-control" value="{{$pessoa->nome}}">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="{{$pessoa->email}}">
                                </div>
                                <div class="mb-3">
                                    <label>CPF</label>
                                    <input type="text" name="cpf" class="form-control" maxlength="11" minlength="11" value="{{$pessoa->cpf}}">
                                </div>
                        </div>
                        <div class="d-flex justify-content-center p-2">
                            <button type="submit" name="create_usuario" class="btn btn-primary">Salvar Edição</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</body>

</html>