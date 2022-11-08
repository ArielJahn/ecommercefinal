<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce - curso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">Ecommerce</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('categoria') }}" class="nav-link">Categorias</a>
                <a href="{{ route('cadastrar') }}" class="nav-link">Cadastrar</a>
            </div>
        </div>
        <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row">
            @if(isset($lista))
                @foreach($lista as $prod)
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset($prod->foto)}}" class="card-img-top" />
                    <div class="card-body">
                        <h6 class="card-tittle">{{ $prod->nome }} - {{$prod->valor}}</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
            @endforeach
        @endif

        </div>
    </div>
</body>
</html>