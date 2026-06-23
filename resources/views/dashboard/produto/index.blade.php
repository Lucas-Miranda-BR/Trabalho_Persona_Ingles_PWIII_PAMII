<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin - Solemn's Workshop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<!-- NAVBAR -->

<nav class="navbar bg-white shadow-sm border-bottom">
    <div class="container-fluid navbar-custom">

        <div class="navbar-brand d-flex align-items-center m-0">

            <img src="{{ asset('imagens/pngtree-circle-technology-abstract-logo-vector-minimalist-png-image_1881155-removebg-preview.png') }}"
                 alt="Logo"
                 class="logo-navbar me-2">

            <span class="fw-bold titulo-navbar">
                Solemn's Workshop
            </span>

        </div>

        <div class="d-flex align-items-center gap-2">

            <a href="{{ route('principal') }}"
               class="btn btn-info text-white btn-navbar">
                Ver Loja
            </a>

            <a href="{{ route('logout') }}"
               class="btn btn-outline-danger btn-navbar">
                Sair
            </a>

        </div>

    </div>
</nav>

<div class="container py-5">

    <div class="mb-5">
        <h1 class="fw-bold">
            Painel Administrativo
        </h1>

        <p class="text-muted">
            Gerencie produtos da loja.
        </p>
    </div>
    <div class="card shadow-sm mb-5">

        <div class="card-header bg-info text-white">
            <h5 class="mb-0">
                Adicionar Produto
            </h5>
        </div>

        <div class="card-body">

            <form action="{{route('produto.create')}}" method="post">

            @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="nome">
                            Nome do Produto
                        </label>

                        <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome') }}">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label" for="preco">
                            Preço
                        </label>

                        <input type="number" step="0.01" class="form-control" name="preco" id="preco" value="{{ old('preco') }}">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label" for="estoque">
                            Estoque
                        </label>

                        <input type="number" class="form-control"  name="estoque" id="estoque" value="{{ old('estoque') }}">
                    </div>

                </div>

                <div class="mb-3">

                    <label class="form-label" for="descricao">
                        Descrição
                    </label>

                    <textarea class="form-control" rows="3" name="descricao" id="descricao" value="{{ old('descricao') }}"></textarea>

                </div>

                <button class="btn btn-info text-white">
                    Adicionar Produto
                </button>
            </form>
        </div>
    </div>

    @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif