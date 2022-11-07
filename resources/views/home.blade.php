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
                <a href="#" class="nav-link">Home</a>
                <a href="#" class="nav-link">Categorias</a>
                <a href="#" class="nav-link">Cadastrar</a>
            </div>
        </div>
        <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto1.jpg')}}" class="card-img-top" />
                    <div class="card-body">
                        <h6 class="card-tittle">Produto 1</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto2.jpg')}}" class="card-img-top" />
                    <div class="card-body">
                        <h6 class="card-tittle">Produto 2</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto3.jpg')}}" class="card-img-top" />
                    <div class="card-body">
                        <h6 class="card-tittle">Produto 3</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto4.jpg')}}" class="card-img-top" />
                    <div class="card-body">
                        <h6 class="card-tittle">Produto 4</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto5.jpg')}}" class="card-img-top" />
                    <div class="card-body">
                        <h6 class="card-tittle">Produto 5</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto6.jpg')}}" class="card-img-top" />
                    <div class="card-body">
                        <h6 class="card-tittle">Produto 6</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</body>
</html>