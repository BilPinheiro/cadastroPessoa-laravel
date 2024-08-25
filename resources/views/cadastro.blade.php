<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Adicionar Pessoa
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
                            <form action="{{route('pessoa.cadastro')}}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>CPF</label>
                                    <input type="text" name="cpf" id="cpf" class="form-control"  value="{{ old('cpf') }}" maxlength="11" min="11">
                                </div>
                        </div>
                        <div class="d-flex justify-content-center p-2">
                            <button type="submit" name="create_usuario" class="btn btn-primary">Salvar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- <script src="{{ asset('js/custom.js') }}" > -->
        <script>
            let inputCpf = document.getElementById("cpf");

            inputCpf.addEventListener("input", function() {

                let valueCpf = this.value.replace(/[^\d]/g, '');
                this.value = valueCpf;

            })
        </script>
    </body>
</body>

</html>