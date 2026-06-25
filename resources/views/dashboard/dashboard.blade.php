<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin - Solemn's Workshop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg bg-white shadow-sm border-bottom">
    <div class="container">

        <div class="navbar-brand d-flex align-items-center">

            <img src="{{ asset('imagens/pngtree-circle-technology-abstract-logo-vector-minimalist-png-image_1881155-removebg-preview.png') }}"
                 class="logo-navbar me-2">

            <span class="fw-bold">
                Solemn's Workshop
            </span>

        </div>

        <div class="d-flex gap-2">

            <a href="{{ route('principal') }}"
               class="btn btn-info text-white">
                Ver Loja
            </a>

            <a href="{{ route('usuario.logout') }}"
               class="btn btn-outline-danger">
                Sair
            </a>

        </div>

    </div>
</nav>

<div class="container py-5">

    <div class="text-center mb-5">

        <h1 class="fw-bold">
            Painel Administrativo
        </h1>

        <p class="text-muted">
            Gerencie produtos, usuários e estatísticas da loja.
        </p>

    </div>

    <!-- ESTATÍSTICAS -->

    <div class="row g-4 mb-5">

        <div class="col-md-3">
            <div class="card dashboard-card border-0 shadow-sm">

                <div class="card-body text-center">

                    <i class="bi bi-box-seam card-icon"></i>

                    <h6 class="mt-3">Produtos Cadastrados</h6>

                    <h2>
                        {{ $totalProdutos ?? 0 }}
                    </h2>

                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="card dashboard-card border-0 shadow-sm">

                <div class="card-body text-center">

                    <i class="bi bi-archive card-icon"></i>

                    <h6 class="mt-3">Fora de estoque</h6>

                    <h2>
                        {{ $produtosForaEstoque }}
                    </h2>

                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="card dashboard-card border-0 shadow-sm">

                <div class="card-body text-center">

                    <i class="bi bi-people card-icon"></i>

                    <h6 class="mt-3">Usuários</h6>

                    <h2>
                      {{ $totalUsuarios ?? 0 }}
                    </h2>

                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="card dashboard-card border-0 shadow-sm">

                <div class="card-body text-center">

                    <i class="bi bi-shield-lock card-icon"></i>

                    <h6 class="mt-3">Administradores</h6>

                    <h2>
                        {{ $totalAdmins ?? 0 }}
                    </h2>

                </div>

            </div>
        </div>

    </div>

    <!-- BOTÕES -->

    <div class="row g-4 justify-content-center">

        <div class="col-md-5">

            <a href="{{ route('dashboard.produto.read') }}"
               class="dashboard-link text-decoration-none">

                <div class="card border-0 shadow dashboard-menu">

                    <div class="card-body text-center py-5">

                        <i class="bi bi-box-seam-fill menu-icon"></i>

                        <h3 class="mt-3">
                            Produtos
                        </h3>

                        <p class="text-muted">
                            Gerenciar estoque, preços e categorias.
                        </p>

                    </div>

                </div>

            </a>

        </div>

        <div class="col-md-5">

            <a href="{{ route('dashboard.usuario.read') }}"
               class="dashboard-link text-decoration-none">

                <div class="card border-0 shadow dashboard-menu">

                    <div class="card-body text-center py-5">

                        <i class="bi bi-people-fill menu-icon"></i>

                        <h3 class="mt-3">
                            Usuários
                        </h3>

                        <p class="text-muted">
                            Gerenciar clientes e administradores.
                        </p>

                    </div>

                </div>

            </a>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>