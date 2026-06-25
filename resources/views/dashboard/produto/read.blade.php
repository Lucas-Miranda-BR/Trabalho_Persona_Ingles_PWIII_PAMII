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

            <a href="{{ route('dashboard.dashboard') }}"
               class="btn btn-info text-white btn-navbar">
                Dashboard
            </a>

            <a href="{{ route('usuario.logout') }}"
               class="btn btn-outline-danger btn-navbar">
                Sair
            </a>

        </div>

    </div>
</nav>

<div class="card shadow-sm mb-5">

        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">
                Produtos Cadastrados
            </h5>
            <a href="{{ route('dashboard.produto.index') }}">Adicionar Produtos</a>
        </div>

        <div class="card-body">
            
            <div class="table-responsive">
                
                <table class="table table-hover align-middle">
                    
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Estoque</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @isset($produtos)
                        @foreach($produtos as $produto)

                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>R$ {{ $produto->valor }}</td>
                            <td>{{ $produto->estoque }}</td>

                            <td>
                                <span class="badge bg-success">
                                    {{ $produto->status }}
                                </span>
                            </td>

                            <td>
                            <form action="{{ route('dashboard.produto.update', ['id' => $produto->produto_id]) }}" method="GET">
                                    <button class="btn btn-warning btn-sm" type="submit" data-bs-toggle="modal" data-bs-target="#editarProduto">
                                        Editar
                                    </button>
                                </form>
                                <form action="{{ route('dashboard.produto.delete', ['id' => $produto->produto_id]) }}" method="GET">
                                <button class="btn btn-danger btn-sm" type="submit">
                                    Excluir
                                </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endisset
                    </tbody>

                </table>

            </div>

        </div>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>